<div id="category_title">
    <div style="height: 48px; min-width: 440px">
        <div id="category_title_left">
            <div>Categories</div>
           
        </div>
        <div style="float:left">
            <div style="height:15px"></div>
        <span class="category_title_navi" style="margin-left:15px">
            <a href="index.php" class="category_title_link">Home</a>
        </span>
        <span class="category_title_navi">
            <img style="padding-bottom: 6px;" src="images/sub_pointer.jpg"/>
            <a href="#" class="category_title_link">Category</a>
        </span>
        </div>
        <?php if (!empty($_SESSION['user'])) { ?>
            <button id="shopping_cart_btn"  onclick="goto_cart()" > Cart</button>
        <?php }else{ ?>
            <button id="shopping_cart_btn" data-toggle="modal" data-target="#login_modal"> Cart </button>
        <?php } ?>
    </div>


    <?php include("include/categorylist.php"); ?>
</div>
