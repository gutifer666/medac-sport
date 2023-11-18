<?php
$connection = new mysqli("localhost", "root", "", "db_sport");
$connection->set_charset("utf8");
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}
