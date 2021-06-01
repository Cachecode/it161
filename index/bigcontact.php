
<!DOCTYPE html>
<html lang="en">

<head>
<title>big project</title>
<meta charset="utf-8">
<meta name=" name="viewport" content="width=device-width, initialscale=1">
<link rel="stylesheet"type='text/css' href="css/big.css">
<link rel="stylesheet"type='text/css' href='css/reset.css'>
<link rel="stylesheet"type='text/css' href='css/bignav.css'>
<script src="big\js\nav.js"></script>
</head>

<body>
<div id='container'>

<div class="desktop">

<img src="images\codedesktop.jpeg" scale="0" alt='codeheader' width="100%" id="headerimg">

</div>

<!--nav-->
<nav id='menu'>
<input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
<ul>
                <li><a href='bigproject.html'>Home</a></li>
                <li><a href='index.html'>IT-161</a></li>
                <li><a href='bigcontact.php'>Contact</a></li>
                <li><a class='dropdown-arrow' href='#'>Reasearch Projects</a>
                    <ul class='sub-menus'>
                        <li><a href='webaccessabilityresearch.html'>Web Accessibility</a></li>
                        <li><a href='formsresearch.html'>Forms Research</a></li>
                        <li><a href='smoresearch.html'>SMO Research</a></li>
                    </ul>
                </li>
                <li><a class='dropdown-arrow' href='#'>Google</a>
                    <ul class='sub-menus'>
                        <li><a href='calender.html'>Calender</a></li>
                        <li><a href='http://'>Maps</a></li>
                        <li><a href='http://'>Gallery</a></li>
                    </ul>
                    <li><a class='dropdown-arrow' href='http://'>WSDOT Live</a>
                        <ul class='sub-menus'>
                            <li><a href='http://'>bb</a></li>
                            <li><a href='http://'>Services Sub Menu 2</a></li>
                            <li><a href='http://'>Services Sub Menu 3</a></li>
                        </ul>
                    </li>
                    
                </ul>
</li>

</ul>
</nav>

<!--content area-->
<div class="row">
<div class="column">

<>asdfgaf</p>
<div class="container"

<?php

include 'includes/contact_include.php'; #site keys & code here

$toAddress = "mattfelker206@outlook.com";  //place your/your client's email address here
$toName = "Matthieu Felker"; //place your client's name here
$website = "Matthieu's Personal Website";  //place NAME of your client's website

//echo loadContact('simple.php');#demonstrates a simple contact form
echo loadContact('includes/multiple.php');#demonstrates multiple form elements

?>
</div>

</div>

<div class="column">



</div>
</div>


<footer>
<p>Made with &#9829; and coffee</p>
<p>&copy; 2021 by Matthieu Felker, All Rights Reserved ~ <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></p>

</footer>


</div>
</body>
</html>


