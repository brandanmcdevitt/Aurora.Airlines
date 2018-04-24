<?php

/*

This file will be included in each page except for the index.php.
It's use is to display the current page name as the header title for these pages.

*/
$pageTitle = basename($_SERVER['PHP_SELF'],'.php');
?>

    <div class="page-title">

        <h1>
            <?php 
            
            /*
            
            Using an if statement to check the contents of the $pageTitle variable.
            If the contents are the same as "login" then update the variable to 
            "Log In / Register".
            
            */
            
            ?>
            <?php if($pageTitle == "login") {

                $pageTitle = "Log In / Register";    
    
            } ?>

            <?php
            
            /*
            
            Here we print the $pageTitle variable.
            
            If the $pageTitle variable is not equal to "login" then it will print with
            it's content that was set initially.
            
            If the statement is true then the updated variable will be printed.
            
            */
            
            ?>

                <?php echo $pageTitle; ?>


        </h1>

    </div>
