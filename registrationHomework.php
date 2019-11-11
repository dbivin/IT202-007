<!DOCTYPE html>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
			echo "<br>Passwords Matched!<br>";
		}
		else{
			echo "<br>Passwords didn't match!<br>";
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
	var conf = form.confirm.value;
	console.log(password);
	console.log(conf);
	let pv = document.getElementById("validation.password");
	let succeeded = true;
	if(password == conf){
		
		pv.style.display = "none";
		form.confirm.className= "noerror";	
	}
	else{
		pv.style.display = "block";
		pv.innerText = "Passwords don't match";
		form.confirm.className = "error";
		succeeded = false;
	}
	debugger;
	var sel = form.ddclass;
	if(sel.selectedIndex == 0){
		alert("Please pick a value");
		succeeded = false;
	}
	console.log(sel.options[sel.selectedIndex].value);
	return succeeded;	
}
</script>
</head>
<body>
<form method="POST" action="#" onsubmit="return validate();">
<input name="name" type="text" placeholder="Enter your name"/>

<input type="password" name="password" placeholder="Enter password"/>
<input type="password" name="confirm" placeholder="Re-Enter password"/>
<span style="display:none;" id="validation.password"></span>

<select name="ddclass" id="mySelectId">
	<option value="-1">Select One</option>
	<option value="132564">MATH139</option>
	<option value="213945">CHEM201</option>
	<option value="234917">PHYS101</option>
</select>
<input type="submit" value="Try it"/>
</form>
</div>
</body>
</html>
<?php checkPasswords();?>
<?php
if(isset($_POST)){
	echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>
