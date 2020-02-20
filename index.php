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
<h2>Login</h2>

<form action="" method="post">

<input type="text" name="uname" id="name" required="required" placeholder="Username"/><br /><br />
<input type="password" name="pword" id="pwd" required="required" placeholder="Password"/><br /><br />
<input type="text" name="sname" id="name" required="required" placeholder="Student name"/><br /><br />
<input type="number" name="phn" id="no" required="required" placeholder="Phone number"/><br /><br />

<input type="submit" value="View Student Notebook" name="submit"/><br />
</form>
<?php
  //echo 'This is Index Page';
 /*$sql = 'SELECT * FROM users';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();
  
  print_r ($details);*/
  
if(isset($_POST["submit"])){

$uname='root';
$password='';
$phne=$_POST["phn"];



try {
//$sql="SELECT true from docinfo where uname='".$_POST["uname"]."' and password='".$_POST["pword"]."'";

$stmt = $pdo->prepare("SELECT rec FROM history where sname='".$_POST["sname"]."' and phone='".$_POST["phn"]."'"); 
$stmt->execute(); 
$row = $stmt->fetch();
var_dump($row);
$nRows = $pdo->query("SELECT * FROM docinfo where uname='".$_POST["uname"]."' and password='".$_POST["pword"]."'")->rowCount(); 
$mRows = $pdo->query("SELECT * FROM history where phone='".$_POST["phn"]."' and sname='".$_POST["sname"]."'")->rowCount(); 




if ($nRows and $mRows) {

	
echo "<script type= 'text/javascript'>alert('Login Successful.');</script>";
echo '<a href="https://mighty-savannah-74300.herokuapp.com/indexcopy">Enter new record</a>';


//header('Location: https://mighty-savannah-74300.herokuapp.com/indexcopy');
//exit;

}
else{
echo "<script type= 'text/javascript'>alert('Login Failed');</script>";
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
