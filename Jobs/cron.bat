@echo on
REM -----Facebook CKWSearch
REM Copyright (c) 2015 AppLab, Grameen Foundation
REM Cron job in WAMP

php -f  gfsearch/Models/DownloadImageId.php

php -f   gfsearch/Models/DownloadKeywords.php

