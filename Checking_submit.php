<?php

if(isset($_GET['submit'])) {
    echo "Arr lone ok";
}

?>  
<form action="<?php $_PHP_SELF ?>"method="get">
    <input type="text" name="username">
    <button tyoe="submit" name="submit">Hit It</button>
</form>