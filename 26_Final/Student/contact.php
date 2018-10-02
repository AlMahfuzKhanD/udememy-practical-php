<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 02-Oct-18
 * Time: 11:06 PM
 */

define("TITLE","Contact us | Franklin's Fine Dining");
include ('includes/header.php');
?>

<div id="contact">
    <hr>
    <h1>Get in touch with us!</h1>


    <form method="post" action="" id="contact-form">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name">

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email">

        <label for="message">Your Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
        <label for="subscribe">Subscribe to newsletter</label>


        <input type="submit" class="button next" name="contact_submit" value="Send Message">


    </form>
</div> <!-- contact -->

<?php include ('includes/footer.php');
