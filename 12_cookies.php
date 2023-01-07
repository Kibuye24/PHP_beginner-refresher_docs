<?php 
/*--------------------------------Cookies--------------------------------------------*/
/*
* Our Website Uses Cookies - Something you will often see on websites. But what are they?
* Cookies are small pieces of data that are stored on your computer by websites you visit. 
* They are often used to keep track of your preferences and to personalize your experience on the website. 
* For example, a cookie might store your login information so you don't have to enter it every time you visit the  
* site, or it might store your language preference so the website is displayed in your preferred language. 
* Cookies are generally harmless and are an important part of how the web works. 
* However, some people prefer to block or delete cookies, either for privacy reasons 
* or to reduce clutter on their computer.
*/

//Setting cookies
setcookie('name', 'Kibuye', time() + 86400); 

//sets a cookie with a key of 'name' and value of 'Kibuye' for a day(86400seconds)
//You can find these in the cookie tab in the chrome developer tools

//Accessing the cookie
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

//Output - Kibuye

//Unsetting the cookie - You have to set the cookie to the past to unset it
setcookie('name', '', time() - 86400);

//The cookie will set then unset as the value is then blank

