<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
            <div id="header"><h1>Laravel - mon application</h1></div>
            <div id="maincol"><h2>tp3bis contexte Saison</h2>
            <?php
             echo "<ul>";
             foreach($lesSaisons as $uneS)
                {
                    echo"<li><a href= detailAliment/".$uneS->idSais.">".$uneS->libelleSais."</a></li>";
                }
                echo"</ul>";
             ?>
            </div>
            <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
            </div>
        </div>
    </body>
</html>