 <?php
$link = mysql_connect('eloryzenet.ipagemysql.com', 'eloryzenet', 'xxxxxx'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db(ise_database_test1);
?>
