<html>

<head>
<title>Empun kitarasivut</title>
	<link rel="stylesheet" type="text/css" href="kysely.css"?v=<?php echo time(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		</script>
	<![endif]-->
	<meta name="description" content="Empun kitarasivut ja palvelut jyväskylästä" />
</head>

<body>
<header>
<h1>Yhteydenotto</h1>

</header>

	<nav class="navigation">
		<ul>
		  <li><a href="projekti.php">Uutiset</a></li>
		  <li><a href="galleria.php">Galleria</a></li>
		  <li><a href="yhteystiedot.php">Yhteystiedot</li>
		  <li><a href="Kysely.php">Yhteydenotto lomake</a></li>
		</ul>
	</nav>
		
			
		
		<div class="container">
  <form action="kysely.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Etunimi</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="Etunimi" placeholder="Nimesi..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Sukunimi</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="Sukunimi" placeholder="Sukunimesi..">
      </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="aihe" placeholder="aihe/kysymys?.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

		</form>   
			
	</div>
	<footer>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<div class="icon-bar">
  <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.google.com" class="google"><i class="fa fa-google"></i></a> 
  <a href="https://www.youtube.com" class="youtube"><i class="fa fa-youtube"></i></a>
	
		<p>&copy; 2018 Andreas Vilander t00t</p>
	</footer>
	</div>
	</body>
	</html>

<?php
$to = "andreas.vilander@gmail.com";
$from = $_POST["Email"];
$subject = "Subject";
$name = $_POST["nimi"];
$message = $_POST["Viesti"];

if (mail($to, $subject, $message , "From:$name <$from>"));
	
	
else
echo "viestin lähetys failas";
?>