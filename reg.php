<!DOCTYPE html>
<!--7/Oct/2021-->
<!--Akshit-->
<!--19BCE0795-->
<html>
<head>
	<meta charset="utf-8">
	<title>Register for Clubs</title>
	<style>
		input{
			border-radius: 5px;
			height: 35px;
			border-style: none;
			margin: 10px;
		}
		input[type=radio] {
		    height: 1em;
		}
		input[type="submit"]{
			width: 90%;
			background-color: #a9a6ff;
			font-family: fantasy;
			font-size: 20px;
			padding: 5px;
		}
		input[type="text"]{
			width: 90%;
			font-family: fantasy;
			font-size: 20px;
			padding: 5px;
		}
		div{
			width: 50%;
			margin: auto;
			margin-top: 250px;
			text-align: center;
			font-size: 20px;
			font-family: fantasy;
			background-color: #f1f1f1;
			border-radius: 5px;
			padding: 10px;
		}
	</style>
	<script type="text/javascript">
		function validate_form(e) {
			var rn = document.forms["RegisterC"]["Regno"].value;
			var nm = document.forms["RegisterC"]["Name"].value;
			var pn = document.forms["RegisterC"]["Pno"].value;
			var club = document.forms["RegisterC"]["Club"].value;
			txt = document.getElementById("msg");
			txt.innerHTML = "You are Registered successfuly!<br>Name:"+nm+"<br>Reg.No:"+rn+"<br>Club:"+club;
			return false;
		}
	</script>
</head>
<body style='background-image: url("resourses/img/hero.jpg");'>
<div >
	<h1>Register for Clubs Here</h1>
	<h4>By Akshit 19BCE0795</h4>
	<form name="RegisterC" onsubmit="return false">
		<input type="text" name="Regno" placeholder="Registeration Number"><br>
		<input type="text" name="Name" placeholder="Name"><br>
		<input type="text" name="Pno" placeholder="Phome Number"><br>
		<p>Select Club<p>
		<input type="radio" id="Arts" name="Club" value="Arts">Arts Club
		<input type="radio" id="Music" name="Club" value="Music">Music Club
		<input type="radio" id="Dance" name="Club" value="Dance">Dance Club
		<input type="radio" id="Anchoring" name="Club" value="Anchoring">Anchoring Club
		<input type="submit" onclick="validate_form()">
	</form>
	<p id="msg" style="color: grey; font-style: italic;"></p>
</div>

</body>
</html>