<?php
$programs = array(
    array(
        "programName" => "asjdhdasj1",
        "programDesc" => "nsequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
            Proin condimentum fermentum nunc. Etiam dsa pharetra, erat sed fermentum feugiat, velit dfas mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.",
        "programUrl" => ".adssadsadsad",
    ),
    array(
        "programName" => "asjdhdasj123",
        "programDesc" => "nseqfgfff333333uat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.
            Proin condimentum fermentum nunc. Etiam dsa pharetra, erat sed fermentum feugiat, velit dfas mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.",
        "programUrl" => ".adssadsadsad",
    ),
    array(
        "programName" => "asjdhdasj2",
        "programDesc" => "asdjasdkds dasdasa",
        "programUrl" => ".adsadsdasadsasdd",
    ));
?>

<?php for ($i = 0; $i < count($programs); $i++): ?>
    <div class='yolo'>
        <p><?= $programs[$i]["programName"] ?></p>
        <p style="white-space: pre-line"><?= $programs[$i]["programDesc"] ?></p>
        <a href="<?= $programs[$i]['programUrl']; ?>">Klik hier</a>
    </div>
<?php endfor ?>