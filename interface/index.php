<?php
session_start();
require_once('connect.php');
//Get user firstname
$username = $_SESSION['username'];

  $q= 'SELECT username,FName FROM user WHERE username = "'.$username.'"';
if($result=$mysqli->query($q)){
while($row=$result->fetch_array()){
  $UserFirstname=$row['FName'];
  }
}
else{
echo 'Query error: '.$mysqli->error;
}
?>

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

<body class="pink-orange muli">
    <nav class="w-100pc flex flex-column md-flex-row md-px-10 py-5 pink-orange shadow-2"> <!navbar>
        <div class="flex justify-between">
            <a href="#" class="flex items-center p-2 mr-4 no-underline">
                <img class="max-h-l2 w-auto" src="images/logo.png" />
                <h1 style="color:white;">SundayCandy</h1>

            </a>
            <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
                class="flex items-center ml-auto md-hidden yellow-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
                <i data-feather="menu"></i>
            </a>
        </div>
        <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
            <a href="#Libary" class="fs-s1 mx-3 py-3 yellow-light no-underline hover-underline">Libary</a>
            <a href="#Store" class="fs-s1 mx-3 py-3 yellow-light no-underline hover-underline">Movies</a>
            <a href="#Account" class="fs-s1 mx-3 py-3 yellow-light no-underline hover-underline">Account</a>
            <a href="http://localhost/SundayCandy/login%20&%20logout/logout.php" class="fs-s1 mx-3 py-3 yellow-light no-underline hover-underline">Sign-Out</a>
            <a href="#" class="button bg-yellow black fw-600 no-underline mx-5">Search</a>
        </div>
    </nav>

    <!-- Home/For You -->
    <div class="w-100pc md-w-50pc mx-auto py-5 ">
        <h2 class="white fs-l2 md-fs-xl1 lh-2 flex flex-wrap">
          Good Afternoon, <span class="border-b bc-yellow-light bw-4 fw-900"> <?php echo $UserFirstname ?> </span></h2> <!User FName>
    </div>
    <!-- <section id="home" class="min-h-100vh flex justify-center items-center">
        <div class="mx-5 md-mx-l3">
            <div class="inline-block br-round bg-yellow-30 yellow-lightest p-2 fs-s2 mb-5">
                <div class="inline-block bg-yellow yellow-lightest br-round px-3 py-1 mr-3 fs-s3">There are 5</div> <!Count num of movie>
                movies you didn't catch up yet...
            </div>
        </div>
    </section> --> -->

    <!-- Libary -->
    <section id="Libary" class="p-0 md-p-5">
          <div class="flex flex-wrap">
            <h1 class="white fs-l3 lh-2 md-fs-xl1 md-lh-1 fw-700 ">Your Collection</h1><hr style="width:50%;text-align:left;margin-left:0;visibility: hidden">
            <div class="w-100pc md-w-33pc p-10">
                <a href="Product.php" class="block no-underline p-5 br-8 hover-bg-yellow-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="images/tenet.reg.ar_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        TENET
                    </p>
                    <div class="yellow-light fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
              <div class="w-100pc md-w-33pc p-10">
                  <a href="#" class="block no-underline p-5 br-8 hover-bg-yellow-lightest-10 hover-scale-up-1 ease-300">
                      <img class="w-100pc" src="images/Lalaland_480x.progressive.jpg" alt="">
                      <p class="fw-600 white fs-m3 mt-3">
                        La La Land
                    </p>
                    <div class="yellow fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
            <div class="w-100pc md-w-33pc p-10">
                <a href="#" class="block no-underline p-5 br-8 hover-bg-yellow-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="images/1917.125785.ar_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        1917
                    </p>
                    <div class="yellow fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
            <div class="w-100pc md-w-33pc p-10">
                <a href="#" class="block no-underline p-5 br-8 hover-bg-yellow-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="images/Inception_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        Inception
                    </p>
                    <div class="yellow fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
            <div class="w-100pc md-w-33pc p-10">
                <a href="#" class="block no-underline p-5 br-8 hover-bg-yellow-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="images/PitchPerfect2_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        Pitch Perfect 2
                    </p>
                    <div class="yellow fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
            <div class="w-100pc md-w-33pc p-10">
                <a href="#" class="block no-underline p-5 br-8 hover-bg-yellow-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="images/Spotlight_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        Spotlight
                    </p>
                    <div class="yellow fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
        </div>
    </section>

    <!-- store -->
    <!select movies,m_id,poster>
    <?php
            $q="SELECT m_id,title,poster  FROM movie";
            $result = $mysqli->query($q);
              //$m_id=$row['m_id'];
              //$postersrc=$row['poster'];
            ?>

    <section id="Store" class="p-0 md-p-5">
        <div class="flex flex-wrap">
          <h1 class="white fs-l3 lh-2 md-fs-xl1 md-lh-1 fw-900 ">All Movies</h1><hr style="width:50%;text-align:left;margin-left:0;visibility: hidden">
          <?php while($row=$result->fetch_array()){
            //$_SESSION['m_id']   = $m_id;?> <!loop doop>
          <div class="w-100pc md-w-33pc p-10">
              <a href="Product.php" class="block no-underline p-5 br-8 hover-bg-yellow-lightest-10 hover-scale-up-1 ease-300">
                  <?php echo "<img class='w-100pc' src= ".$row['poster']."  alt=''>";?> <!echo html with variable>
                  <p class="fw-600 white fs-m3 mt-3">
                      <?php echo $row['title'] ?>
                  </p>
                  <div class="yellow fs-s3 italic after-arrow-right my-4">See More</div>
              </a>
          </div>
          <?php } ?>
    </section>


    <!-- Account -->
    <section id="Account" class="p-10 md-py-10">
    </section>

    <!-- product options/sub auccount -->
    <section class="py-l10">
        <div class="flex flex-column md-flex-row md-w-80pc mx-auto">
            <div class="w-100pc md-w-50pc">
                <div class="br-8 p-5 m-5 bg-yellow-lightest-10 pointer hover-scale-up-1 ease-300">
                    <div class="inline-block bg-black yellow-lightest br-3 px-4 py-1 mb-10 fs-s4 uppercase">
                        History</div>
                    <div class="yellow-lightest fw-600 fs-m1"><span class="opacity-70"> See all your purchase history here</span> </div>
                    <a href="History.php" class="mt-10 button bg-yellow fs-s1 black no-underline">History</a> <!See History Button>
                </div>
            </div>
            <div class="w-100pc md-w-50pc">
                <div class="br-8 p-5 m-5 bg-yellow-lightest-10  pointer hover-scale-up-1 ease-300">
                    <div class="inline-block bg-black yellow-lightest br-3 px-4 py-1 mb-10 fs-s4 uppercase">
                        Change Password</div>
                    <div class="yellow-lightest fw-600 fs-m1"><span class="opacity-70"> Reset your password here</span> </div>
                    <a href="#" class="mt-10 button bg-yellow fs-s1 black no-underline">Change Password</a> <!Change Password Button>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="p-5 md-p-l5 bg-yellow-lightest-10">
        <div class="flex flex-wrap">
            <div class="md-w-25pc mb-10">
                <img src="assets/images/logo.png" class="w-l5" alt="">
                <div class="white opacity-70 fs-s2 mt-4 md-pr-10">
                    <p>We're all bad in someone's story.</p>
                    <br>
                    <p>i smkoe when i think too much about you then i think too much about you when i smoke</p>
                </div>
            </div>
            <div class="w-100pc md-w-50pc">
                <div class="flex justify-around">
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Company</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">About
                                    Us</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Jobs</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">Contact</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Media</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Product</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">About
                                    Us</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Jobs</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">Contact</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Media</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Support</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">About
                                    Us</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Jobs</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">Contact</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Media</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-100pc md-w-25pc">
                <div class="flex w-75pc md-w-100pc mx-auto">
                    <input type="text"
                        class="input flex-grow-1 bw-0 fw-200 bg-yellow-lightest-10 white ph-yellow-lightest focus-white opacity-80 fs-s3 py-5 br-r-0"
                        placeholder="Email Address">
                    <button class="button bg-yellow yellow-lightest fw-300 fs-s3 br-l-0">Start</button>
                </div>
                <div class="flex justify-around my-8">
                    <a href="#" class="relative p-5 bg-yellow br-round white hover-scale-up-1 ease-400"><i
                            data-feather="twitter" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-yellow br-round white hover-scale-up-1 ease-400"><i
                            data-feather="facebook" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-yellow br-round white hover-scale-up-1 ease-400"><i
                            data-feather="instagram" class="absolute-center h-4"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
