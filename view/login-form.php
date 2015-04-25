<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1 class="align">Login</h1>

<form method="POST" action="<?php echo $path . "controller/login-user.php"; ?>" class="form">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    <br>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    <br>
    <div class="submitbutton">
        <input type="hidden" name="login" value="login" />
        <button type="submit">Submit</button>
    </div>
</form>

