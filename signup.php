<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sign Up</title>
<link href="lib/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="my_css/mycss_signup.css">
<link href="my_css/login.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
  var js_checkcode = "checkcode";
</script>
</head>

<body>
<div id="header_wrapper">
<div id="header">
<div id="logo"> <a id="logo_link" href="index.php"> <img src="images/title.png"/> </a> </div>
<div id="signin_button_div">
<button id="my_titlebar_signin"  data-toggle="modal" data-target="#login_modal">
</div>
</div>
</div>
<?php include("include/login.php"); ?>
<div id="signupbody_wrap">
  <div id="signupbody">
    <div id="intro">
      <h1 id="intro_title">All book, All Online
      <br/>
      Join Us Today.
      </h1>
      <p id="intro_detail">
      Browse the world's largest eBookstore and start reading today on the web, tablet, phone, or ereader. <br/>
      You will definitely fall in love with every word in all of the books.
      </p>
    </div>
    <div id="form_div">
      <form action="deal_page/deal_signup.php" method="post" name="form_signup" onsubmit="return check_signup()">
        <div id="username_test_isTaken" data-toggle="popover" data-placement="top" data-content="The name has been taken." data-original-title="" title="">
		</div>
        <div id="username_test" data-toggle="popover" data-placement="top" data-content="Please enter your name." data-original-title="" title="">
		</div>
        <input onKeyUp="checkUserName_Taken()" type="text" class="input_text" id="username" name="username"  placeholder="Pick a username">
        <br/>
        
        <div id="email_test" data-toggle="popover" data-placement="top" data-content="Please enter your email." data-original-title="" title="">
		</div>
        <div id="email_format_test" data-toggle="popover" data-placement="top" data-content="The email format is not right." data-original-title="" title="">
		</div>
        <input onKeyUp="onkeyup_mail_input()" type="text" class="input_text" id="email" name="email" placeholder="Your email">
        <br/>
        
        <div id="password_test" data-toggle="popover" data-placement="top" data-content="Please enter your password." data-original-title="" title="">
		</div>
        <input  onKeyUp="onkeyup_password_input()"  type="password" class="input_text" id="password" name="password" placeholder="Create a password">
        <br/>
         
         <div id="password_confirm_test" data-toggle="popover" data-placement="top" data-content="Password mis-match." data-original-title="" title="">
		</div>
        <input onKeyUp="onkeyup_password_cofirm_input()" type="password" class="input_text" id="password_confirm" name="password_confirm" placeholder="Confirm password">
        <br/>
        
        <input type="submit" id="submit_btn" name="Submit" value="Sign Up" />
      </form>
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
<script type="text/javascript" src="my_js/signup.js"></script>
</body>


</html>