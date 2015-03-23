<?php include '_includes/head_inc.php' ?>
<?php include '_includes/header.php' ?>

<div id="wrapper" class="grid">
    <?php 
        $includes = array(
            '_modules/_intro.php',
            '_modules/_colors.php',
            '_modules/_typography.php',
            '_modules/_buttons.php'
        );

        foreach($includes as $file) {
            include_once $file;
        }
    ?>
</div>

<?php include '_includes/footer.php' ?>
<?php include '_includes/footer_inc.php' ?>