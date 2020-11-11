<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SundayCandy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body class="bg-black muli">
    <nav class="w-100pc flex flex-column md-flex-row md-px-10 py-5 bg-black">
        <div class="flex justify-between">
            <a href="index.html" class="flex items-center p-2 mr-4 no-underline">
                <img class="max-h-l2 w-auto" src="assets/images/logo.png" />
                <h1 style="color:white;">SundayCandy</h1>
            </a>
            <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
                class="flex items-center ml-auto md-hidden indigo-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
                <i data-feather="menu"></i>
            </a>
        </div>
        <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
            <a href="#home" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">For You</a>
            <a href="#Libary" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Libary</a>
            <a href="#Account" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Account</a>
            <a href="#blog" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Sign-Out</a>
            <a href="#" class="button bg-white black fw-600 no-underline mx-5">Search</a>
        </div>
    </nav>

<!-- Purchase -->

    <section class=" md-p-l5 flex flex-wrap justify-center items-center">
      <form action="payment.php" method="post">
        <div class="md-w-75pc">
            <h2 class="white fs-l3 fw-900 lh-3 border-b bc-indigo bw-4">Check Out</h2>
            <p class="indigo-lightest fw-600 fs-m1 opacity-50">Scan the QR to make a payment</p>
        </div>
        <div class="w-100pc md-w-33pc p-10">
            <a class="block no-underline p-5 br-8 ">
                <img class="w-80pc" src="assets/images/QR-code-example.jpg" alt="">
            </a>
        </div>
        <div class="white fw-600 fs-m1 opacity-100 my-5">
        <p2 class="white fw-800 fs-13 my-5">Tenet</p2>
          <br/><span class="white indigo-light opacity-70 fs-m2 lh-1">Status:</span> <?php
          // $status = "buy";
          require_once('connect.php');
          $status = $_GET['status']; ?>
          <br/><span class="white indigo-light opacity-70 fs-m2 lh-1">Price:</span> <?= require_once('connect.php'); $price ?>
          <br/><br/><hr style="width:50%;text-align:left;margin-left:0;">
        </div>
        <br>
        <div class="p-5">
            <a href="index.html"><button class="button full bg-indigo white hover-opacity-100 hover-scale-up-1 ease-300">Confirm</button></a>
        </div>

</section>

    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>