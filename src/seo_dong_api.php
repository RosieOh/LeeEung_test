
<!-- http://localhost/team/seo_dong_api.php -->

<?
// 함수 스크립트 - 주석처리 안 하면 안 보여짐
//require_once('./inc/func.php');
?>

<html>
    <head>
        <title>seo_dong</title>
        <script>
            window.onload = function() {
                document.getElementById('frm_submit_seo2').onclick = function() {
                    // 공통
                    let obj = document.getElementById('frm_seo2');
                    obj.method = 'get';

                    // 동별 평균거래금액
                    obj.action = 'seo_dong_trade_df.php';
                    obj.target = 'ifr3';
                    obj.submit();

                    // 동별 평당평균거래가
                    obj.action = 'seo_dong_area_df.php';
                    obj.target = 'ifr4';
                    obj.submit();

                    return false;
                }
            }
        </script>
    </head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LeeEung_Estate Data Analystics Dashboard</title>
        <!-- Favicon-->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/style1.css" rel="stylesheet" />
        <link href="../css/styles4.css" rel="stylesheet" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="main1.php">LeeEung_Estate Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">구 별 데이터</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="db_all_api.php">도봉구</a></li>
                                <li><a class="dropdown-item" href="gn_all_api.php">강남구</a></li>
                                <li><a class="dropdown-item" href="seo_all_api.php">서초구</a></li>
                                <li><a class="dropdown-item" href="#!">중구</a></li>
                                <li><a class="dropdown-item" href="#!">용산구</a></li>
                                <li><a class="dropdown-item" href="#!">성동구</a></li>
                                <li><a class="dropdown-item" href="#!">광진구</a></li>
                                <li><a class="dropdown-item" href="#!">중랑구</a></li>
                                <li><a class="dropdown-item" href="#!">성북구</a></li>
                                <li><a class="dropdown-item" href="#!">노원구</a></li>
                                <li><a class="dropdown-item" href="#!">은평구</a></li>
                                <li><a class="dropdown-item" href="#!">서대문구</a></li>
                                <li><a class="dropdown-item" href="#!">마포구</a></li>
                                <li><a class="dropdown-item" href="#!">양천구</a></li>
                                <li><a class="dropdown-item" href="#!">강서구</a></li>
                                <li><a class="dropdown-item" href="#!">구로구</a></li>
                             </ul>    
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">동 별 데이터</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="seo_dong_api.php">All Result</a></li>
                            </ul>
                        </li>
                    </ul>          
                </div>      
                <form id='frm_seo2' style="margin-left: 150; margin-top:10;">
            목록 : 
            <select name="schAirportCode">
            <option value="GMP" >서초구 동별 평당/평균 거래금액</option>
            <form id='frm_seo2'>
            <input id='frm_submit_seo2' type='button' value='제출'>
        </form>
            </select>
            </div>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" style='padding-right:100px;'>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><svg class="svg-inline--fa fa-user fa-fw" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path></svg><!-- <i class="fas fa-user fa-fw"></i> Font Awesome fontawesome.com --></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <iframe name='ifr3' src='' style='margin-top:50px; margin-bottom:50px; padding-left:100px; width:700; height:600; border:none;'></iframe>
        <iframe name='ifr4' src='' style='margin-top:50px; margin-bottom:50px; padding-left:100px; width:700; height:600; border:none;'></iframe>
   
    
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; LeeEung_Website</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    
    </body>
</html>