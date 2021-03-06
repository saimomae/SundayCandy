<?php
session_start();
require_once('connect.php');
//Get User id
$username = $_SESSION['username'];

  $q= 'SELECT username,user_id FROM user WHERE username = "'.$username.'"';
if($result=$mysqli->query($q)){
while($row=$result->fetch_array()){
  $user_id=$row['user_id'];
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

<body class="bg-black muli">
  <nav class="w-100pc flex flex-column md-flex-row md-px-10 py-5 bg-black">
      <div class="flex justify-between">
          <a href="index.php" class="flex items-center p-2 mr-4 no-underline">
              <img class="max-h-l2 w-auto" src="images/logo.png" />
              <h1 style="color:white;">SundayCandy</h1>

          </a>
          <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
              class="flex items-center ml-auto md-hidden yellow-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
              <i data-feather="menu"></i>
          </a>
      </div>
      <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
          <a href="index.php#Libary" class="fs-s1 mx-3 py-3 yellow-light no-underline hover-underline">Libary</a>
          <a href="index.php#Store" class="fs-s1 mx-3 py-3 yellow-light no-underline hover-underline">Movies</a>
          <a href="index.php#Account" class="fs-s1 mx-3 py-3 yellow-light no-underline hover-underline">Account</a>
          <a href="http://localhost/SundayCandy/login%20&%20logout/logout.php" class="fs-s1 mx-3 py-3 yellow-light no-underline hover-underline">Sign-Out</a>
          <a href="#" class="button bg-yellow black fw-600 no-underline mx-5">Search</a>
      </div>
  </nav>


    <!-- History -->
    <!select Title,Purchase_ID,Price,Date>
    <?php
            $q="SELECT orderinfo.m_id,movie.m_id,title,price,date,user_id,order_id FROM orderinfo,movie
            WHERE movie.m_id=orderinfo.m_id AND user_id = $user_id;";
            $result = $mysqli->query($q);

            ?>

    <section class="p-10 md-p-l10">
        <div class="md-w-75pc">
            <h2 class="white fs-l3 fw-900 lh-1">History</h2>
            <p class="indigo-lightest fw-600 fs-m1 opacity-50 my-5">This will be the list of all purchase you made</p>
        </div>
        <br>
        <?php while($row=$result->fetch_array()){ ?>
        <div class="white fw-600 fs-m1 opacity-100 my-5">
        <p2 class="white fw-800 fs-13 mb-5 my-5"><?php echo $row['title'];?></p2>
          <br/><span class="white yellow opacity-70 fs-m2 lh-1">Purchase ID:</span> <?php echo $row['order_id'];?>
          <br/><span class="white yellow opacity-70 fs-m2 lh-1">Status:</span> Buy
          <br/><span class="white yellow opacity-70 fs-m2 lh-1">Price:</span> <?php echo $row['price'];?>
          <br/><span class="white yellow opacity-70 fs-m2 lh-1">Date:</span> <?php echo $row['date'];?>
          <br/><br/><hr style="width:50%;text-align:left;margin-left:0;">
        </div>
        <?php } ?>
</section>


    <!-- footer -->
    <footer class="p-5 md-p-l5 bg-indigo-lightest-10">
        <div class="flex flex-wrap">
            <div class="md-w-25pc mb-10">
                <img src="assets/images/logo.png" class="w-l5" alt="">
                <div class="white opacity-70 fs-s2 mt-4 md-pr-10">
                    <p>We're all bad in someone's story.</p>
                    <br>
                    <p>แชนี่อิสเรียลค่ะ.</p>
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
