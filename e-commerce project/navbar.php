<?php $currentPage = basename($_SERVER['PHP_SELF']);
?> 
<nav>
    <ul>
        <?php if ($currentPage === 'index.php') { ?>
            <li><a href="authentification.php">Se connecter</a></li>
        <?php } ?>
        <?php if ($currentPage === 'authentification.php') { ?>
            <li><a href="index.php">Accueil</a></li>
        <?php } ?>
    </ul>
</nav>