

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

        
        $to = "shalomtodayaa@gmail.com"; // this is your Email address
        $from = "shalomtodayaa.oso-aa.org"; // this is the sender's Email address
        $home_group = $_POST['home_group'];
        $like_about_shalom = $_POST['like_about_shalom'];
        $dislike_about_shalom = $_POST['dislike_about_shalom'];
        $need_to_address = $_POST['need_to_address'];
        $steering_committee = $_POST['steering_committee'];
        $additional_info = $_POST['additional_info'];
    
        $subject = "Anonymous Form submission";

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
                <p>Additional Info: " . $additional_info . " </p><br>
            <body>
        </html>";
    
       
         $header = "From:shalom-website \r\n";
         // $header .= "Cc:noCC \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Form submitted successfully, thank you!";
         }else {
            echo "Form could not be submitted, please let webmaster know.";
         }
      ?>
      
   </body>
</html>

