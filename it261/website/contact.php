<?php
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <div id="hero">
    </div> <!--end hero-->
<main>
<h1><?php echo $headline; ?></h1><br>
<p>Plants and flowers can have many benefits useful to the human body! 
In the form of herbs, they can provide relief to a variety of ailments. </p><br>
<h2>Please fill out my form!</h2>
<?php include('includes/form.php'); ?>
</main>

<aside>
<br>
<h3>My aside for my form</h3><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis nunc urna. </p><br>
<a href="herbs"><img src="images/herbs.jpg" alt="herbs"></a>
</aside>

<?php 
include('includes/footer.php'); ?>