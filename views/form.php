<?php

    
 
  //use a html error file with templates. Fill the template with appropriate error message

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['message'])){
            $name = validate($_POST['name']);
            $email = validate($_POST['email']);
            $subject = validate($_POST['subject']);
            $message = validate($_POST['message']);
         


               if(!empty($name)&&!empty($subject)&&!empty($message)){
                   $to = "rob@rnwood.co.uk"; //arpearce93@gmail.com
                   $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" .'Reply-To: ' . $email . "\r\n";

                   if(mail($to, $subject, $message,$headers)){
                      echo "Email worked";
                      //include html for success
                   }
                   else{
                      echo "Email failed";
                      //include html for failure
                      //include link to go back to contact page
                    }
                }
                else{
                    echo "Empty values after validation";
                }



         }
       

    }

    function validate($formData){
          $formData = trim($formData);
          $formData = stripslashes($formData);
          $formData = htmlspecialchars($formData);
          return $formData;
    }


            /*echo "$name";
            echo "<br>";
            echo "$email";
            echo "<br>";
            echo "$subject";
            echo "<br>";
            echo "$message";
            */


?>

