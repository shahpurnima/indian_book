<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>My Space</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="lib/css/bootstrap.css" rel="stylesheet">
<link href="my_css/mycss_myspace.css" rel="stylesheet" type="text/css">
<link href="my_css/titlebar.css" rel="stylesheet" type="text/css">
<link href="my_css/categorylist.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src=lib/js/html5shiv.js></script>
    <script src="lib/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php include("include/titlebar.php"); ?>


<div id="category_title">
  <div style="height: 48px; min-width: 440px">
  <div id="category_title_left">
    <div>Categories</div>
  </div>
  <div style="float:left">
    <div style="height:15px"></div>
    <span class="category_title_navi" style="margin-left:15px">
     <a href="index.php" class="category_title_link">Home</a> 
    </span> </div>
  <div style="float:left">
    <button id="myspace_orders_btn"> Orders </button>
    <button id="myspace_setting_btn"> Setting </button>
  </div>
  <button id="shopping_cart_btn" onclick="goto_cart()"> Cart </button>
  </div>
  <?php include("include/categorylist.php"); ?>
  <!--
        <div id="category_title_right">
        	
        </div>--> 
</div>
<div id="main_page">
  <div id="main_page_right">
    <div id="myspace_orders" >
      <div style="height:40px; width:200px"></div>
      <div id="myspace_mybooks">
        <div id="myspace_bought_books" class="myspace_session_title">Books You Bought</div>
        <div style="margin-top:20px">
          <div class="bought_book_item">
            <div style="height:15px;"></div>
            <span class="myspace_book_img"><img width="50px" height="70px" src="images/Diary of a Wimpy Kid.jpg"></span>
            <label class="myspace_book_name"> <a class="myspace_book_name_link" href="#"> Diary of a Wimpy Kid <span class="bought_book_name_end"></span> </a> </label>
            <span class="myspace_book_state">Processing</span>          
            <span class="myspace_book_date">11/5, 2013</span>
            <span class="myspace_book_price">$8.00</span>
            <span class="myspace_book_num">2</span> 
          </div>
          <div class="bought_book_item">
            <div style="height:15px;"></div>
            <span class="myspace_book_img"><img width="50px" height="70px" src="images/Diary of a Wimpy Kid.jpg"></span>
            <label class="myspace_book_name"> <a class="myspace_book_name_link" href="#"> Diary <span class="bought_book_name_end"></span> </a> </label>
            <span class="myspace_book_state">Processing</span>          
            <span class="myspace_book_date">11/5, 2013</span>
            <span class="myspace_book_price">$8.00</span>
            <span class="myspace_book_num">2</span> 
          </div>
        </div>
      </div>
      <div style="height:300px; margin-top:50px">
        <div id="myspace_more_books" class="myspace_session_title">Your Might Also Like</div>
        <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
          <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
            <a class="author_name_link" href="#">Orson Scott Card</a> </div>
        </div>
        <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
          <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
            <a class="author_name_link" href="#">Orson Scott Card</a> </div>
        </div>
      </div>
    </div>
    <div id="myspace_setting" >
      <div style="height:40px; width:200px"></div>
      <div class="myspace_session_title">Your Basic Info</div>
      <div id="myspace_basic_info">
        <label class="myspace_label">Current Account Picture: </label>
        <span style="display: inline-block; position: relative;"> <img id="myspace_img" style="width:100px" src="images/myspace_head.jpg"> <a id="edit_head_link" href="#">Edit</a> </span> <br>
        <label class="myspace_label">User Name: </label>
        <input class="myspace_input_text" type="text" value="Call Of Duty">
        <br>
        <label class="myspace_label">Login Mail: </label>
        <input class="myspace_input_text" type="text" value="ykdacd@qq.com">
        <br>
        <label class="myspace_label">Phone Number: </label>
        <input class="myspace_input_text" type="text" value="18591974748">
        <br>
      </div>
      <br>
      <br>
      <div class="myspace_session_title">Manage Your Address</div>
      <div id="myspace_address">
        <label class="myspace_label">District: </label>
        <input class="myspace_input_text" type="text" value="Redwood City, California, US">
        <br>
        <label class="myspace_label">Address: </label>
        <input class="myspace_input_text" type="text" value="209 Redwood Shores Pkwy">
        <br>
        <label class="myspace_label">Zipcode: </label>
        <input class="myspace_input_text" type="text" value="90043">
        <br>
      </div>
      <br>
      <br>
      <div class="myspace_session_title">Secure Service</div>
      <br>
      <div id="myspace_secure"> <a class="myspace_secure_link" href="#">Edit your passward</a><br>
        <label class="myspace_secure_label">Strong password makes your account more secure. We recommend that you change your password regularly and contains a set of numbers and letters, and the length of more than six or more passwords</label>
        <br>
        <a class="myspace_secure_link" href="#">Bind your phone number</a><br>
        <label class="myspace_secure_label">Bind your phone, you can enjoy the rich Scatter phone services, such as phone login, phone retrieving your password, opening mobile dynamic password, etc.</label>
        <br>
        <a class="myspace_secure_link" href="#">Security question</a><br>
        <label class="myspace_secure_label">One way to find your passward. We recommend that you set up an question which is easy to remember but most diffcult by others answering to more effectively protect your passwords secure.</label>
        <br>
      </div>
    </div>
    <div id="footer">
      <div style="height:50px">
        <hr style="width:600px; margin-left:50px">
      </div>
      <div id="footer_link"> <span style="font-size:12px; color:#555;">©2013 Scatter Inc.</span> <a class="footer_linker_item" href="#">Site Terms of Service</a> <a class="footer_linker_item" href="#">Privacy Policy</a> <a class="footer_linker_item" href="#">Developers</a> <a class="footer_linker_item" href="#">About Us</a> </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="lib/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="lib/js/stickUp.min.js"></script>
<script type="text/javascript" type="text/javascript">
    jQuery(function($) {
        $(document).ready( function() {
            $('#category_title').stickUp();
        });
    });
</script>
<script type="text/javascript" src="lib/js/bootstrap.js"></script>
<script type="text/javascript" src="my_js/my_js.js"></script>
</body>
</html>
