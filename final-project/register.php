<?php

include('server.php');
include('includes/header-form.php');
?>

<div id="wrapper">
<h1>Register Today!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>

<label for="firstname">First Name </label>
<input type="text" name="firstname" value="
<?php if(isset($_POST['firstname'])) echo htmlspecialchars($_POST['firstname']);?>">

<label for="lastname">Last Name </label>
<input type="text" name="lastname" value="
<?php if(isset($_POST['lastname'])) echo htmlspecialchars($_POST['lastname']);?>">

<label for="email">Email </label>
<input type="email" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">

<label for="username">Username </label>
<input type="text" name="username" value="
<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']);?>">

<label for="password_1">Password </label>
<input type="password" name="password_1" value="
<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1']);?>">

<label for="password_2">Confirm Password </label>
<input type="password" name="password_2" value="
<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2']);?>">

<button type="submit" name="reg_user" class="btn">Register</button>
<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>

<?php include('errors.php'); ?>

</fieldset>
</form>

<p class="block">Already a user? <a href="login.php">Log in here!</a></p>

</div>

</body>
</html>