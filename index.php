<?php
require_once __DIR__.'/protect.php';
require_once __DIR__.'/assets/scripts/readDB.php';
require_once __DIR__.'/assets/scripts/helper.php';

header("Cache-Control: no-cache, must-revalidate");
$startTime = microtime(true);
?>

<!doctype html>
<html lang="de">
    <?php head("Finance"); ?>
    <body class="">
        <?php printHeader("index"); ?>
        <div class="container-xl px-2 mb-4">
            <div class="container-xl py-1 px-3 mt-2 border rounded shadow-box">
                <?php printMonthlyBudget(); ?>
            </div>
            <?php monthlySaldo()?>
            <?php monthlyCategory(true, $id="einnahmenMonatTable")?>
            <?php monthlyCategory(false, $id="ausgabenMonatTable")?>
        </div>
    </body>
    <?php
    printFooter($startTime);
    ?>
    <script src="assets/scripts/scripts.js"></script>
    <script>
        $(document).ready(function() {
            colorizeTableByColumn("#einnahmenMonatTable", true);
            colorizeTableByColumn("#ausgabenMonatTable", false);
        });
    </script>
</html>
