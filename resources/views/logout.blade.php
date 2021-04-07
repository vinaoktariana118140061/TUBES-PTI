<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<style>
    body {
	padding-top: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
	}

	fieldset{
		position: absolute;
		width: 497px;
		height: 170px;
		top: 20px;
		right: 20px;
		background-color: #3F3E39;
		border-color: #CCAC02;
	}

	h1 {
	position: absolute;
	width: 443px;
	height: 35px;
	left: 25px;
	top: 7px;

	font-family: Roboto;
	font-style: normal;
	font-weight: normal;
	font-size: 30px;
	line-height: 35px;

	color: rgba(252, 249, 238, 0.92);
	text-align: center;
	}  

	button{
		position: absolute;
	width: 176px;
	height: 40.28px;
	left: 294px;
	top: 125px;

	font-weight: bold;
	background-color: #CCAC02;
	text-align: center;
	margin: auto;
	display: flex;
	border-radius: 5px;
	border-color: #CCAC02;
	font-size: 20px;
	padding-left: 50px;
	padding-top: 7px;
	}
	.button1{
		position: absolute;
		width: 176px;
		height: 42.03px;
		left: 294px;
		top: 75px;

	font-weight: bold;
	background-color: #FE0505;
	text-align: center;
	border-radius: 5px;
	border-color: #FE0505;
	font-size: 20px;
	padding-left: 50px;
	padding-top: 7px;
	}
	
    </style>
</head>
<body>
<fieldset>
	<div>
		<h1>Are you sure want to logout? </h1>
	</div>
	<br><br>
	<div id="container_logout">
				<button type="submit" class="button1" id="Logout" value="Logout">Logout </button>
				<button type="submit" id="Cancel" value="Cancel">Cancel </button>
	</div>
</fieldset>
</body>
</html>
