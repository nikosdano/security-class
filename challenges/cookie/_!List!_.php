<html>
        <head>
                <link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
      <?php
      if ((isset($_COOKIE["User"])) && ($_COOKIE["User"] != "CreepyAngel")) {
	  echo(' <h1>Crap!</h1> <div class="div"> <p> Oh, let me see...Yeah it is obvious, you are unable to hack this shit. Nobody is able to bypass this security measure! </p> </div> ');
}
else
{
  echo (' <h1> Welcome back, CreepyAngel</h1> <div class="div"> <p>Hello CreepyAngel, your password is "8417a031bdadfb493a827cfec74bba14". Do not forget to decrypt it! </p> </div> ');
}
?>
</body>
</html>