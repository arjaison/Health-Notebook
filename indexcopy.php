<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<html>
<head>
  <title>Mepository</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Mepository</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li>
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
      </li>
     
      <li>
        <a class="nav-link" href="<?php echo ROOT_URL; ?>contact">Contact Us</a>
      </li>
    </ul>
      </div>
</nav>
<body>
<h2>History</h2>

<form action="" method="post">

Record: 

<textarea name="record" rows="25" cols="200"><?php echo $comment;?></textarea>

<input type="number" name="phn" id="no" required="required" placeholder="Phone number"/><br /><br />
<input type="submit" value=" Submit " name="bubmit"/><br />
</form>
<?php
  //echo 'This is Index Page';
 /*$sql = 'SELECT * FROM users';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();
  <?php
$val = $_GET["val"];
echo $val;
?>
  print_r ($details);*/
   

 
if(isset($_POST["bubmit"])){

$rec='';
$ph='';
$sn='';

try {






$sql="UPDATE history SET rec=rec || '".$_POST["record"]."' WHERE phone='".$_POST["phn"]."'";

if ($pdo->query($sql)->rowCount()) {
echo "<script type= 'text/javascript'>alert('Record Submitted');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Record not found');</script>";
}

$pdo= null;
}

catch(PDOException $e)
{
echo $e->getMessage();
}

}

  
  
?>

</body>
</html>
