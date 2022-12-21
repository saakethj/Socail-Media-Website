function valid()
{
if(document.chngpwd.currentpassword.value=="")
{
alert("Old Password Filled is Empty !!");
document.chngpwd.currentpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filled is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filled is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}