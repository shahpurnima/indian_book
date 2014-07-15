<div id="my_titlebar">
    <div id="my_titlebar_left" > <img style="margin-left:20px; margin-right:20px" src="images/title.png"/> </div>
    <div id="my_titlebar_right">
        <?php if(!empty($_SESSION['user'])) { ?>
            <img id="headimg" onMouseOver="showArrow()" onClick="goto_mypage()"  src="images/head.jpg" />
            <button id="my_titlebar_loginout"  onClick="user_logout()" >Logout</button>
        <?php }else{ ?>
        <button id="my_titlebar_signin"  data-toggle="modal" data-target="#login_modal">
            <?php } ?>
    </div>

    <div id="my_titlebar_middle">
        <div id="my_titlebar_middle_up"></div>
        <div id="my_titlebar_middle_center">
            <form id="my_titlebar_searchform">
                <div id="my_titlebar_searchdiv">
                    <input id="my_titlebar_searchinput" type="text">
                </div>
                <div style="float:left">
                    <input id="my_titlebar_searchbutton" type="submit" value="">
                </div>
            </form>
        </div>
        <div id="my_titlebar_middle_down"></div>
    </div>
</div>