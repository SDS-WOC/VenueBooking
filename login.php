



<!DOCTYPE html>
<?php session_start(); /* Starts the session */
  
  /* Check Login form submitted */  
  if(isset($_POST['Submit'])){
    /* Define username and associated password array */
    $logins = array('deepika' => '123456','username1' => 'password1','username2' => 'password2');
    
    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    
    /* Check Username and Password existence in defined array */    
    if (isset($logins[$Username]) && $logins[$Username] == $Password){
      /* Success: Set session variables and redirect to Protected page  */
      $_SESSION['UserData']['Username']=$logins[$Username];
      header("location:index.php");
      exit;
    } else {
      /*Unsuccessful attempt: Set error message */
      $msg="<span style='color:red'>Invalid Login Details</span>";
    }
  }
?>
<html>
<head>
  <title>login</title>
  <style type="text/css" >


    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

table{
  background: #F5D2E7
;
  border: 2px solid #CF6BF2;
}
body{
  background:
url("Beautiful-Nature-Wallpapers-for-Background-HD-Wallpaper-1080x607.jpg")
 ;
 background-size: cover;
}
}

  </style>
</head>
<body>
<form action="login.php" method="post" name="Login_Form">
  <div><table width="100"  border="1 "align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table></div>
</form>
</body>
</html>