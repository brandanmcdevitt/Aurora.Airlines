<?php

/*

Creating the header.php to allow us to include it to every page with a simple function.

*/

?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php
        
        /*
        
        setting up variables to use throughout the website
        
        $title will be used for the website title
        
        $pageTitle will be used on the single pages to display the current file name
        as the page title; minus the .php file extension on the end
        
        */
        
        $title = "Aurora Airlines";
        $pageTitle = basename($_SERVER['PHP_SELF'],'.php');
        ?>

            <?php 
        
        //linking .css and .js files
        
        ?>
            <link href="{{ url('css/main.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

            <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
            <!-- <script src="/js/jquery.min.js"></script> -->
            <!-- <script src="/js/owl.carousel.min.js"></script> -->

            <?php
        
        //printing the $title
        
        ?>
                <title>
                    <?php echo $title; ?>
                </title>
    </head>

    <body>

        <?php
        
        /*
        
        if the page title is equal to "index" then display a specific div.
        if not, then display another div.
        
        */
        
        ?>

            <?php if($pageTitle == "index"){ ?>
            <div class="home-nav">
                <?php } else {?>
                <div class="nav">
                    <?php } ?>

                    <div class="logo"><a href="/"><img src="images/logo.png"></a>
                    </div>

                    <div class="nav-links">
                        <a href="/">Home</a>
                        <a href="destinations">Destinations</a>
                        <a href="contact">Contact Us</a>
                        <a href="login">Log In</a>
                    </div>

                </div>
