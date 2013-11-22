<?php

/*
 * EMAIL FORM FOR INTERESTED PEOPLE IN THE WORLD MURAL
 * 
 * THIS WILL ALSO KICKBACK THEIR EMAIL TO OUR TEAM ACCOUNT 
 * SO WE CAN ADD THEM TO THE LISTSERVE/MAILCHIMP
 * 
 * VERSION: 1.0
 * CREATED BY: CORY
 * 
 * FUTURE:
 *   - ADD MAILCHIMP AUTO ADD
 *   - ADD SUCCESS/FAILURE MESSAGE TO EMAIL.PHP USING SESSION VAR
 */

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 $emailto = htmlspecialchars($_POST['email']);
 $subject = "World Mural Project Information";
 
 
 $message = "
 			<html>
 			<body>
 				<img src='http://www.worldmuralproject.org/img/emaillogo.png' style='display: block; margin-left: auto; margin-right: auto;' \>
 				<br><br>
 				Thank you for your interest in learning more about the World Mural Project. <br><br>
				Each Inspiration Mural gives a strong voice to a community’s hopes and concerns. The World 
				Mural brings these communities together by using innovative technology that stitches the 
				murals together. The World Mural project facilitates artists reaching out to work together 
				across borders and become ambassadors for tolerance and intercultural dialogue. It also 
				serves to broaden perspectives and promote cross-cultural understanding. You can view more
				about our exciting project at <a href='http://www.worldmuralproject.org/' target='_blank'>The World Mural Project</a> website or view 
				or <a href='http://www.worldmuralproject.org/project.pdf' target='_blank'>Project Summary (PDF)</a><br><br>
				
				We are extremely excited to have you on board with our project. If you are looking to help with
				the project, you can <a href='http://www.worldmuralproject.org/walkway'>purchase an inscribed brick</a> 
				for the World Mural Walkway: State College. If you are interested in supporting us on a more significant
				level, please <a href='mailto:team@worldmuralproject.org'>email our team</a> and we will get ahold of you.<br><br>
			</body>
			</html>
			";
 
  
 if (mail($emailto, $subject, $message, $headers)) {
 	$_SESSION['success'] = 1;
   header('Location: http://www.worldmuralproject.org/email');
  } else {
  	$_SESSION['success'] = 0;
   header('Location: http://www.worldmuralproject.org/email');
  }
  
?>