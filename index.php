<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>D3 Page Template</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #F0FFFF;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
                <meta charset="utf-8">
        
        
   </head>
	
    <body>
        <table cellspacing="90px" >
        <tr><td><form action = "" method="post" enctype="multipart/form-data">
            <img src="assets/pics/bar1.jpg" /><br>Bar Chart
            <input type="submit" name="submit" value="submit"/>
        </td>
        <td><form action = "" method="post" enctype="multipart/form-data">
            <img src="assets/pics/chart2.JPG" /><br>Dynamic Clusters
            <input type="submit" name="submit2" value="submit"/>
        </td>
        

    </tr>
    </table>
    </body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if (isset($_POST['submit'])){
                include ("bar1.html");
                                    }
        if (isset($_POST['submit2'])){
                include ("chart2.html");
                                    }
                            


                                            }
        ?>
