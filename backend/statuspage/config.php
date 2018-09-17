<?php
namespace NerdBaggy\StatusPage;

//Uptime Robot API Key
define('apiKey', 'u428303-f239a3b52e01ea686042d44b');

//Uptime percentage for following days
define('historyDay', '1-7-30-360');

//Display names for the uptime percentage of the previous days
define('historyDaysNames', serialize(array('过去24小时', '过去一周', 'Past Month', 'Past Year')));

//How long to hold the cache of the data, best option is how often your checks get checked in seconds
define('cacheTime', 300);

//Only show these monitors
define('includedMonitors', '');

//Hide certain monitors
define('excludedMonitors', serialize(array()));
