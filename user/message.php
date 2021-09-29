<?php include "../includes/db.php"; ?>
<?php include "includes/user_header.php"; ?>

<!-- Navigation -->
<?php include "includes/user_navigation.php"; ?>
<header>MINIMALISTIC FORM</header>

<form id="form" class="topBefore">

    <input id="name" type="text" placeholder="NAME">
    <input id="email" type="text" placeholder="E-MAIL">
    <textarea id="message" type="text" placeholder="MESSAGE"></textarea>
    <input id="submit" type="submit" value="GO!">

</form>

<?php include "includes/user_footer.php"; ?>