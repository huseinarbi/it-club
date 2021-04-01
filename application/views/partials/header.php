<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo 'Login'; ?></title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Stylesheet CSS-->

        <?php

        /**
         * @todo css
         * re check if u want to enqueue some page
         * ex. login & dashboard has same class of css
         */

        ?>
        <?php if ( ! is_page( 'admin' ) ) : ?>

        <link rel="stylesheet" href="<?php echo asset_url('css/style.css'); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

        <?php else : ?>

        <link rel="stylesheet" href="<?php echo asset_url('vendor/fontawesome-free/css/all.min.css'); ?>"  type="text/css">
        <link rel="stylesheet" href="<?php echo asset_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset_url('css/admin.min.css'); ?>" >

        <?php endif; ?>
    </head>