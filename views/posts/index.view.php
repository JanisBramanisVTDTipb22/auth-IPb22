<?php 
require "views/auth/head.php";
require "views/auth/navbar.php";
?>
    <h1>Secret dashboard</h1>

<form action="/logout" method="POST">
    <button>Logout</button>
</form>
<?php 
require "views/auth/footer.php";
?>