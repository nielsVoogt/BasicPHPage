<?php for ($i = 0; $i < count($programs); $i++): ?>
    <div class='yolo'>
        <p><?= $programs[$i]["programName"] ?></p>
        <p style="white-space: pre-line"><?= $programs[$i]["programDesc"] ?></p>
        <a href="<?= $programs[$i]['programUrl']; ?>">Klik hier</a>
    </div>
<?php endfor ?>