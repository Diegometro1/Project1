<?php


$quotes = [

    [
        'quote' => " “Two things are infinite: the universe and human stupidity;
                        and I'm not sure about the universe.” ",
    ],

    [
        'quote' => " “Don’t walk in front of me… I may not follow
                        Don’t walk behind me… I may not lead
                        Walk beside me… just be my friend” ",
    ],

    [
        'quote' => "“I've learned that people will forget what you said,
                        people will forget what you did,
                        but people will never forget how you made them feel.”",
    ],


    [
        'quote' => 'A friend is someone who knows all about you and still loves you.'

    ],

];


$rand = rand(0, count($quotes)-1);



?>






<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>
        Projects
    </title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<div id="main">
    <div>
	    <h1>DIEGO ACOSTA</h1>
    </div>


    <div id="mypic">
	    <img src="img/image2.JPG" alt="My Pic" width="300" height="200" />
    </div>


    <div>

        <h3>About me</h3>
        <p>I'm 37 years old, i born in Ecuador, i have been living in boston 15 years.</p>
        <p>I live in East Boston, is a great place where to live, everything is close , just the rent
        is too expensive now.</p>
        <p>English is my second Language , i speak Spaish</p>
        <p>I like to learn new things , and Web Development is something really cool and
            fun to learn</p>

    </div>


    <div>

        <h1>RANDOM QUOTE</h1>

    </div>


    <div>

        <p><?php echo $quotes[$rand]['quote']; ?></p>


    </div>




</div>


</body>
</html>
