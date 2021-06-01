<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Matthieu Felker</title>
    <meta charset='utf-8'/>
    <meta name='robots' content="noindex,nofollow"/>
    <meta name='viewport' conent='width=device-width'/>
    <link rel="stylesheet" href="css\nav.css"/>
    <link rel="stylesheet" href="css\portal.css"/>
    <link rel="stylesheet" href="css\forms.css>
</head>

<body>    
    <header>
        <h1>Matthieu's IT161 Website</h1>
        <nav class="topnav" id="myTopnav">
            <a href="index.html" class="active">Welcome</a>
            <a href="elements.html">HTML Elements</a>
            <a href="aia.html">AIA</a>
            <a href="big/index.html">BIG</a>
            <a href="http://w3schools.com" target="_blank">W3 Schools</a>
            <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
            <a href="flowchart.html">Flowchart</a>
            <a href="fp/index.html">Final Project</a>
            <a href="contact.php">Contact Matthieu</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
    </header>
    

=
        
        <footer>
            <p><small>&copy; 2021 by <a href="contact.php">Matthieu Felker</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>
    </div>
    
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes\contact_include.php'; #site keys & code here
    
        $toAddress = "mattfelker206@outlook.com";  //place your/your client's email address here
        $toName = "Matthieu Felker"; //place your client's name here
        $website = "Contact Test site81";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('includes/multiple.php');#demonstrates multiple form elements

	?> <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
    
    <script>
        
     
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }   
    </script>
    
</body>
</html>


