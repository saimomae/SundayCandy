<!DOCTYPE html>
<html lang="en">
<?php 	require_once('connect.php'); ?>



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
            <a href="#" class="flex items-center p-2 mr-4 no-underline">
                <img class="max-h-l2 w-auto" src="assets/images/logo.png" />
                <h1 style="color:white;">SundayCandy</h1>

            </a>
            <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
                class="flex items-center ml-auto md-hidden indigo-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
                <i data-feather="menu"></i>
            </a>
        </div>
        <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
            <a href="#home" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Libary</a>
            <a href="#Libary" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Movies</a>
            <a href="#Account" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Account</a>
            <a href="http://localhost/SundayCandy/login%20&%20logout/logout.php" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Sign-Out</a>
            <a href="#" class="button bg-white black fw-600 no-underline mx-5">Search</a>
        </div>
    </nav>

    <!-- Libary -->
    <!select movies>
    <?php
            $q="SELECT m_id, title FROM movie";
            $result = $mysqli->query($q);
            while($row=$result->fetch_array()){
              $title=$row['title'];
              $m_id=$row['m_id'];
            }?>

    <section id="Libary" class="p-0 md-p-5">
          <div class="flex flex-wrap">
            <h1 class="white fs-l3 lh-2 md-fs-xl1 md-lh-1 fw-900 ">All <span class="border-b bc-yellow-light bw-4"> Movies</span></h1><hr style="width:50%;text-align:left;margin-left:0;visibility: hidden">
            <?php for ($x = 0; $x <= 8; $x++)  {?> <!loop doop>
            <div class="w-100pc md-w-33pc p-10">
                <a href="Product.php" class="block no-underline p-5 br-8 hover-bg-indigo-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="images/tenet.reg.ar_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        <?php echo $title;?>
                    </p>
                    <div class="yellow-light fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
            <?php } ?>
    </section>


    <!-- features/store -->
    <section id="Store" class="p-0 md-p-5">
        <div class="flex flex-wrap">
          <h1 class="white fs-l3 lh-2 md-fs-xl1 md-lh-1 fw-900 ">Top Chart</h1><hr style="width:50%;text-align:left;margin-left:0;visibility: hidden">
          <div class="w-100pc md-w-33pc p-10">
              <a href="#" class="block no-underline p-5 br-8 hover-bg-indigo-lightest-10 hover-scale-up-1 ease-300">
                  <img class="w-100pc" src="assets/images/Dunkirk.jpg" alt="">
                  <p class="fw-600 white fs-m3 mt-3">
                      Dunkirk
                  </p>
                  <div class="yellow fs-s3 italic after-arrow-right my-4">See More</div>
              </a>
          </div>
          <div class="w-100pc md-w-33pc p-10">
              <a href="#" class="block no-underline p-5 br-8 hover-bg-indigo-lightest-10 hover-scale-up-1 ease-300">
                  <img class="w-100pc" src="assets/images/GreenBook.jpg" alt="">
                  <p class="fw-600 white fs-m3 mt-3">
                      Green Book
                  </p>
                  <div class="indigo fs-s3 italic after-arrow-right my-4">See More</div>
              </a>
          </div>
            <div class="w-100pc md-w-33pc p-10">
                <a href="Product.html" class="block no-underline p-5 br-8 hover-bg-indigo-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="assets/images/tenet.reg.ar_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        TENET
                    </p>
                    <div class="indigo fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
            <div class="w-100pc md-w-33pc p-10">
                <a href="#" class="block no-underline p-5 br-8 hover-bg-indigo-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="assets/images/Spotlight_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        Spotlight
                    </p>
                    <div class="indigo fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
            <div class="w-100pc md-w-33pc p-10">
                <a href="#" class="block no-underline p-5 br-8 hover-bg-indigo-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="assets/images/Lalaland_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        La La Land
                    </p>
                    <div class="indigo fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>
            <div class="w-100pc md-w-33pc p-10">
                <a href="#" class="block no-underline p-5 br-8 hover-bg-indigo-lightest-10 hover-scale-up-1 ease-300">
                    <img class="w-100pc" src="assets/images/1917.125785.ar_480x.progressive.jpg" alt="">
                    <p class="fw-600 white fs-m3 mt-3">
                        1917
                    </p>
                    <div class="indigo fs-s3 italic after-arrow-right my-4">See More</div>
                </a>
            </div>

        </div>
    </section>

    <!-- slider -->
    <section class="relative bg-indigo-lightest-10">
        <div id="slider-1">
            <div class="p-10 md-p-l10 flex justify-center items-center flex-column text-center">
                <h2 class="white fs-l3 fw-900">I don't know</h2>
                <p class="indigo-lightest fw-600 fs-m1 opacity-30 my-5">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor </p>
                <a href="#" class="button-md bg-indigo white fs-s3 br-4 black fw-600 no-underline m-5">BUY NOW</a>
            </div>
            <div class="p-10 md-p-l10 flex justify-center items-center flex-column text-center">
                <h2 class="white fs-l3 fw-900">What to put here</h2>
                <p class="indigo-lightest fw-600 fs-m1 opacity-30 my-5">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor </p>
                <a href="#" class="button-md bg-indigo white fs-s3 br-4 black fw-600 no-underline m-5">BUY NOW</a>
            </div>
            <div class="p-10 md-p-l10 flex justify-center items-center flex-column text-center">
                <h2 class="white fs-l3 fw-900">But it will fill up eventually. </h2>
                <p class="indigo-lightest fw-600 fs-m1 opacity-30 my-5">-RW </p>
                <a href="#" class="button-md bg-indigo white fs-s3 br-4 black fw-600 no-underline m-5">BUY NOW</a>
            </div>
        </div>
        <ul class="absolute list-none w-100pc flex justify-between top-50pc">
            <li><button
                    class="prev ml-10 br-round border-indigo-lightest indigo-lightest  bg-transparent flex justify-center items-center p-2 focus-indigo-lighter outline-none"><i
                        data-feather="chevron-left"></i></button></li>
            <li><button
                    class="next mr-10 br-round border-indigo-lightest indigo-lightest  bg-transparent flex justify-center items-center p-2  focus-indigo-lighter outline-none"><i
                        data-feather="chevron-right"></i></button></li>
        </ul>
    </section>

    <!-- Account -->
    <section id="Account" class="p-10 md-py-10">
        <div class="w-100pc md-w-70pc mx-auto py-10">
            <h2 class="white fs-l2 md-fs-xl1 fw-900 lh-2">
                Good after noon, <span class="border-b bc-indigo bw-4"> Ravipa</span></h2> <!User FName>
        </div>
    </section>

    <!-- product options/sub auccount -->
    <section class="py-l10">
        <div class="flex flex-column md-flex-row md-w-80pc mx-auto">
            <div class="w-100pc md-w-50pc">
                <div class="br-8 p-5 m-5 bg-indigo-lightest-10 pointer hover-scale-up-1 ease-300">
                    <div class="inline-block bg-indigo indigo-lightest br-3 px-4 py-1 mb-10 fs-s4 uppercase">
                        History</div>
                    <div class="indigo-lightest fw-600 fs-m1"><span class="opacity-30"> See all your purchase history here</span> </div>
                    <a href="History.html" class="mt-10 button bg-black fs-s3 white no-underline">History</a>
                </div>
            </div>
            <div class="w-100pc md-w-50pc">
                <div class="br-8 p-5 m-5 bg-indigo-lightest-10  pointer hover-scale-up-1 ease-300">
                    <div class="inline-block bg-indigo indigo-lightest br-3 px-4 py-1 mb-10 fs-s4 uppercase">
                        Change Password</div>
                    <div class="indigo-lightest fw-600 fs-m1"><span class="opacity-30"> Reset your password here</span> </div>
                    <a href="#" class="mt-10 button bg-black fs-s3 white no-underline">Change Password</a>

                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="p-5 md-p-l5 bg-indigo-lightest-10">
        <div class="flex flex-wrap">
            <div class="md-w-25pc mb-10">
                <img src="assets/images/logo.png" class="w-l5" alt="">
                <div class="white opacity-70 fs-s2 mt-4 md-pr-10">
                    <p>We're all bad in someone's story.</p>
                    <br>
                    <p>Love is killing you daring.</p>
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
                        class="input flex-grow-1 bw-0 fw-200 bg-indigo-lightest-10 white ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0"
                        placeholder="Email Address">
                    <button class="button bg-indigo indigo-lightest fw-300 fs-s3 br-l-0">Start</button>
                </div>
                <div class="flex justify-around my-8">
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
                            data-feather="twitter" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
                            data-feather="facebook" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
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
