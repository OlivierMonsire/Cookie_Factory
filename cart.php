<?php require 'inc/head.php';

if(empty($_SESSION['login_name'])){
    header("Location: /index");
}
?>
<section class="cookies container-fluid">
    <div class="row">
        Dans votre panier il y a:
        <ul>
        <?php
        foreach ($_SESSION['cart'] as $panier){ ?>
         <li> <?php echo $panier['cookie_name'] ?> </li>
        <?php } ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
