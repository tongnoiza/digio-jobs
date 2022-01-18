
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="./xoc.js" ></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>XO Game</title>
</head>
<style>
   .i{
        width: 100px;
        height: 100px;
        font-size: 65px;      
    }
</style>
<body>
    <br>
   <div align="center">
   <br><h1>TIC TIC TIE Board Game</h1>
   <div id="set">
   <?php $size = @$_POST['sizeboard'];?>
   <script>
   createsize(<?= $size ?>);
   </script>
  <?php
    for ($i=0; $i < $size; $i++){ 
        for ($c=0; $c <$size; $c++) { 
        ?>
<input  type="button"class="i" id="xo<?= $i.$c ?>" onclick="xo(<?=$i?>,<?=$c?>)" value=" " >
      <?php 
         }
         echo "<br>";
    }
    ?>
    </div>
    <br><br>
<input  type="button" onclick="se()" value="see data">
</div>
</body>
</html>