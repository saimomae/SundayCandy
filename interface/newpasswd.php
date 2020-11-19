<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SundayCandy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
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
            <a href="#blog" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Sign-In</a>
            <a href="#" class="button bg-white black fw-600 no-underline mx-5">Search</a>
        </div>
    </nav>

    <!-- big text -->
    <section class="p-10 md-py-10">
        <div class="w-100pc md-w-70pc mx-auto py-10">
            <h2 class="white fs-l2 md-fs-xl1 fw-900 lh-2">
                Reset Password<span class="border-b bc-indigo bw-4"></span></h2>
        </div>
    </section>

    <?php
    session_start();
    $username = $_SESSION['username'];
    require_once('connect.php');
    if ($mysqli->connect_errno) {
        echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
    }
    // $q = "SELECT * FROM user where user_id=$user_id";
    $q= 'SELECT username,user_id FROM user WHERE username = "'.$username.'"';
    $result = $mysqli->query($q);
    echo "<form action='updatepass.php' method='post'>";

        ?>

    <!Edit part>
    <section class="p-10 md-p-l5">
            <div class="br-6 bg-indigo-lightest-10 p-5 md-p-l5 flex flex-wrap md-justify-between md-items-center">
                    <div class="w-100pc md-w-50pc md-items-center"> <!Username>
                        <div class="flex my-5 p-l1">
                            <input type="text" name="input_username"
                                class="input-lg flex-grow-1 bw-0 fw-200 bg-indigo-lightest-10 white ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0"
                                placeholder="Username">
                        </div>
                    </div>

                    <div class="w-100pc md-w-50pc md-items-center"> <!NEWPASS>
                        <div class="flex my-5 p-l1">
                            <input type="password" name="new_pass"
                                class="input-lg flex-grow-1 bw-0 fw-200 bg-indigo-lightest-10 white ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0"
                                placeholder="New Password">
                        </div>
                    </div>
                <button type="submit" value="submit" class="button-lg bg-indigo indigo-lightest fw-300 fs-s3 br-l-0">Submit</button>
        <?php
        $mysqli->close();
        ?>
            </div>
    </section>
