<?php
//iig_header.php

/*
Use PHP to create a single page that rotates unique colors and content for each weekday (Sunday to Saturday) into the page. The content must include one unique image, with appropriate and unique content in the alt tag. The content must consist of a paragraph or two and include the name of the weekday in more than one place (it must say Monday in more than one place on the page, for example.)
The unique color could be the background HTML, or even an entire theme or stylesheet for each day of the week. All of the above must occur with one PHP page, based on the date() function.
*/

// initialize variables
$dayNumber = '';
$weekday = ''; //will store day of the week
$backgroundColor = ''; //will store the color the user wants
$mainComment = ''; //will store the comment in the div-main
$asideHyperlink = ''; //will store the comment in the div-main

//get the day of the week from the date function
$dayNumber = date('N');

//forcibly cast the day returned to an integer
$dayNumber = (int)$dayNumber;

//echo gettype($dayNumber), $dayNumber;
//die;


//please delete the following 2 lines when done testing
//$dayNumber =4;
//echo $dayNumber;

if($dayNumber == 1)
    {
    $weekDay = "Monday";
    $backgroundColor = "ivory";
    $imageMain = "image1-560px.jpg";
    $mainComment = ' - Ancestor wedding';
    $asideHyperlink = 'http://www.italiansrus.com/surnames/surnames.htm ';
    }
    else if($dayNumber == 2)
    {
    $weekDay = "Tuesday";
    $backgroundColor = "lavenderblush";
    $imageMain = "image2-560px.jpg";
    $mainComment = ' - Ancestor portrait #1';
    $asideHyperlink = 'http://www.italiamia.com/genealogy.php';
    }
    else if($dayNumber == 3)
    {
    $weekDay = "Wednesday";
    $backgroundColor = "lightgoldenrodyellow";
    $imageMain = "image3-560px.jpg";
    $mainComment = ' - Boarders with my ancestor';
    $asideHyperlink = 'http://www.cyndislist.com/italy';
    }
    else if($dayNumber == 4)
    {
    $weekDay = "Thursday";
    $backgroundColor = "mistyrose";
    $imageMain = "image4-560px.jpg";
    $mainComment = ' - Al Stimac (machinist) at the iron mine';
    $asideHyperlink = 'http://www.italyworldclub.com/genealogy/surnames/';
    }
    else if($dayNumber == 5)
    {
    $weekDay = "Friday";
    $backgroundColor = "moccasin";
    $imageMain = "image5-560px.jpg";
    $mainComment = ' - Pansino ancestors in Canada';
    $asideHyperlink = 'http://genealogypro.com/italroots.html';
    }
    else if($dayNumber == 6)
    {
    $weekDay = "Saturday";
    $backgroundColor = "beige";
    $imageMain = "image6-560px.jpg";
    $mainComment = ' - Ancestor portrait in village attire';
    $asideHyperlink = 'http://www.italywgw.org/';
    }
    else 
    {
    $weekDay = "Sunday";
    $backgroundColor = "white";
    $imageMain = "image7-560px.jpg";
    $mainComment = ' - Theresa as a young girl';
    $asideHyperlink = 'http://italiangen.org/';
    }

    
//echo $weekDay, $dayNumber, $backgroundColor, $imageMain, $asideHyperlinkk;
//die;

?>

<html>
	<head>
		<meta charset="UTF-8">
        <?=$title?>
		<title><?=$title?></title>

	<!--Remy Sharp Shim --> 
	<!--[if lt IE 9]> 
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
	</script> 
	<![endif]-->

		<link rel=stylesheet href="css/style.css" type="text/css" media=screen>
        <style>
            main {
                background-color: <?=$backgroundColor?>;			
            }
        </style>
	
	</head>
    
<!-- cut header here (line 113) -->   

