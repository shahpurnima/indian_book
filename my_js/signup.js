// JavaScript Document
var isName_taken = false;
function checkUserName_Taken()
{
	$('#username_test').popover('hide');
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
			var result = new String(xmlhttp.responseText);
			var test = result.slice(0, 1);
			if (test == "N")
			{
				$('#username_test_isTaken').popover('show');
				isName_taken = true;							 
			}
			else
			{
				$('#username_test_isTaken').popover('hide');
				isName_taken = false;	
			}
			
		}
	}
	xmlhttp.open("GET", "deal_page/deal_signup.php?username="+form_signup.username.value, true);
	//xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send();
}

function onkeyup_mail_input()
{
	$('#email_test').popover('hide');
	$('#email_format_test').popover('hide');
}

function onkeyup_password_input()
{
	$('#password_test').popover('hide');
}
function onkeyup_password_cofirm_input()
{
	$('#password_confirm_test').popover('hide');
}

function check_signup()
{
	if(form_signup.username.value=="")
	{
		$('#username_test').popover('show');
		form_signup.username.select();
		return false;
	}	
	if(isName_taken)
	{
		$('#username_test_isTaken').popover('show');
		form_signup.username.select();
		return false;
	}
	
	if(form_signup.email.value==""){
			$('#email_test').popover('show');
			form_signup.email.select();
			return(false);
		 } 
	if(!check_email(form_signup.email.value)){
		$('#email_format_test').popover('show');
		form_signup.email.select();
		return(false);
	} 
	
	
		if(form_signup.password.value==""){
	        $('#password_test').popover('show');
			form_signup.password.select();
			return(false);
		 }	
        if(form_signup.password.value!=form_signup.password_confirm.value){
		    $('#password_confirm_test').popover('show');
			form_signup.password_confirm.select();
			return(false);
		 }	   	 
		return(true);				 
}	

function check_email(email){
	var strs=email;
	var Expression=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;  
	var objExp=new RegExp(Expression);
	if(objExp.test(strs)==true){
		return true;
	}else{
		return false;
	}
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











































