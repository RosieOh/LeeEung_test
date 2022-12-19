<?php
// 설정 스크립트
require_once('conf.php');

// MariaDB connection
function db_con(){
    // error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // DB connect
    $mysqli = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);


    // charset
    mysqli_set_charset($mysqli, DATABASE_CHARSET);

    return $mysqli;
}

// MariaDB close
function db_close($mysqli){
    mysqli_close($mysqli);
}
?>