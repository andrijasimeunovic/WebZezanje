<html>
    <head>
        <title>Admin Login</title> 
        <script>
            function validate(){
    var un = document.getElementById("un");
    var pw = document.getElementById("pw");
    
    if((un.value=="Andrija")&&(pw.value=="1234")){
      window.location.href="finproj_admthirdpage.php"
    }
    else if((un.value=="Indy")&&(pw.value=="5678")){
      window.location.href="finproj_admthirdpage.php"
    } 
    else{
      alert("Wrong Password....Try again later");
    }
  }
        </script>
    </head>
    <body bgcolor="Cornsilk" topmargin="40">
    <center><font size="10">Admin Log in</font></center>
        <table border='1' width='400', align='center'>
            <tr>
                <th bgcolor='lightgrey' colspan='4'>Admin Login </th> 
            </tr> 
            <tr>
                <td>USERNAME:</td>
                <td><input type="text" id="un"/></td>
            </tr>
            <tr>
                <td>PASSWORD:</td>
                <td><input type="password" id="pw"/></td>
            </tr>            
            <tr align='center'>
                <td colspan='4'><input type="button" value="Login" onclick="validate()"/></td> 
            </tr>
        </table>
    
    <a href="finproj_firstpage.php">GO BACK</a><br>
    </body>
</html>
