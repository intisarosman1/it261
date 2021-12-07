<?php

include('server.php');
include('includes/header-form.php');
?>

<div id="wrapper">
<h1 class="center">Login</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>

<label for="username">Username </label>
<input type="text" name="username" value="
<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']);?>">

<label for="password">Password </label>
<input type="password" name="password" value="
<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']);?>">

<button type="submit" class="btn" name="login_user" >Login</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">
Reset</button>

<?php include('errors.php'); ?>
</fieldset>

</form>

<p class="block">Not a member?<a href="register.php">Register here!</a></p>

</div>

</body>
</html>