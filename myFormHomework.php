<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

function getName(){
	if(isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p>";
		}
	}

function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
				echo "<br>Passwords Matched<br>";
			}
			else{
				echo "<br>Passwords didn't match<br>";
			}

		}
	}


?>

<html>
<head>
<script>
function validate(){
	var form = document.form[0];
	var password = form.password.value;
	var confirm = form.passwordConfirm.value;
	console.log(password);
	console.log(confirm);
	if(password == confirm){
		return true;
	}

	alert("Passwords don't match")
	return false;
}
</script>
</head>
<body><?php getName();?>
<form method="POST" action="#">
<input name="name" type="text" placeholder="Enter your name"/>
<input name="password" type="password" placeholder="Enter a password"/>
<input name="passwordCheck" type="password" placeholder="Re-enter the same password"/>
<input type="submit" value="Try it"/>
</form>
</body>
</html>

<?php checkPasswords();?>
<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
	}
?>
