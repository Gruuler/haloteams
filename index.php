<head>
	<title>Halo Squads</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="scripts/javascript.js"></script>
	<script type="text/javascript">

	window.onload = function() {

	  $('search').onclick = search;
  	}

	</script>

</head>
<body>

	<form method="get">
		Spartan: <input type="text" name="spartan" id="name"><br><br>
		<input type="button" value="Search" id="search">
	</form>

	<div id="spartan">
	</div>

</body>
