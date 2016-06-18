<p align = "right"> <a href = "logout.php">Logout</a></p>
<?php
session_start();
if (isset($_SESSION['u'])) {
    ?>
<h2> Welcome to my profile </h2>
<?php
}
else {
    echo"<p> Please login first!!! </p>";
    include('index.php');
}
?>


