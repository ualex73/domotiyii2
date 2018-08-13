<?php

namespace app\components;

use Yii;

class Util
{
    public static function hello($name) {
        return "Hello $name";
    }

    function json_validate($string) {
        if (is_string($string)) {
            @json_decode($string);
            return (json_last_error() === JSON_ERROR_NONE);
        }
        return false;
    }

    /**
     Call to the DomotiGa JSON-RPC Server, sending a version=2.0 request. Parameters are:
      - method - JSON-RPC method to use, e.g. "domotiga.version"
      - data - data to be send, it is an Array (not an Object)
      - response = true or false. If set to false, we don't return an answer (nor the JSON-RPC server).

     Response (in Object format):
      - result - Data returned in the JSON-RPC response
      - error - If set, the text message with the error
     */
    public static function JsonRpcClient($method, $data = null, $notification = false)
    {
        $request['jsonrpc'] = '2.0';
        $request['method'] = $method;
        // Add data as params if it isn't a null value
        if ($data) {
            $request["params"] = $data;
        }
        // Set id if it a response is required
        if ($notification == false) {
            $request["id"] = rand(1, 65535);
        }

        $context = stream_context_create(
            ['http' =>
                ['method' => "POST",
                 'protocol_version' => '1.1',
                 'header' => "Content-Type: application/json\r\n" .
                             "Accept: application/json\r\n",
                 'content' => json_encode($request, JSON_UNESCAPED_SLASHES)
                ]
            ]
        );

        // Do the JSON-RPC call. '@' prevent a PHP exception if th call fails
        $file = @file_get_contents(Yii::$app->params['jsonRpcHost'], false, $context);

        // If we do a JSON-RPC notification, we don't care about an answer. Also no error handling
        if ($notification == true) return;

        // Check if the call is successfull or failed
        if ($file === false) {
            // could not connect - return false and the error message
            return (object) ['error' => Yii::t('app', 'Cannot connect to JSON-RPC server!')];
        } else {
            // Check for errors, before returning information
            $response = @json_decode($file);

            // Check if the "version" matches 2.0
            if (isset($response->version)) {
                if ($response->version != "2.0") {
                    return (object) ['error' => Yii::t('app', 'Invalid JSON-RPC version "'.$response->version.'" received')];
                }
            } else {
                return (object) ['error' => Yii::t('app', 'No JSON-RPC version received')];
            }

            // Check if the "id" matches our previously used id
            if (isset($response->id)) {
                if ($response->id != $request["id"]) {
                    return (object) ['error' => Yii::t('app', 'Invalid JSON-RPC id "'.$response->id.'" received, expected "'.$request["id"].'"')];
                }
            } else {
                return (object) ['error' => Yii::t('app', 'No JSON-RPC id received')];
            }

            // We can remove "version" and "id", they aren't needed anymore
            unset($response->version);
            unset($response->id);

            // If successfull call, the "result" field has to exist
            if (isset($response->result)) {
                return $response;
            } else {
                if (isset($response->error)) {
                    if (isset($response->error->message)) {
                        return (object) ['error' => 'JSON-RPC error: '.$response->error->message];
                    } else {
                        return (object) ['error' => Yii::t('app', 'Error returned by JSON-RPC, but no error message')];
                    }
                } else {
                    return (object) ['error' => Yii::t('app', 'No result or error received in JSON-RPC answer')];
                } 

            }
        }
    }
}

