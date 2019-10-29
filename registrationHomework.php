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
	let pv = document.getElementByID("validation.password");
	let succeeded = true;
	if(password == confirm){
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
	var selection = form.dropdown;
	selection = document.getElementId("ClassSelection");
	if(selection.selectedIndex == 0){
		alert("Please pick a value");
		succeeded = false;
	}
	console.log(selection.options[selection.selectedIndex].value);
	return succeeded;
		



}
</script>
</head>
<body><?php getName();?>
<form method="POST" action="#" onsubmit="return Validate();">
<input name="name" type="text" placeholder="Enter your name"/>
<input name="password" type="password" placeholder="Enter a password"/>
<input name="passwordCheck" type="password" placeholder="Re-enter the same password"/>
<input type="submit" value="Try it"/>


<select name="dropdown" id="ClassSelection">
	<option value="-1">Select a class</option>
	<option value="100139">Math 139</option>
	<option value="200201">PHYS 201</option>
	<option value="300211">CHEM 211</option>

</form>
</body>
</html>

<?php checkPasswords();?>
<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
	}
?>
