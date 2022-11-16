<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>LOGIN</h1>
        <!-- add error message in php tags -->
        <?php 
            if(isset($_GET['error'])) {?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>Email: </label>
            <input type="email" name="email" placeholder="Email address" required> <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">LOGIN</button>
    </form>
</body>
</html>