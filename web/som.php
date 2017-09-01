<?php
    $title = 'Som 1+1 = 3';
    $currentPage = 'Som';
    $description = "Hallo, ik ben een description";
?>

<!doctype html>
<html class="no-js" lang="">
    <?php include('includes/head.php'); ?>
    <body>
        <?php include('includes/browserwarning.php'); ?>
        <?php include('includes/navigation.php'); ?>
        <?php
        $pilots = array(
            array(
                "pilotName"     => "Boercamp1",
                "pilotContent"  => "Peter Parker",
                "pilotImageUrl" => "url",
            ),
            array(
                "pilotName"     => "Boercamp2",
                "pilotContent"  => "Clark Kent",
                "pilotImageUrl" => "url",
            ),
            array(
                "pilotName"     => "Boercamp3",
                "pilotContent"  => "Harry Potter",
                "pilotImageUrl" => "url",
            ));
        ?>
        <?php include('includes/pilots.php'); ?>
        <?php include('includes/footer.php'); ?>
    </body>
</html>