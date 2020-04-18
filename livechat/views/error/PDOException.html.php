<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>მონაცემთა ბაზის შეცდომა</title>

        <!-- Fonts -->

        <?php echo $app->renderView('blocks/fonts.html'); ?>
        
        <!-- Styles -->

        <link rel="stylesheet" href="<?php echo $app->asset('css/jquery.mCustomScrollbar.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/framework.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/main.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/admin.css') ?>" />
        <link rel="stylesheet" href="<?php echo $app->asset('css/bootstrap.css') ?>" />
    </head>
    <body class="install-wizard">

        <div class="panel">

            <div class="header">მონაცემთა ბაზის შეცდომა</div>

            <div class="content">
                
                <!-- Message -->
                
                <p class="intro">
                  განცხადება ვერ დააკავშირებს თქვენს მონაცემთა ბაზაში. დარწმუნდით, რომ მონაცემთა ბაზაში პარამეტრები სწორია.
                    
                    <br><br>
                    
                    <strong>
                       მონაცემთა ბაზა — <?php echo $vars['config']['dbName'] ?> — არ არსებობს გთხოვთ  შექმენით მონაცემთა ბაზა ხელით თქვენი მონაცემთა ბაზების ადმინისტრირების ინსტრუმენტით (მაგ. phpMyAdmin ) და დაბრუნდით ამ გვერდზე. 
                    </strong>
                    
                    <br><br>
                    
                    მონაცემთა ბაზიდან მიღებული შეცდომის შეტყობინება იყო:
                </p>
                
                <p class="error">
                    <?php echo $vars['message'] ?>
                </p>
                
                <!-- Actions -->

                <div class="row buttons">
                    <a class="btn" href="<?php echo $app->path('Install:wizard') ?>">
                     გაიარეთ ავტორიზაცია როგორც ადმინისტრატორი და შესწორეთ თქვენი მონაცემთა ბაზის პარამეტრები.
                        <i class="icon-circle-arrow-right icon-white"></i>
                    </a>
                </div>

            </div>
        </div>

    </body>
</html>
