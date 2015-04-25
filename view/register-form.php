<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1 class="align">Register</h1>

<form method="POST" action="<?php echo $path . "/../controller/create-user.php"; ?>" class="form">
    <div>
        <label for="email">E-mail: </label>
        <input type="text" name="email"/>
    </div>
    <br>
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
        <button type="submit">Submit</button>
    </div>
</form>

