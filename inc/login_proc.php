<?php
// // SERVER 변수 확인
// print_r($_SERVER);
// echo "<BR>\n";

// POST 변수 확인
// print_r($_POST);

// // 날짜
// $login_dt = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
// echo $login_dt;

// 비밀번호 확인
$pw = $_POST['password'];
$pw2 = $_POST['password2'];
if($pw!=$pw2){
?>
<script>
    alert("비밀번호가 일치하지 않습니다.");
</script>
<?php
    // 메시지를 출력하고 현재 스크립트를 종료
    echo "비밀번호가 일치하지 않습니다.";
    exit();
}

// 아이디 & 비밀번호 확인 후 로그인
echo "아이디 & 비밀번호 확인 후 로그인";

?>