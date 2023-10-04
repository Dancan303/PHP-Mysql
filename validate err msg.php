<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr;
    }
    else{
        $name=test_input($_POST["name"]);
        echo$sname."<br/>";
    }
}
if(empty($_POST["email"])){
    $emailErr="email is a required field"
}
else{
    $email=test_input($_POST["email"])
    echo$email."<br/>";
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["website"])){
    echo "website is a required field"
}
else{
    $email=test_input($_POST["website"]);
    echo $website."<br/>";
   }
}
if($_SERVER["REQUEST_METHOD"]==POST){
   if(empty($_POST["comment"])){
    echo"comment is a required field";
   }
   else{
    $comment=test_input($_POST["comment"]);
    echo $comment."<br/>;
   }
}
if()
?>