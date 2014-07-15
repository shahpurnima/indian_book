<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Single Book</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="lib/css/bootstrap.css" rel="stylesheet">
<link href="my_css/single_book.css" rel="stylesheet" type="text/css">
<link href="my_css/titlebar.css" rel="stylesheet" type="text/css">
<link href="my_css/login.css" rel="stylesheet" type="text/css">
<link href="my_css/categorybar.css" rel="stylesheet" type="text/css">
<link href="my_css/categorylist.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src=lib/js/html5shiv.js></script>
    <script src="lib/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php include("include/titlebar.php"); ?>
<?php include("include/login.php"); ?>
<?php include("include/categorybar.php"); ?>
   
<div id="main_page">
  <div id="main_page_right">
    <div id="single_book_title">
      <div id="single_book_cover"> <img src="images/Ender's Game Big.jpg"/> </div>
      <div id="single_book_info">
        <div id="single_book_name">Ender's Game</div>
        <div> <a id="single_book_author_link" style="color:#8d8d8d" href="#"> <span id="single_book_author_name"><b>Orson Scott Card</b></span> </a> <span id="single_book_publish_date"> - April 1, 2010</span> <br/>
          <span id="single_book_pubisher">Macmillan</span> <span id="single_book_pubisher"> - Publisher</span> </div>
        <div id="buy_session">
          <div style="float:left">
            <button id="buy_button" type="button">$4.00</button>
          </div>
          <div style="float:left; margin-left:10px">
            <button id="add_wishlist_button" type="button">Add to Wishlist</button>
          </div>
        </div>
      </div>
    </div>
    <div id="desc_session">
      <div class="my_navi_button_container_left" id="prev_for_desc">
        <button type="button" class="my_navi_button"> <img src="images/navi_button_prev.png"/> </button>
      </div>
      <div style="float:left">
        <div class="session_title">Description</div>
        <div id="single_book_desc">
          <div id="single_book_desc_content">
            <div id="single_book_desc_content_list1">
              <div class="single_book_desc_content_list_item"> In order to develop a secure defense against a hostile alien race's next attack, government agencies breed child geniuses and train them as soldiers. A brilliant young boy, Andrew "Ender" Wiggin lives with his kind but distant parents, his sadistic brother Peter, and the person he loves more than anyone else, his sister Valentine. Peter and Valentine were candidates for the soldier-training program but didn't make the cut—young Ender is the Wiggin drafted to the orbiting Battle School for rigorous military training. </div>
              <div class="single_book_desc_content_list_item"> Ender's skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. </div>
              <div class="single_book_desc_content_list_item_temp" class="single_book_desc_content_list_item"> Ender's skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. </div>
            </div>
            <div id="single_book_desc_content_list2">
              <div class="single_book_desc_content_list_item"> In order to develop a secure defense against a hostile alien race's next attack, government agencies breed child geniuses and train them as soldiers. A brilliant young boy, Andrew "Ender" Wiggin lives with his kind but distant parents, his sadistic brother Peter, and the person he loves more than anyone else, his sister Valentine. Peter and Valentine were candidates for the soldier-training program but didn't make the cut—young Ender is the Wiggin drafted to the orbiting Battle School for rigorous military training. </div>
              <div class="single_book_desc_content_list_item"> Ender's skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. </div>
              <div class="single_book_desc_content_list_item_temp"> Ender's skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my_navi_button_container_right" id="next_for_desc">
        <button type="button" class="my_navi_button"> <img src="images/navi_button_next.png"/> </button>
      </div>
    </div>
    <hr>
    <div id="review_session">
      <div class="my_navi_button_container_left" id="prev_for_review">
        <button type="button" class="my_navi_button"> <img src="images/navi_button_prev.png"/> </button>
      </div>
      <div style="float:left">
        <div class="session_title">Reviews</div>
        <div style="width:670px; height:240px"> </div>
      </div>
      <div class="my_navi_button_container_right" id="next_for_review">
        <button type="button" class="my_navi_button"> <img src="images/navi_button_next.png"/> </button>
      </div>
    </div>
    <hr>
    <div id="author_session">
      <div class="my_navi_button_container_left" id="prev_for_author">
        <button type="button" class="my_navi_button"> <img src="images/navi_button_prev.png"/> </button>
      </div>
      <div style="float:left">
        <div class="session_title">About the Author</div>
        <div id="single_book_author">
          <div id="single_book_author_content">
            <div id="single_book_author_content_list1">
              <div class="single_book_author_content_list_item"> In order to develop a secure defense against a hostile alien race's next attack, government agencies breed child geniuses and train them as soldiers. A brilliant young boy, Andrew "Ender" Wiggin lives with his kind but distant parents, his sadistic brother Peter, and the person he loves more than anyone else, his sister Valentine. Peter and Valentine were candidates for the soldier-training program but didn't make the cut—young Ender is the Wiggin drafted to the orbiting Battle School for rigorous military training. </div>
              <div class="single_book_author_content_list_item"> Ender's skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. </div>
              <div class="single_book_author_content_list_item_temp" class="single_book_author_content_list_item"> Ender's skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. </div>
            </div>
            <div id="single_book_author_content_list2">
              <div class="single_book_author_content_list_item"> In order to develop a secure defense against a hostile alien race's next attack, government agencies breed child geniuses and train them as soldiers. A brilliant young boy, Andrew "Ender" Wiggin lives with his kind but distant parents, his sadistic brother Peter, and the person he loves more than anyone else, his sister Valentine. Peter and Valentine were candidates for the soldier-training program but didn't make the cut—young Ender is the Wiggin drafted to the orbiting Battle School for rigorous military training. </div>
              <div class="single_book_author_content_list_item"> Ender's skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. </div>
              <div class="single_book_author_content_list_item_temp" class="single_book_author_content_list_item"> Ender's skills make him a leader in school and respected in the Battle Room, where children play at mock battles in zero gravity. Yet growing up in an artificial community of young soldiers Ender suffers greatly from isolation, rivalry from his peers, pressure from the adult teachers, and an unsettling fear of the alien invaders. His psychological battles include loneliness, fear that he is becoming like the cruel brother he remembers, and fanning the flames of devotion to his beloved sister. </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my_navi_button_container_right" id="next_for_author">
        <button type="button" class="my_navi_button"> <img src="images/navi_button_next.png"/> </button>
      </div>
    </div>
    <hr>
    <div id="adition_session">
      <div style="float:left; height:1px; width:50px"></div>
      <div style="float:left">
        <div class="session_title">Aditional Information</div>
        <div style="width:700px; height:100px">
          <div style="float:left; height:50px; width:160px; padding-right:20px;"> <b>Pages</b><br/>
            256 </div>
          <div style="float:left; height:50px; width:160px; padding-right:20px;"> <b>Features</b><br/>
            Flowing text </div>
          <div style="float:left; height:50px; width:160px; padding-right:20px;"> <b>Best for</b><br/>
            Web, Tablet, Phone, eReader </div>
          <div style="float:left; height:50px; width:160px; padding-right:20px;"> <b>Genres</b><br/>
            Fiction / Science Fiction / Space Opera </div>
        </div>
      </div>
    </div>
    <hr>
    <div id="similar_session">
      <div style="float:left; margin-left:50px">
        <div class="session_title">Similar</div>
        <div id="single_book_aditional">
              <div class="book_item"> <a href="#"><img src="images/The House of Hades.jpg"/></a>
                <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
                  <a class="author_name_link" href="#">Orson Scott Card</a> </div>
              </div>
              <div class="book_item"> <a href="#"><img src="images/The House of Hades.jpg"/></a>
                <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
                  <a class="author_name_link" href="#">Orson Scott Card</a> </div>
              </div>
              <div class="book_item"> <a href="#"><img src="images/The House of Hades.jpg"/></a>
                <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
                  <a class="author_name_link" href="#">Orson Scott Card</a> </div>
              </div>
              <div class="book_item"> <a href="#"><img src="images/The House of Hades.jpg"/></a>
                <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
                  <a class="author_name_link" href="#">Orson Scott Card</a> </div>
              </div>
              <div class="book_item"> <a href="#"><img src="images/The House of Hades.jpg"/></a>
                <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
                  <a class="author_name_link" href="#">Orson Scott Card</a> </div>
              </div>
        </div>
      </div>
    </div>
    <div id="more_session">
      <div style="float:left; margin-left:50px">
        <div class="session_title">More from author</div>
        <div id="single_book_more">
              <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
                <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
                  <a class="author_name_link" href="#">Orson Scott Card</a> </div>
              </div>
              <div class="book_item"> <a href="#"><img src="images/Darkness First.jpg"/></a>
                <div class="book_item_intro"> <a class="book_name_link" href="#">Ender's Game</a> <span class="book_name_end"></span></a><br/>
                  <a class="author_name_link" href="#">Orson Scott Card</a> </div>
              </div>
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
    </div>
    <hr>
  </div>
</div>
<div id="footer">
  <div style="height:50px"> </div>
  <div id="footer_link"> <span style="font-size:12px; color:#555;">©2013 Scatter Inc.</span> <a class="footer_linker_item" href="#">Site Terms of Service</a> <a class="footer_linker_item" href="#">Privacy Policy</a> <a class="footer_linker_item" href="#">Developers</a> <a class="footer_linker_item" href="#">About Us</a> </div>
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
<script type="text/javascript" src="my_js/my_js_single_2.js"></script>
<script type="text/javascript" src="my_js/my_js_single.js"></script>
</body>
</html>
