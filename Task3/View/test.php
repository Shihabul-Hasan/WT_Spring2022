<?php
include "../Control/results.php";
?>
<html>
    <head>
        <title>
            My Site
        </title>
    </head>
    <body>
        <h1> Task3 </h1>

        <form action = "" method = "post" enctype = "multipart/form-data">

            Username <input type = "text" name = "uname">
            <br/>

            Password <input type = "password" name = "password">
            <br/>
            <br/>
            <br/>
            
            <input type = "file" name = "myfile">
            <br/>

            <input type = "submit" name = "Submit">
        </form>
    </body>
</html>