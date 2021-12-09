<html>
    <head>
    </head>
        <body bgcolor="Cornsilk" topmargin="40" leftmargin="70">
            <form method='post' action='finproj_admfifthpage.php'>
            <table align='center' width='1000' border='1'>
                <tr>
                    <th colspan='20' align='center' bgcolor='lightgrey'> Edit Records</th>    
                </tr>
                <tr align='center'>
                    <td>Order</td>
                    <td>Quantity</td>
                    <td>Date of Order</td>
                    <td>Price</td>
                    <td>EDIT</td>
                </tr>
                <tr>
                  <td><select name='ord_name'> 
                        <option value='null'>name</option>
                        <option value='fridge1'>fridge1</option>
                        <option value='fridge2'>fridge2</option>
                        <option value='mini fridge1'>mini fridge1</option>
                        <option value='mini fridge2'>mini fridge2</option>
                        <option value='ice maker1'>ice maker1</option>
                        <option value='ice maker2'>ice maker2</option>
                        <option value='ice maker3'>ice maker3</option>                        
                    </select></td>
                    
                    <td><select name='ord_quantity'> 
                       <option value='null'>quantity</option>
                       <option value='1'>1</option>
                       <option value='2'>2</option>
                       <option value='3'>max3</option>
                    </select></td>         
                    <td>
                        <input type='text' name='ord_date'>
                    </td>
                    <td>
                        <input type='text' name='ord_price'>
                    </td>
                    <td colspan='5'>
                        <input type='submit' value='submit' name='submit'>
                    </td>
                </tr>
                
            </table>
            </form>
            
            <?php
            $con = mysqli_connect("localhost:3306", "root", "", "Final_Project");
            
        if(isset($_POST['submit'])){
            $order_name = $_POST['ord_name'];
            $order_quantity = $_POST['ord_quantity'];
            $order_date = $_POST['ord_date'];
            $order_price = $_POST['ord_price'];
        
            $que="INSERT INTO TOrders(ordername, orderquantity, orderdate, orderprice) VALUES('$order_name','$order_quantity','$order_date','$order_price')";
            
            if (mysqli_query($con, $que)){
                echo "Order has been changed";
            }
            
        }
        
        ?><br>
        <font size="3" color="black">Go to see your updated order. </font><a href="finproj_admfourthpage.php">ORDERS</a><br>
        </body>
</html>
       
