<?php
  if (isset($_POST['paz'])){
      $pazymiai= explode(',', $_POST['paz']);
      $suma=0;
      foreach ($pazymiai as $pazimys){
          $suma+= trim($pazimys) ;
      }
      $vidurkis=$suma / sizeof($pazymiai);
      arsort($pazymiai);

      /*
      $sumos=[0,0,0,0,0,0,0,0,0,0,0];
      foreach ($pazymiai as $pazimys){
          $sumos[$pazimys]++;
      }
      */
      $sumos=[];
      foreach ($pazymiai as $pazimys){
          $sumos[$pazimys]=(isset($sumos[$pazimys]))?$sumos[$pazimys]+1:1;
      }
      krsort($sumos);
  }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form method="post">
        <input type="text" name="paz">
        <button type="submit">Skaičiuoti</button>
    </form>
</div>
<?php
if (isset($vidurkis)){
?>
<div>
    Jūsų pažymiai (mažėjimo tvarka):
    <?php
        /*
        foreach ($pazymiai as $pazimys){
            echo "$pazimys, ";
        }
        */
    ?>
    <?=implode(", ", $pazymiai) ?>

</div>
<div>Jūsų vidurkis: <?=$vidurkis?> </div>
<div>
    Jus gavot:<br><br>
    <?php foreach ($sumos as $k=>$v){ ?>
    <?=$k?>: <?=$v?> <br>
    <?php } ?>
</div>
<?php
}
?>
</body>
</html>
