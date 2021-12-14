<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>
<label for="first_name">First Name:</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);  ?>
">
<span class="error">
<?php echo $first_name_Err; ?>
</span>

<label for="last_name">Last Name:</label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);  ?>
">
<span class="error">
<?php echo $last_name_Err; ?>
</span>

<label for="email">Email:</label>
<input type="email" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);  ?>
">
<span class="error">
<?php echo $email_Err; ?>
</span>

<label for="device">What device do you usually play on?</label>
<ul>
<li>
<input type="radio" name="device" value="pc"
<?php if(isset($_POST['device']) && $_POST['device'] == 'pc') echo 'checked="checked"  '  ;?>
> PC/Laptop
</li>
<li>
<input type="radio" name="device" value="mobile"
<?php if(isset($_POST['device']) && $_POST['device'] == 'mobile') echo 'checked="checked"  '  ;?>
> Mobile Device
</li>
<li>
<input type="radio" name="device" value="gamesystem"
<?php if(isset($_POST['device']) && $_POST['device'] == 'gamesystem') echo 'checked="checked"  '  ;?>
> Game System (PlayStation, Xbox, etc.)
</li>
<li>
<input type="radio" name="device" value="handheld"
<?php if(isset($_POST['device']) && $_POST['device'] == 'handheld') echo 'checked="checked"  '  ;?>
> Handheld Device (Nintendo, PSVita, etc.)
</li>
</ul>
<span class="error">
<?php echo $device_Err; ?>
</span>

<label for="genres">What's your favorite genre(s)?</label>
<ul>
<li>
<input type="checkbox" name="genres[]" value="sandbox"
<?php if(isset($_POST['genres']) && in_array('sandbox', $genres ))  echo 'checked="checked" ' ;?>
> Sandbox
</li>
<li>
<input type="checkbox" name="genres[]" value="actionadventure"
<?php if(isset($_POST['herbs']) && in_array('actionadventure', $genres ))  echo 'checked="checked" ' ;?>
> Action/Adventure
</li>
<li>
<input type="checkbox" name="genres[]" value="puzzlestrategy"
<?php if(isset($_POST['genres']) && in_array('puzzlestrategy', $genres ))  echo 'checked="checked" ' ;?>
> Puzzle/Strategy 
</li>
<li>
<input type="checkbox" name="genres[]" value="simulationroleplaying"
<?php if(isset($_POST['genres']) && in_array('simulationroleplaying', $genres ))  echo 'checked="checked" ' ;?>
> Simulation/Roleplaying
</li>
<li>
<input type="checkbox" name="genres[]" value="horror"
<?php if(isset($_POST['genres']) && in_array('horror', $genres ))  echo 'checked="checked" ' ;?>
> Horror
</li>
<li>
<input type="checkbox" name="genres[]" value="survival"
<?php if(isset($_POST['genres']) && in_array('survival', $genres ))  echo 'checked="checked" ' ;?>
> Survival
</li>
<li>
<input type="checkbox" name="genres[]" value="sports"
<?php if(isset($_POST['genres']) && in_array('sports', $genres ))  echo 'checked="checked" ' ;?>
> Sports
</li>
<li>
<input type="checkbox" name="genres[]" value="shooters"
<?php if(isset($_POST['genres']) && in_array('shooters', $genres ))  echo 'checked="checked" ' ;?>
> Shooters
</li>
</ul>
<span class="error">
<?php echo $genres_Err; ?>
</span>


<label for="comments">Comments:</label>
<textarea name="comments">
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])  ;?>
</textarea>
<span class="error">
<?php echo $comments_Err; ?>
</span>

<label for="privacy">Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="agree"
<?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" ' ;?>
> I agree!</li>
</ul>
<span class="error">
<?php echo $privacy_Err; ?>
</span>

<input type="submit" value="Submit!">
<p><a href=""> Reset </a></p>

</fieldset>
</form>