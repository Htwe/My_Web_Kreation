// JavaScript Document
function formValidation()  
{  

var uname = document.registration.username;  
var uadd = document.registration.address;  
var ucontact=document.registration.ContactNumber;
var uoccupation=document.registration.Occupation;

var ucountry = document.registration.country;  
var uzip = document.registration.zip;  
var uemail = document.registration.email;  
var umsex = document.getElementsByName("sex"); 

if(allLetter(uname))  
{  
if(ValidateEmail(uemail))  
{  
  
if(countryselect(ucountry))  
{  
if(allnumeric(uzip))  
{  
 
  
}  
}   
}  
}   
 

  
 
return false;  
 
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
  
 

