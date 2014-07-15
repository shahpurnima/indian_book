<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>Check Out</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="lib/css/bootstrap.css" rel="stylesheet">
<link href="my_css/mycss_checkout.css" rel="stylesheet" type="text/css">
<link href="my_css/titlebar.css" rel="stylesheet" type="text/css">
<link href="my_css/categorybar.css" rel="stylesheet" type="text/css">
<link href="my_css/categorylist.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src=lib/js/html5shiv.js></script>
    <script src="lib/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php include("include/titlebar.php"); ?>
<?php include("include/categorybar.php"); ?>

<div id="main_page">
  <div id="main_page_right">
    <div id="content_books">
      <div style="height:40px; width:200px"></div>
      <div id="temp">
        <div class="check_out_title"> <span id="check_out_book_list">Book List</span> </div>
        <div>
          <div class="check_out_book_item"> <span class="check_out_book_img"><img width="50px" height="70px" src="images/Diary of a Wimpy Kid.jpg"></span>
            <label class="check_out_book_name"> <a class="check_out_book_name_link" href="#"> Diary of a Wimpy Kid <span class="checkout_book_name_end"></span> </a> </label>
            <span class="check_out_book_num">2</span> <span class="check_out_book_price">$8.00</span> </div>
          <div class="check_out_book_item"> <span class="check_out_book_img"><img width="50px" height="70px" src="images/Diary of a Wimpy Kid.jpg"></span>
            <label class="check_out_book_name"> <a class="check_out_book_name_link" href="#"> Diary <span class="checkout_book_name_end"></span> </a> </label>
            <span class="check_out_book_num">2</span> <span class="check_out_book_price">$8.00</span> </div>
        </div>
        <div class="check_out_title"> <span id="check_out_delivery">Delivery</span> </div>
        <div>
          <form id="check_out_delivery_form">
            <input type="radio" name="delivery_radio" value="1"  onclick="add_delivery_cost(this)" />
            24-hours devlivery, $5.00<br>
            <input type="radio" name="delivery_radio" value="2" checked="checked" onclick="add_delivery_cost(this)" />
            Usual delivery method, may take 4-7 days<br>
            <input type="radio" name="delivery_radio" value="3" onclick="add_delivery_cost(this)"  />
            Get in our physical stores<br>
          </form>
        </div>
        <hr>
        <div style="width:100px; margin-left:580px; margin-bottom:20px; margin-top:10px; font-size:16px"> Total: <span id="total_cost">0</span> </div>
        <div class="check_out_title"> <span id="shipping_address">Shipping Address</span>
          <button class="checkout_edit_btn" id="edit_button_address">Edit</button>
        </div>
        <div id="check_out_address">
          <hr style="margin:0">
          <br/>
          <form>
            <div>
              <select id="address_select_country" class="address_select">
                <option style="color:#999">Country</option>
                <option style="color:#999">America</option>
                <option style="color:#999">China</option>
                <option style="color:#999">Japan</option>
                <option style="color:#999">Canada</option>
              </select>
              <select id="address_select_state" class="address_select">
                <option style="color:#999">State</option>
                <option style="color:#999">America</option>
                <option style="color:#999">China</option>
                <option style="color:#999">Japan</option>
                <option style="color:#999">Canada</option>
              </select>
              <select id="address_select_city" class="address_select">
                <option style="color:#999">City</option>
                <option style="color:#999">America</option>
                <option style="color:#999">China</option>
                <option style="color:#999">Japan</option>
                <option style="color:#999">Canada</option>
              </select>
            </div>
            <br>
            <div class="info_prompt">
              <input class="input_item" id="address" type="text" placeholder="Address"/>
            </div>
            <br>
            <span class="info_prompt">
            <input class="input_item" id="zipcode" type="text" placeholder="Zip Code"/>
            </span> <br>
            <br>
            <span class="info_prompt" >
            <input class="input_item" id="first_name" type="text" placeholder="First Name"/>
            </span> <span class="info_prompt" >
            <input class="input_item" id="last_name" type="text" placeholder="Last Name"/>
            </span> <br>
            <br>
            <span class="info_prompt" >
            <input class="input_item" id="phone_number" type="text" placeholder="Phone Number"/>
            </span> <span class="info_prompt" >
            <input class="input_item" id="e_mail" type="text" placeholder="E-mail"/>
            </span>
          </form>
          <div>
            <button class="checkout_edit_btn" id="checkout_address_confirm_btn"> Confirm </button>
          </div>
          <br>
          <br>
          <hr>
        </div>
        <div id="check_out_address_confirm">
          <input class="check_out_item" id="check_out_address_item1">
          </input>
          <br>
          <input class="check_out_item" id="check_out_address_item2">
          </input>
          <br>
          <input class="check_out_item" id="check_out_address_item3">
          </input>
          <br>
        </div>
        <br>
        <br>
        <div class="check_out_title"> <span id="shipping_payment">Payment</span>
          <button class="checkout_edit_btn"  id="edit_button_payment">Edit</button>
        </div>
        <div id="check_out_payment">
          <hr style="margin:0">
          <br/>
          <form style="margin-left:20px">
            <label style="font-size:12px;">Credit or debit card</label>
            <br>
            <input class="input_item" id="credit_card" placeholder="Card Number"/>
            <br>
            <br>
            <label style="font-size:12px;">Expiration date</label>
            <label style="font-size:12px; margin-left:200px">Security code</label>
            <br>
            <input class="input_item" id="expiration_month" placeholder="MM"/>
            <label style="font-size:16px;"> / </label>
            <input class="input_item" id="expiration_year" placeholder="YY"/>
            <input style="margin-left:175px" class="input_item" id="security_code" placeholder="CVC"/>
          </form>
          <div>
            <button class="checkout_edit_btn" id="checkout_payment_confirm_btn"> Confirm </button>
          </div>
          <br>
        </div>
        <div id="check_out_payment_confirm">
          <input class="check_out_item" id="check_out_payment_item1">
          </input>
          <br>
          <input class="check_out_item" id="check_out_payment_item2">
          </input>
          <br>
        </div>
        <div style="margin-top:50px; height:100px">
          <hr style="margin:0; margin-bottom:10px">
          <button class="checkout_edit_btn" id="checkout_btn" data-toggle="modal" data-target="#myModal"> Check Out ! </button>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Succeed !</h4>
              </div>
              <div class="modal-body" id="check_out_result"> Thank you for buying our books !<br>
                We'll take care your order as soon as possible! Enjoy Reading ! </div>
              <div class="modal-footer">
                <button type="button" id="check_out_closs_btn" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal -->
        
        <div id="check_out_notificatons"> You provide most such information when you search, buy, bid, post, participate in a contest or questionnaire, or communicate with customer service. For example, you provide information when you search for a product; place an order through scatter.com or one of our third-party sellers; provide information in Your Account (and you might have more than one if you have used more than one e-mail address when shopping with us) or Your Profile; communicate with us by phone, e-mail, or otherwise; complete a questionnaire or a contest entry form; use our services; compile Wish Lists or other gift registries; participate in Discussion Boards or other community features; provide and rate Reviews; specify a Special Occasion Reminder; and employ Product Availability Alerts, such as Available to Order Notifications. As a result of those actions, you might supply us with such information as your name, address, and phone numbers; credit card information; people to whom purchases have been shipped, including addresses and phone number; people (with addresses and phone numbers) listed in 1-Click settings; e-mail addresses of your friends and other people; content of reviews and e-mails to us; personal description and photograph in Your Profile; and financial information, including Social Security and driver's license numbers.
          Information about our customers is an important part of our business, and we are not in the business of selling it to others. </div>
      </div>
    </div>
    <div id="footer"> 
      <!--
    			<div style="height:50px">
        			<hr style="width:600px; margin-left:50px">
        		</div>-->
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
