<?php
// 세션 시작
sesstion_start();

// 함수 스크립트
require_once('../inc/func.php');

// 로그인 화면
if(empty($_SESSION['user_email'])) {
    exit("로그인이 필요합니다.");
}

// DB 연결
$mysqli = db_con();

// 사용자 목록
$query = "
    SELECT * FRO `user_info`
";
$result = mysqli_query($mysqli, $query);

?>
<html>
    <head>
        <style></style>
    </head>
    <body>
        <div class="li_table">
            <ul class="subject">
                <li>First Name</li>
                <li>Last Name</li>
                <li class="cell_email">Email</li>
                <li>Login</li>
            </ul>
<?php while ($row = mysqli_fetch_array($result)): ?>
            <ul>
               <li><?=$row['user_nm_first']?></li>
               <li><?=$row['user_nm_last']?></li>
               <li class="cell_email"><?=$row['user_email']?></li>
               <li><? if($row['user_email'] == $_SESSION['user_email']) echo "0"; echo "&nbsp;"; ?></li>
            </ul>
<?php endwhile; ?>
        </div>
    </body>
</html>