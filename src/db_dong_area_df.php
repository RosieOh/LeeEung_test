<!-- http://localhost/team/seo_dong_area_df.php -->
<?php
// Rscript path
$rscript_path = "\"C:/Program Files/R/R-4.2.2/bin/Rscript.exe\"";

// Save dir
$save_path = "./team_df/";
if(!is_dir($save_path)) mkdir($save_path);

// Execute
$outfile = $save_path . "db_dong_apt_price_area.html";
$comm = $rscript_path . " db_dong_area.R";
exec($comm, $output);
?>

<!--결과 페이지 이동-->
<script>
    window.location.href = '<?=$outfile?>';
</script>