<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="height:300px">
      <div class="modal-header" style="padding-left:35px; padding-bottom:5px; background-color:#262626;">
        <button type="button" class="close" id="login_close_btn" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body" id="check_out_result">
        <div style="float:left">
          <form style="margin-left:20px" method="post" action="deal_page/deal_login.php" id="form_login" name="form_login" onSubmit="return check_login()">
            <input class="login_input" type="text" id="username" name="username" placeholder="User Name">
            <br>
            <input class="login_input" type="password" id="password" name="password" placeholder="Password">
            <br>
            <input class="login_input" type="text" id="check_code" name="check_code" style="width:120px">
            <!--<label class="login_label">Get Code</label>-->
           
              
              
              
              
            <img style="margin-top:-7px; margin-left:20px" id="img_check_code" onclick="change_code()" src="http://onlinebs-maindomain.stor.sinaapp.com/checkcode.png">
            <br>
            <div style="float:left">
              <input type="checkbox">
            </div>
            <label class="login_label">&nbsp;&nbsp;Remember me</label>
            <label class="login_label" style="padding-left:15px"><a class="login_link" href="#">Forget Password</a></label>
            <br>
            <br>
            <br>
            <input id="login_btn" type="submit" value="Login">
            <label class="login_label">No account? <a class="login_link" href="signup.php">Sign up</a></label>
          </form>
        </div>
        <!--
                        <div id="login_right">
                        	Login by<br>
                            <button class="login_right_btn" id="facebook_btn"></button><br>
                            <button class="login_right_btn" id="google_btn"></button><br>
                            <button class="login_right_btn" id="weibo_btn"></button>
                        </div>--> 
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->