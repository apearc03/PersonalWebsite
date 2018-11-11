<?php

    
 
  //use a html error file with templates. Fill the template with appropriate error message

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['message'])){
            $name = validate($_POST['name']);
            $email = validate($_POST['email']);
            $subject = validate($_POST['subject']);
            $message = validate($_POST['message']);
         


               if(!empty($name)&&!empty($subject)&&!empty($message)){
                   $to = "arpearce@alexpearce.info";
                   $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" .'Reply-To: ' . $email . "\r\n";

                   if(mail($to, $subject, $message,$headers)){
                      //echo "Email worked";
                      $result = "Thank you for your message.";
                      include("result.php");
                      
                   }
                   else{
                      //echo "Email failed";
                      $result = "Message failed to send";
                      include("result.php");
                    }
                }
                else{
                    $result = "Message failed to send because of empty form values";
                    include("result.php");
                }



         }
       

    }
    else{
        $result = "";
        include("result.php");
    }



    function validate($formData){
          $formData = trim($formData);
          $formData = stripslashes($formData);
          $formData = htmlspecialchars($formData);
          return $formData;
    }




?>

