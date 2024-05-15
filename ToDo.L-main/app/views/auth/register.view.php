<?php 
require "../app/views/components/header.php";
require "../app/views/components/navbar.php";
?>

<div class="max-w-md mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Register</h1>

    <form method="POST" class="space-y-4">
        <div>
            <label for="email" class="block">Email:</label>
            <input type="email" id="email" name="email" required class="block w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500">
            <?php if(isset($errors["email"])) {?>
                <span style="color: red;"><?php echo $errors["email"]; ?></span>
            <?php } ?>
        </div>

        <div>
            <label for="password" class="block">Password <span class="text-sm text-gray-600">(must be at least 8 characters long, containing at least 1 uppercase, 1 lowercase, 1 digit, and 1 special character)</span>:</label>
            <input type="password" id="password" name="password" required class="block w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:bg-blue-600">Register</button>
    </form>
</div>

<?php 
require "../app/views/components/footer.php";
?>
