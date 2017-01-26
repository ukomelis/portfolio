<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["e-mail"];
        $message = $_POST["message"];
        $human = intval($_POST["human"]);
        $from = "Portfolio site";
        $to = "ukomelis56@gmail.com";
        $subject = "Portfoli contact message";

        $body = "From: $name\n E-mail: $email\n Message:\n $message";
    

        //From validation
        if(!$_POST["name"]) {
            $errName = "Please enter your name";
        }

        if(!$_POST['e-mail'] || !filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = "Please enter a valid email address";
        }

        if(!$_POST["message"]) {
            $errMessage = "Please enter a message";
        }

        if($human != 5) {
            $errHuman = "Your anti-spam is incorrect";
        }

        //If no errors, send the email
        if(!$errName && !$errEmail && !$errMessage && !$errHuman) {
            if (mail($to, $subject, $body, $from)) {
                $result = "<div class='alert alert-success'>Thank you! I will be in touch!</div>";
            } else {
                $result = "<div class='alert alert-danger'>Sorry there was an error sending your message. Please try again later</div>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Uko Melis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body class="home" data-spy="scroll" data-target=".navbar" data-offset="70">
        <header id="home">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#work">Work</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 title text-uppercase text-center">
                            <h1>Uko Melis</h1>
                            <h3>Developer</h3>                            
                            <hr class="line" style="margin-bottom: 60px">
                        </div>
                    </div>
                    <div class="row text-center text-uppercase">
                        <div class="col-md-12">
                            <a class="learn-more-btn" role="button" href="#contact">Get in touch</a>
                        </div>
                    </div>              
                </div>
            </section>
        </header>

        <section class="container-fluid work" id="work">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-uppercase">
                        <h2>Work</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 featured-work">
                        <div class="hovereffect">
                        <img class="img-responsive" src="http://lorempixel.com/400/200/sports/1/" alt="placeholder">
                        <div class="overlay">
                            <h2><a href="#">Bat hitting man</a></h2>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 featured-work">
                        <div class="hovereffect">
                        <img class="img-responsive" src="http://lorempixel.com/400/200/sports/2/" alt="placeholder">
                        <div class="overlay">
                            <h2><a href="#">Aqua man</a></h2>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 featured-work">
                        <div class="hovereffect">
                        <img class="img-responsive" src="http://lorempixel.com/400/200/sports/3/" alt="placeholder">
                        <div class="overlay">
                            <h2><a href="#">Biker boyz</a></h2>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 featured-work">
                        <div class="hovereffect">
                        <img class="img-responsive" src="http://lorempixel.com/400/200/sports/7/" alt="placeholder">
                        <div class="overlay">
                            <h2><a href="#">Diving man</a></h2>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 featured-work">
                        <div class="hovereffect">
                        <img class="img-responsive" src="http://lorempixel.com/400/200/sports/5/" alt="placeholder">
                        <div class="overlay">
                            <h2><a href="#">X-games</a></h2>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 featured-work">
                        <div class="hovereffect">
                        <img class="img-responsive" src="http://lorempixel.com/400/200/sports/6/" alt="placeholder">
                        <div class="overlay">
                            <h2><a href="#">Ronaldo</a></h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid about" id="about">
            <div class="container">
                <div class="row text-center text-uppercase">
                    <div class="col-md-12">
                        <h2>About Me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-responsive about-me-img" src="img/about.jpg" alt="about-me-image">
                    </div>
                    <div class="col-md-8">
                        <p class="about-me">Lorem ipsum dolor sit amet, neque amet, nunc semper scelerisque ut a. Lorem purus non cras. Lacinia nulla velit scelerisque parturient vel, malesuada imperdiet sed sed eu tellus ornare, tincidunt eu dictum pede molestie, odio a adipisci nullam integer scelerisque. Mi lectus vel felis facilisis, mattis ac ac, sit porta volutpat vulputate sociosqu corporis, sed in et urna.</p>
                        <p class="about-me">Praesent amet eget libero vulputate duis, cras ut blandit feugiat, eu per tempore ut et pellentesque quis. Pellentesque odio mi pellentesque odio a purus, ligula lectus venenatis, ut earum sem turpis sagittis.</p>
                        <p class="about-me">Et fames pretium hac luctus sit in, vitae pellentesque ac feugiat tincidunt non aenean, mauris aliquam justo proin, posuere felis nulla vitae erat proin leo, amet est felis. Odio adipiscing quis ipsum sit tellus, sed amet justo nibh. Vestibulum luctus tempus tortor dictum in, congue ornare ut placerat turpis enim est, ullamcorper dolor, arcu consequat vehicula dolor risus lacus. Donec bibendum commodo non. Vitae semper laoreet sem parturient, suspendisse eget ut.</p>
                        <p class="about-me">An ante nulla, est doloribus porta quis dictum ac lacus, interdum proin vivamus facilisis eleifend nascetur, elit odio. Faucibus tellus velit lectus arcu class lacus, interdum dui donec, metus sociosqu vitae eu et proin sit, quis primis praesent massa dolore, rutrum accumsan luctus odio nunc amet.</p>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="container-fluid contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-uppercase">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form name="sendMessage" role="form" method="POST" action="index.php" id="contactForm" class="error">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name" aria-invalid="false">
                                    <?php if(isset($_POST["submit"])){echo "<p class='help-block text-danger'>$errName</p>";}?>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <input type="text" class="form-control" placeholder="E-mail" id="email"  data-validation-required-message="Please enter your email address" aria-invalid="false">
                                    <?php if(isset($_POST["submit"])){echo "<p class='help-block text-danger'>$errEmail</p>";}?>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message"  data-validation-required-message="Please enter a message." aria-invalid="false"></textarea>
                                    <?php if(isset($_POST["submit"])){echo "<p class='help-block text-danger'>$errMessage</p>";}?>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-3 floating-label-form-group controls">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="2 + 3 = ?" required data-validation-required-message="Please enter an answer.">
                                    <?php if(isset($_POST["submit"])){echo "<p class='help-block text-danger'>$errHuman</p>";}?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <?php if(isset($_POST["submit"])){echo $result;}?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center text-uppercase">
                    <ul class="legals-nav list-inline">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <hr class="line">
                    <ul class="legals-social list-inline">
                        <li><a class="fa fa-facebook-square fa-3x" href="https://facebook.com/uko.melis" target="_blank"></a></li>
                        <li><a class="fa fa-twitter fa-3x" href="https://twitter.com/ukojou" target="_blank"></a></li>
                        <li><a class="fa fa-instagram fa-3x" href="https://instagram.com/ukoooq" target="_blank"></a></li>
                    </ul>
                    <p class="copyrights">© 2017 · Uko Melis · All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </body>
</html>