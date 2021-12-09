<html>   
    <head>
        <title>Orders list</title>
        <script>
            var output="";

function ins(input){
  output= output + input;
  document.getElementById("display").value=output;
}
function equals(){
  document.getElementById("display").value=eval(output);
}
function clearDisplay(){
  output="";
  document.getElementById("display").value=output;
}
function tan(output){
  output.value=Math.tan((output.value*3.1415)/180);
}
function sin(output){
  output.value=Math.sin((output.value*3.1415)/180);
}
function cos(output){
  output.value=Math.cos((output.value*3.1415)/180);
}
function abs(output){
  output.value=Math.sqrt(output.value);
}
function pow(output){
  output.value=Math.pow(output.value, 2);
}
        </script>
    </head>
    <body bgcolor="Cornsilk" topmargin="40" leftmargin="70">
        <table align='center' width='1000' border='1'>
            <tr>
                <th colspan='20' align='center' bgcolor='lightgrey'> Order Records</th>    
            </tr>
            <tr align='center'>
                <td>Order #</td>
                <td>Order</td>
                <td>Quantity</td>
                <td>Date of Order</td>
                <td>Price</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
                <?php
               
                $con= mysqli_connect("localhost: 3306", "root", "", "Final_Project");
                $que= "Select * FROM TOrders";
                $run= mysqli_query($con, $que);
                
                $i=1;
                while($row= mysqli_fetch_array($run)){
                $ord_seq= $row['orderseq'];
                $ord_name= $row[1];
                $ord_quantity= $row[2];
                $ord_date= $row[3];
                $ord_price= $row[4];
                ?>
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td><?php echo $ord_name; ?></td>
                <td><?php echo $ord_quantity; ?></td>
                <td><?php echo $ord_date; ?></td>
                <td><?php echo $ord_price; ?></td>
                <td><a href="finproj_delete.php?del=<?php echo $ord_seq;?>">DELETE</a></td>    
                <td><a href="finproj_edit.php?edi=<?php echo $ord_seq;?>">EDIT </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <br><br>
        <?php echo @$_GET['deleted']; ?><br>
        <?php echo @$_GET['edited']; ?><br>
        
        
            <br><br><br><br><br><br><br><br>
            <a href="finproj_admthirdpage.php">ADD NEW ORDER</a><br><br><br>
            
            
            
            
            
            
            
            
            
            <br><br><br><br><br><br><br><br><br>
            
            <center><font size="8" color="black">Calculate your orders</font></center><hr>
	<br>
	<form>
	<center><table border="1" bgcolor="grey" bordercolor="grey" width="300" height="200">
		<tr bgcolor="white">
                    <td colspan="5"><input type="text" id="display" size="50" value="" style="height:100%; width:100%;"></td>
		</tr>
		<tr>
                    <td colspan="5" style="text-align:center"><input type="button" id="clearing" value="Clear" onclick="clearDisplay()" style="height:100%; width:100%;"></td>
		</tr>
		<tr>
                    <td style="text-align:center"><input type="button" value="1" onclick="ins('1')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="2" onclick="ins('2')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="3" onclick="ins('3')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="+" onclick="ins('+')" style="height:100%; width:100%;"></td>
		</tr>
                <tr>
                    <td style="text-align:center"><input type="button" value="4" onclick="ins('4')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="5" onclick="ins('5')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="6" onclick="ins('6')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="-" onclick="ins('-')" style="height:100%; width:100%;"></td>
		</tr>
                <tr>
                    <td style="text-align:center"><input type="button" value="7" onclick="ins('7')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="8" onclick="ins('8')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="9" onclick="ins('9')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="*" onclick="ins('*')" style="height:100%; width:100%;"></td>
		</tr>
                <tr>
                    <td style="text-align:center"><input type="button" value="0" onclick="ins('0')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="." onclick="ins('.')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="/" onclick="ins('/')" style="height:100%; width:100%;"></td>
                    <td style="text-align:center"><input type="button" value="Enter" onclick="equals()" style="height:100%; width:100%;"></td>
		</tr>
            </table></center>
  </form>
        <br><br><br>

            <a href="finproj_firstpage.php">GO BACK</a><br>
        </body>
            
</html>