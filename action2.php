<?php
$username_cookie = "username";
$username_cookie_value =  $_POST['username'] ;
setcookie($username_cookie, $username_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE[$username_cookie])) {
echo "Cookie '" . $username_cookie . "' is set!<br>";
echo "Value is: " . $_COOKIE[$username_cookie];
}else {
    echo "Cookie named '" . $username_cookie. "' is not set!";
  } 
   ?><br>
   <?php
$email_cookie = "email";
$email_cookie_value =  $_POST['email'] ;
setcookie($email_cookie, $email_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE[$email_cookie])) {
echo "Cookie '" . $email_cookie . "' is set!<br>";
echo "Value is: " . $_COOKIE[$email_cookie];
}else {
    echo "Cookie named '" . $email_cookie. "' is not set!";
  } 
   ?><br>
     <?php
$gen_cookie = "gen";
$gen_cookie_value =  $_POST['gen'] ;
setcookie($gen_cookie, $gen_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE[$gen_cookie])) {
echo "Cookie '" . $gen_cookie . "' is set!<br>";
echo "Value is: " . $_COOKIE[$gen_cookie];
}else {
    echo "Cookie named '" . $gen_cookie. "' is not set!";
  } 
   ?><br>
   <?php
$lang1_cookie = "lang1";
if(isset($_POST['lang1'])){
$lang1_value = $_POST['lang1'] ;
setcookie($lang1_cookie,$lang1_value  , time() + (86400 * 30), "/"); // 86400 = 1 day
if(isset($_COOKIE[$lang1_cookie])) {
    echo "Cookie '" . $lang1_cookie . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$lang1_cookie];
    }else {
        echo "Cookie named '" . $lang1_cookie. "' is not set!";
      } 

    }
?>
   <?php
$lang2_cookie = "lang2";
if(isset($_POST['lang2'])){
$lang2_cookie_value =  $_POST['lang2'] ;
setcookie($lang2_cookie, $lang2_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE[$lang2_cookie])) {
echo "Cookie '" . $lang2_cookie . "' is set!<br>";
echo "Value is: " . $_COOKIE[$lang2_cookie];
}else {
    echo "Cookie named '" . $lang2_cookie. "' is not set!";
  } 

}
   ?><br>
     <?php
$lang3_cookie = "lang3";
if(isset($_POST['lang3'])){
$lang3_cookie_value =  $_POST['lang3'] ;
setcookie($lang3_cookie, $lang3_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE[$lang3_cookie])) {
echo "Cookie '" . $lang3_cookie . "' is set!<br>";
echo "Value is: " . $_COOKIE[$lang3_cookie];
}else {
    echo "Cookie named '" . $lang3_cookie. "' is not set!";
  } 
}
   ?><br>
     <?php
$lang4_cookie = "lang4";
if(isset($_POST['lang4'])){
$lang4_cookie_value =  $_POST['lang4'] ;
setcookie($lang4_cookie, $lang4_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE[$lang4_cookie])) {
echo "Cookie '" . $lang4_cookie . "' is set!<br>";
echo "Value is: " . $_COOKIE[$lang4_cookie];
}else {
    echo "Cookie named '" . $lang4_cookie. "' is not set!";
  } 
}
   ?><br>
   <?php
   $city_cookie = "city";
   $city_cookie_value = $_POST['city'];
   setcookie($city_cookie,$city_cookie_value,time() + (86400 * 30), "/"); // 86400 = 1 day

   if(isset($_COOKIE[$city_cookie])) {
    echo "Cookie '" . $city_cookie . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$city_cookie];
    }else {
        echo "Cookie named '" . $city_cookie. "' is not set!";
      } 
       ?><br>