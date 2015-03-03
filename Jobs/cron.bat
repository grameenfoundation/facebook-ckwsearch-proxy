@echo off
REM -----
REM Copyright (c) 2015 AppLab, Grameen Foundation
REM Cron job in WAMP


php -f C:\wamp\www\Grameen\Db\DownloadImageId.php

php -f C:\wamp\www\Grameen\Db\DownloadKeywords.php

REM wget --directory-prefix=CronJobs/images http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%22imei%22%3A%22355435053574074%22%7D&method=images

REM wget --directory-prefix=CronJobs/farmers http://grameenfoundation.force.com/ckwsearch/SearchGetRequest?data=%7B%22imei%22%3A%22355435053574074%22%2C%20%22farmersVersion%22%3A%222014-11-03%2000%3A00%3A00%22%7D&method=farmers