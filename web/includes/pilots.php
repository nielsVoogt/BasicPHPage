<?php for ($i = 0; $i < count($pilots); $i++): ?>
    <div class='yolo'>
        <p><?= $pilots[$i]["pilotName"] ?></p>
        <h1><?= $pilots[$i]["pilotContent"] ?></h1>
    </div>
<?php endfor ?>