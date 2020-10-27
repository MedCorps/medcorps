<?php
$to = 'andrew@medcorpsusa.com';

if($_POST['website'] != '' || $_POST["comments"] == ''){
    echo "<!-- SKIPPED -->";
}
else{

// subject
$subject = 'Patient Med forms';

// message
$message = '<html><head><title>Medcorps</title></head>
<body>
<p>Name: ' . $_POST["name"] . '</p>
<p>Email: ' . $_POST["email"] . '</p>
<p>Phone: ' . $_POST["phone"] . '</p>
<p>Question: ' . $_POST["comments"] . '</p>
</body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Medcorps <andrew@medcorpsusa.com>' . "\r\n";
$headers .= 'From: Medcorps <andrew@medcorpsusa.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

 // Subject of confirmation email.
$conf_subject = 'Med Forms';

// Who should the confirmation email be from?
$conf_sender = 'Med forms <andrew@medcorpsusa.com>';

$msg = $_POST['name'] . "\n\nThank you for filling out the patient medical forms ahead of time. A member of our staff will respond if we have additional questions.";

mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender );
}
?>

<?
	$page_title = 'Thank You for Contacting Medcorps';
?>

<?php include '_header.php'; ?>

	<div class="info_area"  style="margin: 20px auto; width:600px; padding:15px; background-color: #e8e8e8; height:100%;">
	<div class="row" id="content">
		<div><h1>Thank you for filling out the patient medical forms ahead of time. A member of our staff will respond if we have additional questions.  Click <a href="index.php">HERE</a> to return to home page</h1></div>
	</div>
	</div>

<?php include '_footer.php'; ?>
