<!DOCTYPE html>


<html>
<head>
	<title>Waterfall Demo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/duck.gif'>
			</td>
			<td>
				<h1 id = "message">This is our title</h1>
	<form action="action_page.php" method ="get" >
  <div class="imgcontainer">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit">Login</button>
	
  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>

<form action="createaccount.php" method ="get"> 
    <button type="submit">Create Account</button>


</form>
			</td>
		</tr>
	</table>
</body>
</html>