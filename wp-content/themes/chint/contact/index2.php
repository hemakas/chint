<?php

// Set email variables
$email_to = 'reservations@theresidence.lk';
$email_subject = 'The Residence Comment';

// Set required fields
$required_fields = array('contactname','email');

// set error messages
$error_messages = array(
	'contactname' => 'Please enter a Name.',
	'email' => 'Please enter a valid Email.',
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

// check form submittal
if(!empty($_POST)) {
	// Sanitise POST array
	foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
	
	// Loop into required fields and make sure they match our needs
	foreach($required_fields as $field) {		
		// the field has been submitted?
		if(!array_key_exists($field, $_POST)) array_push($validation, $field);
		
		// check there is information in the field?
		if($_POST[$field] == '') array_push($validation, $field);
		
		// validate the email address supplied
		if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
	}
	
	// basic validation result
	if(count($validation) == 0) {
		// Prepare our content string
		$email_content = 'The Residence Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content);
		
		// Update form switch
		$form_complete = TRUE;
	}
}

function validate_email_address($email = FALSE) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>

<!DOCTYPE HTML>
<html manifest="/denisfrietman.manifest">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title></title>


<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/icons.css">
<link rel="stylesheet" href="../css/style.css">
<link href="form-style2.css" rel="stylesheet" type="text/css" media="screen">

<!-- ** FONTS ** 
================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600' rel='stylesheet' type='text/css'>
    
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>


<script src="jquery.tools.min.js"></script>
<script src="jquery.validate.min.js" type="text/javascript"></script>
<script src="script.js"></script>


</head>

<body>

  	
<?php if($form_complete === FALSE): ?>  

<form class="col-lg-5 web-form" id="contact-form" action="#contact" method="post">

			<div style="width:48.5%; margin-right:3%; float: left;">
            <input id="contactname" name="contactname" class="required" style="width:100%;" type="text" placeholder="Your name">
            </div>
            
        	<div style="width:48.5%; float: left;">
            <input id="number" name="number" class="number col-md-12" style="width:100%;" type="text" placeholder="Phone number" />
            </div>
        
        	<div>
            <input id="email" name="email" class="required email col-md-12 col-xs-12 col-sm-12" type="email" placeholder="Email address" />
            </div>
        	
            <div>
            <input id="subject" name="subject" class="required col-md-12 col-xs-12 col-sm-12" type="text" placeholder="Subject" />
            </div>
            
            <div>
            <textarea id="message" name="message" class="required col-md-12 col-xs-12 col-sm-12" type="text" rows="10" cols="12" placeholder="Message"></textarea>
            </div>
            
            <div class="col-md-12 contact-button"><button value="Submit" type="submit" name="submit">Submit</button></div>
</form> 

<!--<form class="col-lg-5 web-form" id="contact-form" action="#contact" method="post">
                
    <input id="contactname" name="contactname" type="text" class="col-md-6" style="width:48.5%; margin-right:3%;" placeholder="First name">
    
    <input id="email" name="email" type="text" class="col-md-6" style="width:48.5%;" placeholder="Last name">
    
    <input id="number" name="number" type="text" class="col-md-12" placeholder="Email address">
    
    <input id="subject" name="subject" type="text" class="col-md-12" placeholder="Phone number">
    
    <textarea id="message" name="message" class="col-md-12" placeholder="Message"></textarea>
    
    <div class="col-md-12 contact-button"><button value="Submit" type="submit" name="submit">Submit</button></div>
</form>-->

<?php else: ?>

<div class="contact-form-box"> 
	<h5>Your message has been sent!</h5>
</div>

<script type="text/javascript">
setTimeout('ourRedirect()', 5000)
function ourRedirect(){
	location.href='index2.php'
}
</script>
</div> 

<?php endif; ?>

        
</body>
</html>
