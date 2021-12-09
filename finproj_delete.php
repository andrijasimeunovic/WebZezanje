<html>
    <head>
        <title>Deleting</title>
    </head>
    <body>
      <?php
            $con = mysqli_connect("localhost: 3306", "root", "", "Final_Project");
            $del_rec = $_GET['del'];
            $que = "DELETE from TOrders WHERE orderseq='$del_rec'";
            
            if (mysqli_query($con, $que)){
                echo "<script> window.open('finproj_admfourthpage.php?deleted= Order has been successfully removed','_self')</script>";
            }
      ?>
    </body>
</html>
