<?php

if(isset($_POST['submit'])) {
   $uname = $_POST['username'];
   $pass = $_POST['password'];
   echo "Your username is<span style='color:green'>" . $uname . "<span style='color:black'> and password is <span style='color:green'>" . $pass;
}

?>  
<form action="<?php $_PHP_SELF ?>"method="post">
<h1> Let's the games BEGIN!</h1>
    <input type="text" name="username" placeholder= "User Name"><br><br>
    <input type="passowrd" name="password"placeholder= "Password"><br><br>
    <button tyoe="submit" name="submit">Hit It</button>
</form>