<html>

<head> <title> $m </title> </head>
<?php
    $n = isset ($_GET ['n'])? intval ($_GET['n']):0;
    $m = $n + 1;
    print "<a href=\"?n=$m\"> $n </a>";
            
 ?>
