<?php 	require_once('connect.php'); ?>
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
                User Contact</h2>
        </div>
    </section>

    <!-- Contact List -->

    <section class="p-10 flex flex-wrap justify-center item-center">
      <div class="br-6 bg-indigo-lightest-10 p-5 md-p-l5 flex flex-wrap white md-justify-between md-items-center">
      <table border='2'> 
        <div class="w-100pc md-w-100pc lg-w-100pc">
        <div class="flex-equal fs-m1 fw-1000">
        <tr>
                    <th>Username</th> 
                    <th>Password</th> 
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Del</th>
          </tr>
      <?php
				 	$q="SELECT * FROM user";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
           <div class="flex-equal fs-m1 fw-1000">
                <br>
                    <col width="10%"> 
                    <col width="45%">
                    <col width="50%">
                    <col width="50%">
                    <col width="50%">
                    <col width="10%">
                    <col width="10%">

                        <td><?=$row['username']?></td>
                        <td><?=$row['password']?></td>
                        <td><?=$row['FName']?></td>
                        <td><?=$row['LName']?></td>
                        <td><?=$row['Email']?></td>
                        <td><?=$row['Phone']?></td>
                        <td><a href ='delcontact.php?id=<?=$row['u_id']?>'><img src="delete-24.png" width="24" height="24"></a></td>
                 </br>       
                <?php } ?>
                </div>

        <?php
  			// count the no. of entries
  			$count=$result ->num_rows;
  					echo "<tr><td colspan = 6 align = right> Total $count
  						records</td></tr>";
  					$result ->free();
              ?>
            </table> 
      </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/script.js"></script>
   
</body>

</html>
