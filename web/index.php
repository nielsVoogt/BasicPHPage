<?php
    $title = 'Home';
    $currentPage = 'Home';
    $description = "Hallo, ik ben een description";
?>

<!doctype html>
<html class="no-js" lang="">
    <?php include('includes/head.php'); ?>
    <body>
        <?php include('includes/browserwarning.php'); ?>
        <?php include('includes/navigation.php'); ?>
        
        <?php
        $programs = array(
            array(
                "programName" => "asjdhdasj1",
                "programDesc" => "nsequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
                    Proin condimentum fermentum nunc. Etiam dsa pharetra, erat sed fermentum feugiat, velit dfas mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.",
                "programUrl" => ".adssadsadsad",
            ),
            array(
                "programName" => "asjdhdasj2",
                "programDesc" => "asdjasdkds dasdasa",
                "programUrl" => ".adsadsdasadsasdd",
            ));
        ?>
        <?php include('includes/programs.php'); ?>
        <?php include('includes/footer.php'); ?>
    </body>
</html>