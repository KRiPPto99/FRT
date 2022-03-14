<!-- connection.php-->
<!-- Connection To MYSQL Database -->
<?php
    $server = "127.0.0.1:55059";
    $username = "azure";
    $password = "6#vWHD_$";
    $db = "localdb";

    $con = mysqli_connect($server,$username,$password,$db);

    if($con)
    {
        echo "";
    }
    else
    {
        echo "Error in Connection";
    }
?>
