<div>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="<?php bloginfo('charset'); ?>"><!--displays the encoding-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!--displays the Tagline in Settings->General -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>    
    <!-- Custom styles for this template -->
    <!--displays the primary CSS -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 

    <!--loads plugins/widgets -->
    <?php wp_head(); ?>

</head>


<body>




    <header class = "header" id = "myheader">
        

        <?php 
        wp_nav_menu(array(

            'theme_location' => 'top-menu',
            'menu_class' => 'navigation'
            )
        ); 
    ?>







    </header>
    
    <div class = "content">
        



