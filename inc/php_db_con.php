<?php
// 함수 스크립트
require_once('../inc/func.php');

// DB 연결
$mysqli = db_con();

// DB 연결 확인
printf("Success... %s\n", mysqli_get_host_info($mysqli));

// 테이블 목록
$query = 'show tables';
$result = mysqli_query($mysqli, $query);
// Fentch a result row as an associative array, a numeric array, or both
while ($row  = mysqli_query($mysqli, $query)) {
    echo '<p>' . $row[0] . '<p>';
}

// DB 닫기
db_close($mysqli0);
?>