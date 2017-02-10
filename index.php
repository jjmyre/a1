<?php require('quotes.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Justin Myre</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/jellee-typeface" type="text/css"/>
</head>

<body>
	<div id="wrapper">
        <header>
    	   <h1>Justin Myre</h1>
        </header>
    	
        <img id="me" src="images/me.jpg" alt="Justin with Sherman the Beagle"/>
    	
        <h2>About Me</h2>
        <p>I was born and partially raised in Montana state, but moved to southeastern Washington when I was in secondary school. I graduated from Montana State University in Bozeman with a BA in Media Production and began working on films and commercials in Los Angeles soon after graduating. When LA grew tiring for me (and boy did it ever), I retreated back to my hometown in Washington state where my wife and I currently reside. I still work in media, though on a much smaller scale (local news, events, freelance, etc). I enjoy the great outdoors and feel blessed for living in the Pacific Northwest where there is plenty of roaming space and scenery to explore. In recent years I've begun to shift my attention toward web design and development and have found that several of my skill sets are transferrable and applicable. What was once a passing interest eventually convinced me to pursue an MLA in Digital Media Design through the Harvard Extension School.</p>
     
        <h2>Random Quotes</h2>
        <blockquote>
        <?php echo $randomQuote; ?>
        </blockquote>    
    </div>
</body>

</html>

