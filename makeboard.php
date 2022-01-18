<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=xostatus", $username, $password);
$conn->exec("SET CHARACTER SET utf8");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM `xo` ORDER BY id DESC";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./xoc.js" ></script>
</head>
<body><br> 
    <center><h1>xo board</h1><br>
    <div class="row">
    <div class="col-md-4"> </div>
        <div class="col-md-3"> 
            <form action="xo.php" method="post">
            <input type="text" class="form-control"name="sizeboard" placeholder="กรุณาระบุขนาดของบอร์ด" id="size" required>
            <br>
            <input type="submit"class="form-control" value="สร้างบอร์ด">
                </form></div></div>
                <br><br><br>
                <div class="row">
                <div class="col-sm-4" ></div>
<div class="col-sm-3" >
    <table class="table">
        <tr><th>ผลการเล่น</th></tr>
<?php 
foreach($conn->query($sql) as $row){
?>
<tr><td> <?php echo $row['status_XO'];?> </td></tr>
<?php
}
?>
</table>
</div>
  </div>
    </center>
</body>
</html>