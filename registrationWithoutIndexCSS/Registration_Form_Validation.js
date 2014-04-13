// JavaScript Document
function formValidation()  
{  
var uid = document.registration.userid;  
var passid = document.registration.passid;  
var uname = document.registration.username;  
var uadd = document.registration.address;  
var ucontact=document.registration.ContactNumber;
var uoccupation=document.registration.Occupation;

var ucountry = document.registration.country;  
var uzip = document.registration.zip;  
var uemail = document.registration.email;  
var umsex = document.getElementsByName("sex"); 
if(userid_validation(uid,5,12))  
{  
if(passid_validation(passid,7,12))  
{ 
if(allLetter(uname))  
{  
if(ValidateEmail(uemail))  
{  
  
if(countryselect(ucountry))  
{  
if(allnumeric(uzip))  
{  
 
if(validsex(umsex))  
{  
}  
}   
}  
}   
}  
}
}
  
 
return false;  
 
} 
function userid_validation(uid,mx,my)  
{  
var uid_len = uid.value.length;  
if (uid_len == 0 || uid_len >= my || uid_len < mx)  
{  
alert("User Id should not be empty / length be between "+mx+" to "+my);  
uid.focus();  
return false;  
}  
return true;  
}  
function passid_validation(passid,mx,my)  
{  
var passid_len = passid.value.length;  
if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
{  
alert("Password should not be empty / length be between "+mx+" to "+my);  
passid.focus();  
return false;  
}  
return true;  
}  
  
function allLetter(uname)  
{   
var letters = /^[A-Za-z]+$/;  
if(uname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Username must have alphabet characters only');  
uname.focus();  
return false;  
}  
}  

function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}
}
function countryselect(ucountry)  
{  


if(ucountry.value == "Default")  
{  
alert('Select your country from the list');  
ucountry.focus();  
return false;  
}  
else  
{  
return true;  
}  
}  
function allnumeric(uzip)  
{   
var znumber = /^[0-9]+$/;  
if(uzip.value.match(znumber))  
{  
return true;  
}  
else  
{  
alert('ZIP code must have numeric characters only');  
uzip.focus();  
return false;  
}  
}
  
function validsex(umsex)  
{  
x=0;
if(umsex[0].checked==true || umsex[1].checked==true)   
{  
x++;  
}  
if(x==0)  
{  
alert('Select Male/Female');  
umsex.focus();  
return false;  
}  
else  
{  
alert('Form Succesfully Submitted');  
window.location.reload()  
return true;  
}  
}  

