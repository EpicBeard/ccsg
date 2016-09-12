<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- SEO  -->
    <meta name="Description" content="">
    <meta name="Keywords" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="http://scotch.io/favicon.ico">

    <!-- Styles -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/corgroup.css">

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<?php include 'nav-bar.php'; ?>

<div class="container">
    <div class="about-banner">
        <img src="img/contact_image.jpg" alt="contact us image">
    </div>
</div>
<div class="about-title">
    <h1 class="robot" id="about-h1">Contact Us</h1>
</div>

<div class="container">
    <div class="contact-info">
        <p class="robot-p">
            If you would like to contact Correctional Consulting Services Group, simply press or click the button below
            and fill in the fields. Once we receive your information, we will contact you as soon as possible.
        </p>
        <!-- trigger modal -->
       <button id="contact-button" data-toggle="modal" data-target="#contactModal">Contact</button>

        <!-- Modal -->
        <div class="modal fade" id="contactModal" role="dialog">
            <div class="modal-dialog">

                <!-- modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1 class="modal-title" style="font-size: 2em">Contact CCSG</h1>
                    </div>
                    <div class="modal-body">
                        <div class="main_form" method="POST" action="send_email.php">
                            <form>
                                <input type="text" name="full_name" placeholder=" Full Name" style="line-height: 2em; width: 30em; height: 3em; border-radius: .25em; border: .5px solid #515151; margin-bottom: 1em;" required>
                                <input type="text" name="email" placeholder=" Email" style="line-height: 2em; width: 30em; height: 3em; border-radius: .25em; border: .5px solid #515151; margin-bottom: 1em;" required>
                                <input type="text" name="telephone" placeholder=" Telephone" style="line-height: 2em; width: 30em; height: 3em; border-radius: .25em; border: .5px solid #515151; margin-bottom: 1em;" required>
                                <br>
                                <input type="submit" href="send_email.php" value="Submit" name="submit" style="width: 50%; height: 3em; background-color: #b4b4b4; border-radius: .25em; font-size: 1.25em">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>

