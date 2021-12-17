<?php
include_once('./includes/header.php');
?>

<section class="error">
    <div class="container mx-auto">
        <?php if (isset($_GET['db'])) {
        ?>
            <h1><span>Can't Connect to <?php echo $_GET['db']; ?></span></h1>
            <p>Error says -> <?php echo $_GET['error']; ?></p>
        <?php
        } ?>
    </div>
</section>

<?php include_once('./includes/footer.php');
