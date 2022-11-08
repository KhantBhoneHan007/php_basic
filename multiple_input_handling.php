<?php

if(isset($_POST['submit'])) {
    $uname =$_POST['username'];
    $email =$_POST['email'];
    $pass =$_POST['password'];
echo $uname ."=" .$email ."=" .$pass . "<br>";
    $gender=$_POST['gender'];
echo $gender . "<br>";
   $subjects=$_POST['subjects'];
    foreach($subjects as $subject){
        echo$subject;
    }
    foreach($_FILES['files']['tmp_name'] as $key => $val){
        move_uploaded_file($_FILES['files']['tmp_name'][$key],
    'Upload/' . $_FILES['files']['name'][$key]);
    }
}

?>

<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
 <input type="text" name="username"placeholder ="Username"><br><br>
<input type="email" name="email"placeholder ="Email"><br><br>
<input type="password" name="password"><br><br>
<h1>Choose Gender </h1>
Male :<input type="radio" name="gender"value ="Male">
Female :<input type="radio" name="gender"value ="Female"><br><br>
<h2> Choose Subject </h2>
PHP:<input type="checkbox" name="subjects[]" value="PHP">
Aax:<input type="checkbox" name="subjects[]" value="Ajax">
JSON:<input type="checkbox" name="subjects[]" value="JSON">
MySQL:<input type="checkbox" name="subjects[]" value="MySQL"><br><br>
<input type="file" name="files[]"multiple><br><br>
<button type="submit"name="submit">Register</button>

    </form>