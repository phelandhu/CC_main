<?php
function died($error) {
	// your error code can go here
	echo "We are very sorry, but there were error(s) found with the form you submitted. ";
	echo "These errors appear below.<br /><br />";
	echo $error."<br /><br />";
	echo "Please go back and fix these errors.<br /><br />";
	die();
}
function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");
	return str_replace($bad,"",$string);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>

    <LINK rel="stylesheet" type="text/css" media="screen" href="common/css/main.css">
<LINK href="common/css/contact.css" rel="stylesheet" type="text/css">
<!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColElsLt #sidebar1 { padding-top: 30px; }
.twoColElsLt #mainContent { zoom: 1; padding-top: 15px; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]--></head>

<body class="twoColElsLt">
	<?php include "inc.new_header.php" ?>
<div id="container">
    <?php include "top-menu.php" ?>
  <div id="sidebar1">
    <h3></h3>

  <!-- end #sidebar1 --></div>
  <div id="mainContent">
  <?php
	if(isset($_POST['email'])):
		 
		// EDIT THE 2 LINES BELOW AS REQUIRED
		$email_to = "support@cordcruncher.com";
		$email_subject = "Contact request";

		// validation expected data exists
		if(!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) ||
			!isset($_POST['telephone']) || !isset($_POST['comments'])) 
		{
				died('We are sorry, but there appears to be a problem with the form you submitted.');       
		}
		 
		$first_name = $_POST['first_name']; // required
		$last_name = $_POST['last_name']; // required
		$email_from = $_POST['email']; // required
		$telephone = $_POST['telephone']; // not required
		$comments = $_POST['comments']; // required
		 
		$error_message = "";
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	  if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	  }
		$string_exp = "/^[A-Za-z .'-]+$/";
	  if(!preg_match($string_exp,$first_name)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	  }
	  if(!preg_match($string_exp,$last_name)) {
		$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	  }
	  if(strlen($comments) < 2) {
		$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	  }
	  if(strlen($error_message) > 0) {
		died($error_message);
	  }
		$email_message = "Form details below.\n\n";

		$email_message .= "First Name: ".clean_string($first_name)."\n";
		$email_message .= "Last Name: ".clean_string($last_name)."\n";
		$email_message .= "Email: ".clean_string($email_from)."\n";
		$email_message .= "Telephone: ".clean_string($telephone)."\n";
		$email_message .= "Comments: ".clean_string($comments)."\n";
		 
		 
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);  

	 
	//<!-- include your own success html here -->
	 
	echo "Thank you for contacting us. We will be in touch with you very soon.";
	 

	else:
  ?>
  <div id="contactForm">
    <h2>Contact form </h2>
    <form name="contactform" method="post" action="contact.php">
        <table width="450px">
            <tr>
                <td valign="top">
                	<label for="first_name">First Name *</label>
                </td>
                <td valign="top">
                	<input  type="text" name="first_name" maxlength="50" size="30">
                </td>
            </tr>
            <tr>
                <td valign="top">
	                <label for="last_name">Last Name *</label>
                </td>
                <td valign="top">
    	            <input  type="text" name="last_name" maxlength="50" size="30">
                </td>
            </tr>
            <tr>
                <td valign="top">
	                <label for="email">Email Address *</label>
                </td>
                <td valign="top">
    	            <input  type="text" name="email" maxlength="80" size="30">
                </td>
            </tr>
            <tr>
                <td valign="top">
               		<label for="telephone">Telephone Number</label>
                </td>
                <td valign="top">
                	<input  type="text" name="telephone" maxlength="30" size="30">
                </td>
            </tr>
            <tr>
                <td valign="top">
                	<label for="comments">Comments *</label>
                </td>
                <td valign="top">
                	<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
	                <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    </div>
<?php endif; ?>
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
  <?php include "footer-menu.php" ?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
