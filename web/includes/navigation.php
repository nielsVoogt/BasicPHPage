<nav>
    <ul>
        <?php
            $urls = array(
                'Home' => 'index.php',
                'Som' => 'som.php',
            );
        ?>
        <?php foreach ($urls as $name => $url): ?>
            <li <?= (($currentPage === $name) ? ' class="active" ': '') ?>>
                <a href="<?= $url ?>"><?= $name ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>