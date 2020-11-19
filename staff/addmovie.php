<?php require_once('connect.php');  ?>
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
            <a href="index_staff.html" class="flex items-center p-2 mr-4 no-underline">
                <img class="max-h-l2 w-auto" src="../assets/images/logo.png" />
                <h1 style="color:white(238, 220, 220);">SundayCandy</h1>
            </a>
            <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
                class="flex items-center ml-auto md-hidden indigo-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
                <i data-feather="menu"></i>
            </a>
        </div>
        <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
            <a href="addmovie.php" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">add</a>
            <a href="editmovie.php" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">delete</a>
            <a href="contact.php" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">contact</a>
        </div>
    </nav>

    <!-- big text -->
    <section class="p-10 md-py-10">
        <div class="w-100pc md-w-70pc mx-auto py-10">
            <h2 class="white fs-l2 md-fs-xl1 fw-900 lh-2">
                Add movie</h2>
        </div>
    </section>

    <!-- subscribe -->
    <section class="p-10 md-p-l5">
      <form action="editmovie.php" method="post">
        <div class="br-6 bg-indigo-lightest-10 p-5 md-p-l5 flex flex-wrap md-justify-between md-items-center">
            <div class="w-100pc md-w-50pc" > <!genreID>
              <div class="white fw-600 fs-m1">Genre</div>
                <div class="flex my-5 p-l1">
                    <select name="g_id" class="input-lg flex-grow-1 bw-0 fw-200 bg-white black ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0">
                      <?php
                      					// select the TITLE_ID and TITLE_NAME
                      						$q='SELECT g_id, g_name from genres;';
                      						if($result=$mysqli->query($q)){
                      							while($row=$result->fetch_array()){
                      								echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                      							}
                      						}else{
                      							echo 'Query error: '.$mysqli->error;
                      						}
                      	?>
                    </select>
                </div>
            </div>
            <div class="w-100pc md-w-50pc p-l1"> <!movieName>
              <div class="white fw-600 fs-m1">Movie Name</div>
                <div class="flex my-5">
                    <input type="text" name ="title"
                        class="input-lg flex-grow-1 bw-0 fw-200 bg-white black ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0 ph-slategray focus-ph-gray"
                        placeholder="movieName">
                </div>
            </div>
            <div class="w-100pc md-w-50pc p-l1"> <!time>
              <div class="white fw-600 fs-m1">Time(days)</div>
                <div class="flex my-5">
                    <input type="text" name ="time"
                        class="input-lg flex-grow-1 bw-0 fw-200 bg-white black ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0 ph-slategray focus-ph-gray"
                        placeholder="Time(days)">
                </div>
            </div>
            <div class="w-100pc md-w-50pc p-l1"> <!buy>
              <div class="white fw-600 fs-m1">Price for buy</div>
                <div class="flex my-5">
                    <input type="text" name="price_buy"
                        class="input-lg flex-grow-1 bw-0 fw-200 bg-white black ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0 ph-slategray focus-ph-gray"
                        placeholder="price for buy">
                </div>
            </div>
            <div class="w-100pc md-w-50pc p-l1"> <!rent>
              <div class="white fw-600 fs-m1">Price for rent</div>
                <div class="flex my-5">
                    <input type="text" name ="price_rent"
                        class="input-lg flex-grow-1 bw-0 fw-200 bg-white black ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0 ph-slategray focus-ph-gray"
                        placeholder="price for rent">
                </div>
            </div>
            <div class="w-100pc md-w-50pc p-l1"> <!Movie discription>
              <div class="white fw-600 fs-m1">Movie discription</div>
                <div class="flex my-5">
                    <input type="text" name ="price_rent"
                        class="input-lg flex-grow-1 bw-0 fw-200 bg-white black ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0 ph-slategray focus-ph-gray"
                        placeholder="Movie discription">
                </div>
            </div>
            <div class="w-100pc md-w-50pc p-l1"> <!Poster>
              <div class="white fw-600 fs-m1">Poster path</div>
                <div class="flex my-5">
                    <input type="text" name ="price_rent"
                        class="input-lg flex-grow-1 bw-0 fw-200 bg-white black ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0 ph-slategray focus-ph-gray"
                        placeholder="Poster path">
                </div>
            </div>
            <button input type="submit" name="sub" class="button-lg bg-indigo indigo-lightest fw-300 fs-s3 br-l-0">Add</button>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
