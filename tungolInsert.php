<?php 

    $jerwin = mysqli_connect("localhost", "root", "","ccim_proj" );

    if($jerwin==false)
        {
            die("ERROR: could not Connect." .mysqli_connect_error());
            
        }
            $tungolFirstName = $_REQUEST['tungolFirstName'];
            $tungolLastName = $_REQUEST['tungolLastName'];
            $tungolMail = $_REQUEST['tungolMail'];
            $tungolUsername = $_REQUEST['tungolUsername'];
            $tungolPassword = $_REQUEST['tungolPassword'];
            $tungolConfirmedPassword = $_REQUEST['tungolConfirmedPassword'];
            $tungolNumber = $_REQUEST['tungolNumber'];

            $tungol = "INSERT INTO registration VALUES ('$tungolFirstName',
            '$tungolLastName','$tungolMail','$tungolUsername',
            '$tungolPassword','$tungolConfirmedPassword','$tungolNumber')";

            if(mysqli_query($jerwin,$tungol))
            {
                echo "<h1> Registration Successfuly!</h1>";
                echo nl2br ("$tungolFirstName \n $tungolLastName \n
                $tungolMail \n $tungolUsername \n $tungolPassword \n
                $tungolConfirmedPassword \n $tungolNumber ");
            }
            else
            {
                echo "ERROR  Sorry $tungol." .mysqli_error($jerwin);
            }
           
   mysqli_close($jerwin);