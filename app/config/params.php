<?php

return [
    'adminEmail' => 'admin@example.com',

    // default timezone
    'timeZone'=>'Europe/Amsterdam',

    // server settings
    'jsonrpcHost'=>'http://localhost:9090',
    'jsonrpcUser'=>'',
    'jsonrpcPassword'=>'',

    // security allow mobile control without login
    'allowMobileWithoutLogin'=>False, // don't allow, you can do this if you have setup ssl client certificate

    // database minimum version needed
    'versionDBRequired'=>'1.0.025',

    // base path to domotiga
    'basePathDomotiGa'=>'/home/<changethis>/domotiga/',

    // default refresh values per gridview (5000 = 5 seconds)
    'refreshDevices'=>'5000',
    'refreshDeviceValues'=>'5000',
    'refreshDeviceValuesLog'=>'5000',
    'refreshPhonecalls'=>'5000',
    'refreshContacts'=>'5000',
    'refreshEvents'=>'5000',
    'refreshTriggers'=>'5000',
    'refreshConditions'=>'5000',
    'refreshActions'=>'5000',
    'refreshCategories'=>'5000',
    'refreshDevicetypes'=>'5000',
    'refreshGroups'=>'5000',
    'refreshLocations'=>'5000',
    'refreshFloors'=>'5000',
    'refreshUsers'=>'5000',
    'refreshCameras'=>'5000',
    'refreshGlobalvars'=>'5000',
    'refreshDeviceBlacklist'=>'5000',
    'refreshPlugins'=>'5000',
    'refreshMobile'=>'5000',
    'refreshLogs'=>'5000',
    'refreshYiiGraphs'=>'5000',
    'refreshSslcertificates'=>'5000',

    // default page sizes for specific gridviews
    'pagesizeDevices'=>'20', // entries per page
    'pagesizePhonecalls'=>'30',
    'pagesizeContacts'=>'20',
    'pagesizeEvents'=>'20',
    'pagesizeTriggers'=>'20',
    'pagesizeConditions'=>'20',
    'pagesizeActions'=>'20',
    'pagesizeCategories'=>'20',
    'pagesizeDevicetypes'=>'20',
    'pagesizeGroups'=>'20',
    'pagesizeLocations'=>'20',
    'pagesizeFloors'=>'20',
    'pagesizeUsers'=>'20',
    'pagesizeCameras'=>'20',
    'pagesizeGlobalvars'=>'20',
    'pagesizeDeviceBlacklist'=>'20',
    'pagesizePlugins'=>'20',
    'pagesizeLogs'=>'50',
];
