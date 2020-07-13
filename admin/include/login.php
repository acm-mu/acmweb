<center>
    <form action="" method="POST" class='login'>
        <h3>Admin Login</h3>

        <span class='error'> <?php 
            if (isset($_POST["submit"])) 
                if(!login($_POST)) 
                    echo "Invalid credentials!"; ?>
        </span>

        <label>Username</label>
        <input name="username">

        <label>Password</label>
        <input name="password" type="password"><br>

        <input name="submit" type="submit" value="Login">
    </form>

    <a href="/">Go back to mu.acm.org</a>
</center>