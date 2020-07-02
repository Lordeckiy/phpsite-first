<!doctype html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel with us</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/travel.css">
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container">
    <div class="name-travel">
        <h5 class="text-center text-uppercase mt-5">Travel with our company</h5>
        <p class="text-center p-travel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Distinctio excepturi fuga, itaque nesciunt officia repellendus.</p>
    </div>
    <div class="row">
    <div class="col-6">
            <div class="block-image">
                <img src="img/travel/travel1.png" alt="img">
            </div>
        <div class="block-content">
                <h6 class="text-left text-uppercase font-weight-bold mt-3">Comfortable premium class accommodations</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi enim eos fugiat magni maxime mollitia porro quas quod sed.</p>
                <a type="button" class="btn-travel text-uppercase" href="#">View photos</a>
        </div>
    </div>
        <div class="col-6">
            <div class="block-image">
                <img src="img/travel/travel2.png" alt="img">
                <div class="block-content">
                <h6 class="text-left text-uppercase font-weight-bold mt-3">Weekly group entertainment and excursions</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi enim eos fugiat magni maxime mollitia porro quas quod sed.</p>
                <a type="button" class="btn-travel text-uppercase" href="#">View photos</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="next-tour-image mt-5">
                <img src="img/travel/tournext.png" alt="img">
            </div>
        </div>
        <div class="col-6">
            <p class="next-tour-p">Next tour</p>
            <h5 class="h5-name text-uppercase text-left font-weight-bold">Unforgettable adventure<br>in filipinas</h5>
            <p class="next-tour-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ab accusantium aliquam animi assumenda commodi deleniti doloremque error ex facere fugit iste iusto labore laudantium maxime molestias natus nesciunt nisi numquam odio quae reiciendis unde vitae voluptate voluptates. Ad aliquid blanditiis consequuntur explicabo harum illum in quas rerum voluptas voluptatibus.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci alias asperiores aspernatur corporis debitis deserunt distinctio eaque earum enim ex, excepturi facilis hic in ipsum laudantium magnam magni minima neque odit officia provident quasi quidem quod reiciendis repellendus reprehenderit, similique sint sit temporibus tenetur unde voluptatum! Quam, suscipit!<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur ipsum iste minima numquam, sit voluptates! Ab aperiam ex laudantium nostrum perspiciatis similique temporibus! Distinctio dolor eaque ipsum nemo tempora!</p>
        </div>
    </div>
</div>
<div class="form mt-2">
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 left-text text-center">
            <h4 class="text-uppercase font-weight-bold mt-5">Book a discounter tour</h4>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-xs-12 col-sm-6 right-forms">
            <form action="form-travel.php" method="post">
                <input type="text" name='name' placeholder="Name" class="form-control name-input mt-5">
                <input type="email" name='mail' placeholder="Email" class="form-control mail-input mt-5">
                <button type="submit" name='send' class="btn-form text-uppercase" href="form-travel.php">Send</button>
            </form>
        </div>
    </div>
    </div>
</div>
<br><br>
<footer>
    <div class="footer-div">
        <ul class="footers text-center">
            <li class="footer-list"><a href="index.php" type="submit" class="foot-list">Home</a></li>
            <li class="footer-list"><a href="about.php" type="button" class="foot-list">About</a></li>
            <li class="footer-list"><a href="gallery.php" type="button" class="foot-list">Gallery</a></li>
            <li class="footer-list"><a href="travel.php" type="button" class="foot-list">Travel</a></li>
        </ul>
        <p class="footer-text text-center text-uppercase">Business travel</p>
        <p class="footer-text text-center text-uppercase mt-2" style="margin: 0"> Travel 2019 | all rights reserved</p>
    </div>
</footer>
</body>
</html>