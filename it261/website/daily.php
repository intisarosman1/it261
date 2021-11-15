<?php
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">

<main style="<?php echo $color; ?>">
<h2><?php echo $headline; ?></h2><br>
<?php echo $special; ?><br>
<p><?php echo $content;?></p><br><br>

<h2>More daily specials!</h2>
<ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>
</main>

<aside>
<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt ?>" class="food">
</aside>

<?php 
include('includes/footer.php'); ?>