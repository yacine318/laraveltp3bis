<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
            <div id="header"><h1>Laravel - mon application</h1></div>
            <div id="maincol"><h2>tp3bis</h2>
            <h2>detail de la saison <h2>
            <?php
            echo"<li><span class='vert gras'>".$uneS->libelleSais."</span></li>";
            echo"<ul>"; 
                 foreach($uneS->sesaliments as $unA)
                    {
                      echo "<li>".$unA->libelleAl." ==> <span class='vert gras'>"." ".$unA->stockAl." -".$unA->pivot->prix." €"."</span></li>";
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