<?php 

if(isset($_POST['firstname']))
{

$username = $_POST['username']; 

$sql= "SELECT * from  users WHERE username = '$username'"; 


$result = execute_Query(get_connection(), $sql); 

if(mysqli_num_rows($result)==1){

$true = "true"; 
	$_SESSION["usernameError"]= $true;

?>
<p  style = "color: red"> This username has already been used </p>

<form method="post" action = "createAccount.php">


<input name = "uError" type = "hidden"> 
	<input type="submit" value="Cancel">

</form>

<?php




}else{


	createAccount(get_connection(), $_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['password']); 

}



} 

function createAccount($connection, $firstname, $lastname, $username, $password){



$sql="INSERT INTO users (firstName, lastName, username, password) 
  VALUES ('$firstname', '$lastname', '$username','$password')";


$result = execute_Query($connection, $sql); 


 session_start();
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
header("location:loginsuccessful.php");


}







function get_connection() {
  $username = "root";
  $password = "";
  $hostname = "localhost";
  $database  = "amlyp"; 

  $mysqli  = mysqli_connect($hostname, $username, $password,$database );

  return $mysqli;
		

 
	}

function execute_Query($connection , $query){

  return $connection->query($query);



}






?>