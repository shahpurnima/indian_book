var my_titlebar = document.getElementById("my_titlebar");
var category_title = document.getElementById("category_title");
var main_page_left = document.getElementById("main_page_left");







var dir_for_desc;
var i_for_desc = 0;
var position_for_desc = 0;
var timer_for_desc = null;
var next_button_for_desc = document.getElementById("next_for_desc");
var prev_button_for_desc = document.getElementById("prev_for_desc");
var single_book_desc_content = document.getElementById("single_book_desc_content");
next_button_for_desc.onclick = next_page_for_desc;
prev_button_for_desc.onclick = prev_page_for_desc;
function next_page_for_desc() {
	dir_for_desc = true;
	move_for_desc();
}
function prev_page_for_desc() {
	dir_for_desc = false;
	move_for_desc();
}

var arr_for_desc = [0, -670];
function move_for_desc() {
	if (is_session_changeformobile)
	{
		arr_for_desc = [0, -670];
	}
	else
	{
		arr_for_desc = [0, -1000];
	}
	
	if (dir_for_desc == true) {
		if (i_for_desc == arr_for_desc.length - 1) {
			return;
		}
		position_for_desc -= 50;
		single_book_desc_content.style.left = parseInt(position_for_desc) + "px";
		if (position_for_desc <= arr_for_desc[i_for_desc + 1])
		{
			i_for_desc++;
		}
		else
		{
			clearTimeout(timer_for_desc);
            timer_for_desc = setTimeout("move_for_desc()", 20);
		}
	}
	if (dir_for_desc == false) {
		if (i_for_desc < 1) {
			return;
		}
		position_for_desc += 50;
		single_book_desc_content.style.left = parseInt(position_for_desc) + "px";
		if (position_for_desc == arr_for_desc[i_for_desc -1]) {
			i_for_desc--;
		}
		else
		{
			clearTimeout(timer_for_desc);
            timer_for_desc = setTimeout("move_for_desc()",20);
		}
	}
}


var dir_for_author;
var i_for_author = 0;
var position_for_author = 0;
var timer_for_author = null;
var next_button_for_author = document.getElementById("next_for_author");
var prev_button_for_author = document.getElementById("prev_for_author");
var single_book_author_content = document.getElementById("single_book_author_content");
next_button_for_author.onclick = next_page_for_author;
prev_button_for_author.onclick = prev_page_for_author;
function next_page_for_author() {
	dir_for_author = true;
	move_for_author();
}
function prev_page_for_author() {
	dir_for_author = false;
	move_for_author();
}

var arr_for_author = [0, -670];
function move_for_author() {

	if (is_session_changeformobile)
	{
		arr_for_author = [0, -670];
	}
	else
	{
		arr_for_author = [0, -1000];
	}
	
	if (dir_for_author == true) {
		if (i_for_author == arr_for_author.length - 1) {
			return;
		}
		position_for_author -= 50;
		single_book_author_content.style.left = parseInt(position_for_author) + "px";
		if (position_for_author <= arr_for_author[i_for_author + 1])
		{
			i_for_author++;
		}
		else
		{
			clearTimeout(timer_for_author);
            timer_for_author = setTimeout("move_for_author()", 20);
		}
	}
	if (dir_for_author == false) {
		if (i_for_author < 1) {
			return;
		}
		position_for_author += 50;
		single_book_author_content.style.left = parseInt(position_for_author) + "px";
		if (position_for_author == arr_for_author[i_for_author -1]) {
			i_for_author--;
		}
		else
		{
			clearTimeout(timer_for_author);
            timer_for_author = setTimeout("move_for_author()",20);
		}
	}
}




function goto_cart()
{
	window.location.href="check_out.php";
}

function goto_mypage()
{
    window.location.href="my_page.php";
}

function showArrow()
{
	document.getElementById("headimg").style.cursor = "pointer";
}





function check_login()
{
	if (form_login.username.value == "")
	{
		alert("Please enter your name!");
		return false;
	}
	if (form_login.password.value == "")
	{
		alert("Please enter your password!");
		return false;
	}
	if (form_login.check_code.value == "")
	{
		alert("Please enter checkcode!");
		return false;
	}
	if (form_login.check_code.value != js_checkcode)
	{
		alert("Wrong checkcode! ");
		change_code();
		return false;
	}
	return true;
}

function change_code()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var str = xmlhttp.responseText.split(",");
			js_checkcode = str[0];
			document.getElementById("img_check_code").src="http://onlinebs-maindomain.stor.sinaapp.com/tmp/" + str[1];
		}
	}
	xmlhttp.open("GET", "changecode.php", true);
	xmlhttp.send();
}


function user_logout()
{
	//window.open("deal_page/deal_logout.php", "", "", false);
	window.location.href = "deal_page/deal_logout.php";
}
	






//下是jQuery
$(function() {
		$(".category_item_content").hide();
		/*
		$( "#category_list" ).accordion({
			heightStyle: "content"
		});*/
		$("#category_item_arts").click(function() {
			$(this).next(".category_item_content").slideToggle("slow");
			$("#category_item_children").next(".category_item_content").slideUp("slow");
			$("#category_item_literature").next(".category_item_content").slideUp("slow");
			$("#category_item_social_science").next(".category_item_content").slideUp("slow");
			$("#category_item_health").next(".category_item_content").slideUp("slow");
			$("#category_item_technology").next(".category_item_content").slideUp("slow");
		});
		$("#category_item_children").click(function() {
			$(this).next(".category_item_content").slideToggle("slow");
			$("#category_item_arts").next(".category_item_content").slideUp("slow");
			$("#category_item_literature").next(".category_item_content").slideUp("slow");
			$("#category_item_social_science").next(".category_item_content").slideUp("slow");
			$("#category_item_health").next(".category_item_content").slideUp("slow");
			$("#category_item_technology").next(".category_item_content").slideUp("slow");
		});
		$("#category_item_literature").click(function() {
			$(this).next(".category_item_content").slideToggle("slow");
			$("#category_item_arts").next(".category_item_content").slideUp("slow");
			$("#category_item_children").next(".category_item_content").slideUp("slow");
			$("#category_item_social_science").next(".category_item_content").slideUp("slow");
			$("#category_item_health").next(".category_item_content").slideUp("slow");
			$("#category_item_technology").next(".category_item_content").slideUp("slow");
		});
		$("#category_item_social_science").click(function() {
			$(this).next(".category_item_content").slideToggle("slow");
			$("#category_item_arts").next(".category_item_content").slideUp("slow");
			$("#category_item_children").next(".category_item_content").slideUp("slow");
			$("#category_item_literature").next(".category_item_content").slideUp("slow");
			$("#category_item_health").next(".category_item_content").slideUp("slow");
			$("#category_item_technology").next(".category_item_content").slideUp("slow");
		});
		$("#category_item_health").click(function() {
			$(this).next(".category_item_content").slideToggle("slow");
			$("#category_item_arts").next(".category_item_content").slideUp("slow");
			$("#category_item_children").next(".category_item_content").slideUp("slow");
			$("#category_item_literature").next(".category_item_content").slideUp("slow");
			$("#category_item_social_science").next(".category_item_content").slideUp("slow");
			$("#category_item_technology").next(".category_item_content").slideUp("slow");
		});
		$("#category_item_technology").click(function() {
			$(this).next(".category_item_content").slideToggle("slow");
			$("#category_item_arts").next(".category_item_content").slideUp("slow");
			$("#category_item_children").next(".category_item_content").slideUp("slow");
			$("#category_item_literature").next(".category_item_content").slideUp("slow");
			$("#category_item_social_science").next(".category_item_content").slideUp("slow");
			$("#category_item_health").next(".category_item_content").slideUp("slow");
		});
		
		
		
		
		
		$(".category_item").hover(
		function() {
			$(this).css("color", "#FFF");
		}, 
		function() {
			$(this).css("color", "#333");		
		});
				
	});

$(function() {
	$(".my_navi_button").hover(
	function() {
		$(this).css("background-color", "#FFF");
		$(this).css("border", "1px solid #555555");
	}, 
	function()
	{
		$(this).css("background-color", "inherit");
		$(this).css("opacity", "1.0");
		$(this).css("border", "none");
	});
});


	












