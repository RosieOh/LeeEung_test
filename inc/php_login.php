<?php
// 함수 스크립트
require_once('../inc/func.php');

// DB 연결
$mysqli = db_con();

// 로그인 정보
$user_email = 'dhxogns920@naver.com';
$user_pw = '12345678';

// 이메일 & 비밀번호 확인
$query = "
    SELECT * 
    FROM `user_info`
    WHERE
        `user_email` = '".$user_email."' AND
        `user_pw` = SHA2('".$user_pw."', 256)
";
$result = mysqli_query($mysqli, $query);
if(mysqli_num_rows($result)==1){
    /// 로그인 성공
    // 세션 시작
    session_start();
    // 사용자 정보
    $row = mysqli_fetch_array($result);
    // 메시지 출력
    echo $row['user_nm_first']." ".$row['user_nm_last']."(".$row['user_email'].")";
    echo "님 반갑습니다;";
    // 세션 저장
    $_SESSION['user_email'] = $row['user_email'];
} else {
    // 로그인 실패
    echo '이메일 또는 비밀번호가 일치하지 않습니다.';
}

// DB 닫기
db_close($mysqli);
?>
<BR>
user_email = <?$_SESSION['user_email']?>