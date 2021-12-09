<html>
    <head>
        <title>Orders</title> 
    </head>
    <body bgcolor="Cornsilk" topmargin="40" leftmargin="50">
        <form method='post' action='finproj_admthirdpage.php'>
        <table border='1' width='500', align='center'>
            <tr>
                <th bgcolor='lightgrey' colspan='5'>Submit New Order</th>
            </tr>
            <tr>
                <td>Order Name:</td>
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
            </tr>
            <tr>
                <td>Order Quantity:</td>
                <td><select name='ord_quantity'> 
                        <option value='null'>quantity</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>max3</option>
                    </select></td>                
            </tr>
            <tr>
                <td>Date of Order:</td>
                <td>
                    <input type='text' name='ord_date'>
                </td>
            </tr>    
            <tr>
                <td>Price:</td>
                <td>
                    <input type='text' name='ord_price'>
                </td>
            </tr>
            <tr align='center'>
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
                echo "Order has been sucesfully placed";
            }
            
        }
        
        ?><br>
        <font size="3" color="black">If there is no new order go to see list of orders. </font><a href="finproj_admfourthpage.php">ORDERS</a><br>
        <br><br><br>
        <a href="finproj_firstpage.php">GO BACK</a><br>
    </body>
</html>