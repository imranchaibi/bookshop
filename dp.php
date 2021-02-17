<?php
mysql_connect("localhost","root","password") or die("could not connect");
mysql_select_dp("library") or die("could not find database");
?>