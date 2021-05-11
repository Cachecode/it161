

    <!DOCTYPE html>
    
    <html lang="en">
      
    <head>
      
    
      <title>table test</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
    </head>
    
    <body>
      
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "mattfelker206@outlook.com";  //place your/your client's email address here
        $toName = "Matthieu Felker"; //place your client's name here
        $website = "Web 161 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    
    <table border="5" cellspacing="5" cellpadding="5" align="center" width="50%" >
        <caption><h3>Basic Table Elements</h3></caption>
        <tr>
            <td>tag</td>
            <td>name</td>
            <td>destription</td>
        </tr>
        <tr>
            <td>&lt;table&gt;</td>
            <td>cell 2, row 2</td>
            <td>cell 3, row 2</td>
        </tr>
        <tr>
            <td>&lt;tr&gt;</td>
            <td>cell 2, row 3</td>
            <td>cell 3, row 3</td>
        </tr>
        <tr>
            <td>&lt;tr&gt;</td>
            <td>cell 2, row 3</td>
            <td>cell 3, row 3</td>
        </tr> <tr>
            <td>&lt;th&gt;</td>
            <td>cell 2, row 3</td>
            <td>cell 3, row 3</td>
        </tr> <tr>
            <td>&lt;td&gt;</td>
            <td>cell 2, row 3</td>
            <td>cell 3, row 3</td>
        </tr>
    
    
    </table>
    </body>
    </html>