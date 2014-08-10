<!DOCTYPE html>
<html>
<head>
<title>Book Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="lib/css/bootstrap.css" rel="stylesheet">
<link href="my_css/mycss_main.css" rel="stylesheet" type="text/css">
<link href="my_css/titlebar.css" rel="stylesheet" type="text/css">
<link href="my_css/login.css" rel="stylesheet" type="text/css">
<link href="my_css/categorybar.css" rel="stylesheet" type="text/css">
<link href="my_css/categorylist.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src=lib/js/html5shiv.js></script>
    <script src="lib/js/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
var js_checkcode = "checkcode";
</script>
</head>

<body>
<?php include("include/titlebar.php"); ?>
<?php include("include/login.php"); ?>
 <?php include("include/categorybar.php"); ?>  

 <!-- <div id="main_page">
  <div id="main_page_right">
    <div id="content_books">
      <div class="single_book_session"> -->
           
     <!--   <div class="book_session_intro"> Recommended for You! </div>
        <div id="recommand_books">
          <div class="book_item"> <a href="Ender_s_Game.php"><img src="images/Ender's Game.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#"> Ender's Game <span class="book_name_end"></span> </a><br/>
              <a class="author_name_link" href="#">Orson Scott Card</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Ender's Game.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#"> Ender's Game <span class="book_name_end"></span> </a><br/>
              <a class="author_name_link" href="#">Orson Scott Card</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Ender's Game.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Orson Scott Card</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Ender's Game.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game <span class="book_name_end"></span> </a><br/>
              <a class="author_name_link" href="#">Orson Scott Card</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Ender's Game.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Orson Scott Card</a> </div>
          </div>
        </div>
      </div>-->
   <!--   <div class="single_book_session">
        <div class="book_session_intro"> New DCs! </div>
        <div id="dc_books">
          <div id="dc_books_content" style="margin-left:520px">
            <div class="book_item"> <a href="#"><img src="images/The Court of Owls.jpg"/></a>
              <div class="book_item_intro"> <a class="book_name_link" href="#">The Court of Owls <span class="book_name_end"></span></a><br/>
                <a class="author_name_link" href="#">Peter J. Tomasi</a> </div>
            </div>
            <div class="book_item"> <a href="#"><img src="images/The Court of Owls.jpg"/></a>
              <div class="book_item_intro"> <a class="book_name_link" href="#">The Court of Owls <span class="book_name_end"></span></a><br/>
                <a class="author_name_link" href="#">Peter J. Tomasi</a> </div>
            </div>
            <div class="book_item"> <a href="#"><img src="images/The Court of Owls.jpg"/></a>
              <div class="book_item_intro"> <a class="book_name_link" href="#">The Court of Owls <span class="book_name_end"></span></a><br/>
                <a class="author_name_link" href="#">Peter J. Tomasi</a> </div>
            </div>
          </div>
        </div>
      </div> -->
 <!--     <div class="single_book_session">
        <div class="book_session_intro"> New Fiction! </div>
        <div id="new_fiction_books">
          <div class="book_item"> <a href="#"><img src="images/Diary of a Wimpy Kid.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Diary of a Wimpy Kid<span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Jeff Kinney</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Diary of a Wimpy Kid.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Diary of a Wimpy Kid<span class="book_name_end"></span> </a><br/>
              <a class="author_name_link" href="#">Jeff Kinney</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Diary of a Wimpy Kid.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Diary of a Wimpy Kid<span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Jeff Kinney</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Diary of a Wimpy Kid.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Diary of a Wimpy Kid<span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Jeff Kinney</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Diary of a Wimpy Kid.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Diary of a Wimpy Kid<span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Jeff Kinney</a> </div>
          </div>
        </div>
      </div>
      <div class="single_book_session">
        <div class="book_session_intro"> Mysteries And Thrillers! </div>
        <div id="mysteries_thrillers">
          <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Darkness First <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">James Hayman</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Darkness First <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">James Hayman</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Darkness First <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">James Hayman</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Darkness First <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">James Hayman</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Darkness First <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">James Hayman</a> </div>
          </div>
        </div>
      </div>
      <div class="single_book_session">
        <div class="book_session_intro"> Get Cozy </div>
        <div id="cozy_books">
          <div class="book_item"> <a href="#"><img src="images/Crave.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Crave <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Monica Murphy</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Crave.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Crave <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Monica Murphy</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Crave.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Crave <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Monica Murphy</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Crave.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Crave <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Monica Murphy</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Crave.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Crave <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Monica Murphy</a> </div>
          </div>
        </div>
      </div>
      <div class="single_book_session">
        <div class="book_session_intro"> President Kennedy </div>
        <div id="kennedy_books">
          <div id="kenedy_books_content" style="margin-left:520px">
            <div class="book_item"> <a href="#"><img src="images/Dallas_November_22_1963.jpg"/></a>
              <div class="book_item_intro"> <a class="book_name_link" href="#"> Dallas, November <span class="book_name_end"></span> </a> <br/>
                <a class="author_name_link" href="#">Robert A. Caro</a> </div>
            </div>
            <div class="book_item"> <a href="#"><img src="images/Dallas_November_22_1963.jpg"/></a>
              <div class="book_item_intro"> <a class="book_name_link" href="#">Dallas, November <span class="book_name_end"></span></a><br/>
                <a class="author_name_link" href="#">Robert A. Caro</a> </div>
            </div>
            <div class="book_item"> <a href="#"><img src="images/Dallas_November_22_1963.jpg"/></a>
              <div class="book_item_intro"> <a class="book_name_link" href="#">Dallas, November <span class="book_name_end"></span></a><br/>
                <a class="author_name_link" href="#">Robert A. Caro</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single_book_session">
        <div class="book_session_intro"> Read for Free! </div>
        <div id="recommand_books">
          <div class="book_item"> <a href="#"><img src="images/Finding Cinderella.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Finding Cinderella <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Colleen Hoover</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Finding Cinderella.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Finding Cinderella <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Colleen Hoover</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Finding Cinderella.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Finding Cinderella <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Colleen Hoover</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Finding Cinderella.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Finding Cinderella <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Colleen Hoover</a> </div>
          </div>
          <div class="book_item"> <a href="#"><img src="images/Finding Cinderella.jpg"/></a>
            <div class="book_item_intro"> <a class="book_name_link" href="#">Finding Cinderella <span class="book_name_end"></span></a><br/>
              <a class="author_name_link" href="#">Colleen Hoover</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->   
    <div id="main_page_right">
    <div id="content_books">
      <div class="single_book_session">
          <div id="myCarousel" class="carousel slide">
   <!-- Carousel indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- Carousel items -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="images/background.jpg" alt="First slide" ALIGN=RIGHT>
      </div>
      <div class="item">
         <img src="images/background2.jpg" alt="Second slide" ALIGN=RIGHT>
      </div>
      <div class="item">
         <img src="images/background3.jpg" alt="Third slide" ALIGN=RIGHT>
      </div>
       
   </div>
   <!-- Carousel nav -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 
          
    </div>
   <!--     <div id="footer">
  <div style="height:50px">
    <hr style="width:600px; margin-left:75px">
  </div>
  <div id="footer_link"> <span style="font-size:12px; color:#555;">©2014 Scatter Inc.</span> <a class="footer_linker_item" href="#">Site Terms of Service</a> <a class="footer_linker_item" href="#">Privacy Policy</a> <a class="footer_linker_item" href="#">Developers</a> <a class="footer_linker_item" href="#">About Us</a> </div> -->
</div>
        </div>
        </div>
    
    <!-- new -->
<div id="footer">
  <div style="height:50px">
    <hr style="width:600px; margin-left:75px">
  </div>
  <div id="footer_link"> <span style="font-size:12px; color:#555;">©2014 Scatter Inc.</span> <a class="footer_linker_item" href="#">Site Terms of Service</a> <a class="footer_linker_item" href="#">Privacy Policy</a> <a class="footer_linker_item" href="#">Developers</a> <a class="footer_linker_item" href="#">About Us</a> </div>
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
