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

<label for="phone">Phone Number:</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>
">
<span class="error">
<?php echo $phone_Err; ?>
</span>

<label for="concerns">Concerns:</label>
<ul>
<li>
<input type="radio" name="concerns" value="relief"
<?php if(isset($_POST['concerns']) && $_POST['concerns'] == 'relief') echo 'checked="checked"  '  ;?>
> Relief
</li>
<li>
<input type="radio" name="concerns" value="wound-healing"
<?php if(isset($_POST['concerns']) && $_POST['concerns'] == 'wound-healing') echo 'checked="checked"  '  ;?>
> Wound-Healing
</li>
<li>
<input type="radio" name="concerns" value="nutrition"
<?php if(isset($_POST['concerns']) && $_POST['concerns'] == 'nutrition') echo 'checked="checked"  '  ;?>
> Nutrition
</li>
<li>
<input type="radio" name="concerns" value="skincare"
<?php if(isset($_POST['concerns']) && $_POST['concerns'] == 'skincare') echo 'checked="checked"  '  ;?>
> Skincare
</li>
</ul>
<span class="error">
<?php echo $concerns_Err; ?>
</span>

<label for="wines">Desired Herb:</label>
<ul>
<li>
<input type="checkbox" name="herbs[]" value="calendula"
<?php if(isset($_POST['herbs']) && in_array('calendula', $herbs ))  echo 'checked="checked" ' ;?>
> Calendula
</li>
<li>
<input type="checkbox" name="herbs[]" value="poppy"
<?php if(isset($_POST['herbs']) && in_array('poppy', $herbs ))  echo 'checked="checked" ' ;?>
> California Poppy
</li>
<li>
<input type="checkbox" name="herbs[]" value="sage"
<?php if(isset($_POST['herbs']) && in_array('sage', $herbs ))  echo 'checked="checked" ' ;?>
> Sage
</li>
<li>
<input type="checkbox" name="herbs[]" value="chamomile"
<?php if(isset($_POST['herbs']) && in_array('chamomile', $herbs ))  echo 'checked="checked" ' ;?>
> Chamomile
</li>
</ul>
<span class="error">
<?php echo $herbs_Err; ?>
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