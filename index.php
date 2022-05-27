<?php
$PageTitle="LaZhopee - Login";
include_once('templates/header.php'); 

?>
<h1>Login</h1>
<form action="routes/homepage.php" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="submit" value="Submit">    
</form>

<?php

include_once('templates/footer.php');
?>