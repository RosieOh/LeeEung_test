<!-- http://localhost/team/seo_all_trade_df.php -->
<?php
// Rscript path
$rscript_path = "\"C:/Program Files/R/R-4.2.2/bin/Rscript.exe\"";

// Save dir
$save_path = "./team_df/";
if(!is_dir($save_path)) mkdir($save_path);

// Execute
$outfile = $save_path . "gn_price.html";
$comm = $rscript_path . " gn_all_trade.R";
exec($comm, $output);
?>

<!--결과 페이지 이동-->
<script>
    window.location.href = '<?=$outfile?>';
</script>