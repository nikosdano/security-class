  <html>
        <head>
                <link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
		<?php
		if( $_POST['passwd'] === 'weed' ) {
		      echo (' <h1>Congratulations</h1> <div class="div"> <p>You have successfully passed the challenge! Ask the secretary for your joint. Lol, just kidding, well done!</p> <img src="jesus.jpg" class="success"></div> ' ) ;
		}
		else{
			echo (' <h1> Cop or something? </h1> <div class="div"> <p> WTF, are you doing bro? Too high to type a password? Muahaha! </p> <img src="image.png" class="success"> </div> ' ) ;
		}
		?>
	</body>
   </html>