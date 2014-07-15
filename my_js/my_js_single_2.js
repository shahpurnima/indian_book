var screen_width =  window.screen.width;
var is_session_changeformobile = true;
var client_width;
window.onresize = function()
{
	session_changeformobile();
	client_width =  document.body.clientWidth;
	if (client_width > 1330)
	{
		single_book_author.style.width = "1000px";
		single_book_desc.style.width = "1000px";

		single_book_author_content.style.width = "2000px";
		single_book_desc_content.style.width = "2000px";

		single_book_author_content_list1.style.width = "1000px";
		single_book_author_content_list2.style.width = "1000px";	
		single_book_desc_content_list1.style.width = "1000px";
		single_book_desc_content_list2.style.width = "1000px";	

		document.getElementsByClassName("single_book_author_content_list_item_temp")[0].style.display = "block";	
		document.getElementsByClassName("single_book_author_content_list_item_temp")[1].style.display = "block";
		document.getElementsByClassName("single_book_desc_content_list_item_temp")[0].style.display = "block";	
		document.getElementsByClassName("single_book_desc_content_list_item_temp")[1].style.display = "block";
		is_session_changeformobile = false;
	}
	else
	{
		single_book_author.style.width = "670px";
		single_book_desc.style.width = "670px";

		single_book_author_content.style.width = "1340px";
		single_book_desc_content.style.width = "1340px";

		single_book_author_content_list1.style.width = "670px";
		single_book_author_content_list2.style.width = "670px";	
		single_book_desc_content_list1.style.width = "670px";
		single_book_desc_content_list2.style.width = "670px";	

		document.getElementsByClassName("single_book_author_content_list_item_temp")[0].style.display = "none";	
		document.getElementsByClassName("single_book_author_content_list_item_temp")[1].style.display = "none";
		document.getElementsByClassName("single_book_desc_content_list_item_temp")[0].style.display = "none";	
		document.getElementsByClassName("single_book_desc_content_list_item_temp")[1].style.display = "none";
		is_session_changeformobile = true;
	}
}

function session_changeformobile()
{
	if (screen_width <= 1330)
	{
		is_session_changeformobile = true;
	}
	else
	{
		single_book_author.style.width = "1000px";
		single_book_desc.style.width = "1000px";

		single_book_author_content.style.width = "2000px";
		single_book_desc_content.style.width = "2000px";

		single_book_author_content_list1.style.width = "1000px";
		single_book_author_content_list2.style.width = "1000px";	
		single_book_desc_content_list1.style.width = "1000px";
		single_book_desc_content_list2.style.width = "1000px";	

		document.getElementsByClassName("single_book_author_content_list_item_temp")[0].style.display = "block";	
		document.getElementsByClassName("single_book_author_content_list_item_temp")[1].style.display = "block";
		document.getElementsByClassName("single_book_desc_content_list_item_temp")[0].style.display = "block";	
		document.getElementsByClassName("single_book_desc_content_list_item_temp")[1].style.display = "block";
		is_session_changeformobile = false;
	}
}

session_changeformobile();

