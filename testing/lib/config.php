<?php

$tmpdump = '/tmp/testdump.sql';
$logpath = 'testing/dumps+logs/';
$utilpath = 'testing/lib/';
$dumppath = 'testing/dumps+logs/';
$testrunpath = 'testing/runs/';
$db_log = 'local_config/aixada.log';
$dump_db_name = 'aixada_dump';
$db_name = 'aixada';

// neutralize timestamps
$sed = "sed 's/[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9] [0-9][0-9]:[0-9][0-9]:[0-9][0-9]/timestamp/g' ";

?>