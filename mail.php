<!doctype html>
<html>
<head>
<meta charset="utf-8">
<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "shalomtodayaa@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>



<!-- <?php 
if(isset($_POST['submit'])){
   $to = "shalomtodayaa@gmail.com"; // this is your Email address
   $from = "shalomtodayaa.oso-aa.org"; // this is the sender's Email address
   $home_group = $_POST['home_group'];
   $like_about_shalom = $_POST['like_about_shalom'];
   $dislike_about_shalom = $_POST['dislike_about_shalom'];
   $need_to_address = $_POST['need_to_address'];
   $steering_committee = $_POST['steering_committee'];
   $additional_info = $_POST['additional_info'];

   $subject = "Anonymous Form submission";
   $message =  "Home Group? " . $home_group . "What do you like? " . $like_about_shalom
                . "What do you dislike? " . $dislike_about_shalom . "What should Shalom address? " . $need_to_address
                . "What does steering committee do? " . $steering_committee . "Additional info: " . $additional_info;

   $headers = "From:" . $from;

   mail($to,$subject,$message,$headers);

   echo "Form submitted successfully. Thank you";
   // You can also use header('Location: thank_you.php'); to redirect to another page.
   }
?> -->

$message = "
        <html>
            <head>                
            <head>
            <body>
                <p>Home group? " . $home_group . " </p><br>
                <p>likes: " . $like_about_shalom . " </p><br>
                <p>disikes: " . $dislike_about_shalom . " </p><br>
                <p>What should Shalom address? " . $need_to_address . " </p><br>
                <p>What does steering committee do? " . $steering_committee . " </p><br>
                <p>Additional Info: " . $dislike_about_shalom . " </p><br>
            <body>
        </html>
    "