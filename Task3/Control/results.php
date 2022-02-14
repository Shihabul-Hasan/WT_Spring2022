<?php

if (isset($_REQUEST["Submit"]))
{

    echo "File Format: ", $_FILES["myfile"]["type"];
    echo "<br>";

    echo "File Size: ", $_FILES["myfile"]["size"], " B";
    echo "<br>";

    if (move_uploaded_file($_FILES['myfile']['tmp_name'],"../Files/"."Photo-.jpg"))
    {
        if (($_FILES["myfile"]["type"]) == "image/jpeg" )
        {
            if (($_FILES["myfile"]["size"]) < "2097152" )
            {
                echo "File uploaded";
            }
            else 
            {
                echo "Not uploaded[Recommended file size (less than 2 MB/2097152 B)]";
            }

        }
        else
        {
            echo "Not uploaded[recommended file type (.jpg)]";
        }

    }
    else
    {
        echo "Uploading Error";
    }
}
?>