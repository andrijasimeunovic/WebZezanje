<html>
    <head>
        <title>Editing</title>
    </head>
    <body bgcolor="Cornsilk" topmargin="40" leftmargin="70">
      <?php
            $con = mysqli_connect("localhost: 3306", "root", "", "Final_Project");
            $del_rec = $_GET['edi'];
            $que = "DELETE from TOrders WHERE orderseq='$del_rec'";
            
            if (mysqli_query($con, $que)){
                echo "<script> window.open('finproj_admfifthpage.php','_self')</script>";
            }
      ?>

    </body>
</html>