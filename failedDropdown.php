<!DOCTYPE html>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

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
	var form = document.forms[0];
	var password = form.password.value;
	var confirm = form.confirm.value;
	console.log(password);
	console.log(confirm);
	let pv = document.getElementByID("validation.password");
	let succeeded = true;
	if(password == conf){
		pv.stlye.display = "none";
		form.confirm.className = "noerror";
	}
	else{
		pv.style.display = "block";
		pv.innterText = "Passwords don't match";
		form.confirm.className = "error";
		succeeded = false;
	}
	debugger;
	
	

	//dropdown validation
	var sel = form.dd;
	sel = document.getElementByOD("mySelectID");
	if(sel.selectedIndex == 0){
		alert("Please pick a value");
		succeeded = false;
	}
	console.log(sel.options[sel.selectedIndex].value);
	return succeeded;
		



}
</script>

<style>
input {border: 1px solid black;}
.error {border: 1px solid red;}
.noerror {border: 1px solid black;}
</style>

</head>
<body>
<form method="POST" action="#" onsubmit="return Validate();">
<input name="name" type="text" placeholder="Enter your name"/>
<input name="password" type="password" placeholder="Enter a password"/>
<input name="confirm" type="password" placeholder="Re-enter the same password"/>
<span style="display:none;" id="validation.password"></span>

<select name="dd" id="mySelectID">
	<option value="-1">Select a class</option>
	<option value="100139">Math 139</option>
	<option value="200201">PHYS 201</option>
	<option value="300211">CHEM 211</option>
</select>
<input type = "submit" value="Try it"/>

</form>
</body>
</html>

<?php checkPasswords();?>
<?php
if(isset($_POST)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
	}
?>
