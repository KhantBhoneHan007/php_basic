<?php

if(isset($_POST['submit'])) {
    $uname =$_POST['username'];
    $email =$_POST['email'];
    $pass =$_POST['password'];
echo $uname ."=" .$email ."=" .$pass;
}

?>






<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
 <input type="text" name="username"placeholder ="Username"><br><br>
<input type="email" name="email"placeholder ="Email"><br><br>
<input type="password" name="password"><br><br>
<h1>Choose Gender </h1>
<input type="radio" name="gender"value ="Male">
<input type="radio" name="gender"value ="Female"><br><br>
<h2> Choose Subject </h2>
<input type="checkbox" name="subjects[]" value="PHP">
<input type="checkbox" name="subjects[]" value="Ajax">
<input type="checkbox" name="subjects[]" value="JSON">
<input type="checkbox" name="subjects[]" value="MySQL"><br><br>
<input type="file" name="files[]"multiple><br><br>
<button type="submit"name="submit">Register</button>

    </form>