<?php

// Set email variables
$email_to = '<reservations@theresidence.lk>, <info@theresidence.lk>';
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
<link href="form-style.css" rel="stylesheet" type="text/css" media="screen">

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

<form id="contact-form" action="#contact" method="post">		
    <fieldset id="contact-form">
        <dl class="col-md-4 col-sm-12 col-xs-4">
            <dd><input id="contactname" name="contactname" class="required col-sm-12 col-xs-12" title="That ain't no name" type="text" placeholder="Your name"></dd>
        </dl>
        
        <dl class="col-md-4 col-sm-12 col-xs-4">
            <dd><input id="email" name="email" class="required email col-sm-12 col-xs-12" title="oops! we need an email" type="email" placeholder="Email address" /></dd>
        </dl>
        
        <dl class="col-md-4 col-sm-12 col-xs-4">
            <dd><input id="number" name="number" class="number col-sm-12 col-xs-12" type="text" placeholder="Phone number" /></dd>
        </dl>
        
        <dl class="col-md-12 col-sm-12 col-xs-12">
            <dd><input id="subject" name="subject" class="required col-sm-12 col-xs-12" title="You forgot the subject" placeholder="Subject" /></dd>
        </dl>
        
        <dl class="col-md-12 col-sm-12 col-xs-12">
            <dd><textarea id="message" name="message" class="required col-sm-12 col-xs-12" title="forgetting something?" rows="10" cols="12" placeholder="Message"></textarea></dd>
        </dl>
        
        <p class="col-md-12" style="overflow:hidden;">
            <button class="btn-flat btn btn-1e" value="Submit" type="submit" name="submit">
                <i class="fa fa-check"></i> Send Message 
            </button>
        </p>
    </fieldset>
</form> 

<?php else: ?>

<div class="contact-form-box"> 
	<h5>Your message has been sent!</h5>
</div>

<script type="text/javascript">
setTimeout('ourRedirect()', 5000)
function ourRedirect(){
	location.href='index.php'
}
</script>
</div> 

<?php endif; ?>

        
</body>
</html>
