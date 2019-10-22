<html>
<head>
	<script>
	function pageLoaded(){
		let myDiv = document.createElement('div');
		myDiv.innerText = "new element added";
		document.body.appendChild(myDiv);
	}
	</script>
</head>
<body onload="pageLoaded();">
	<p id="myPara">Just showing that we loaded something<p>
</body>
</html>
