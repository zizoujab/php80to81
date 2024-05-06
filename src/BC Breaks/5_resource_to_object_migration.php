<?php
// Several resources have migrated to objects
//The FTP functions now accept and return FTP\Connection objects instead of ftp resources.
//
//The LDAP functions now accept and return LDAP\Connection objects instead of ldap link resources.
// ......


$ftpConn = ftp_connect("dlptest.com");
var_dump($ftpConn);


