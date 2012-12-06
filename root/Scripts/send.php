 <?php
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
if($name_field == '' || $email_field == '' || $message == '') {
echo 'ERROR!!!!!';

} else {
$to = "$email_field";
$subject = "Contact From";
 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
$time = time();
$status = "Attempted to send message at: $time";
mail($to, $subject, $body);
//header(location: "index.html");
//This will redirect you to the home page. It's disabled so we can show you the code.  
}
?> 