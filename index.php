<?php
$PageTitle="LaZhopee - Login";
include_once('templates/header.php'); 
include_once('functions/functions.php')

?>
<h1>Login</h1>
<form action="routes/homepage.php" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <br>
    <input type="password" name="password" placeholder="Password" required>
    <br>
    <input type="submit" value="Submit">    
</form>

<?php
include_once('templates/footer.php');
?>