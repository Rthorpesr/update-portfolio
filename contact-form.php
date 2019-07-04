<?
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	header('Content-Type: text/html; charset=utf-8');

	$headers = "Content-type: text/plain; charset = \"utf-8\"";

	$to = 'your@gmail.com';

	$subject = "Contact message";

	if (!empty($_POST["name"])) {
		$name = htmlspecialchars($_POST["name"]);
	}
	if (!empty($_POST["email"])) {
		$email = htmlspecialchars($_POST["email"]);
	}
	if (!empty($_POST["mess"])) {
		$mess = htmlspecialchars($_POST["mess"]);
	}
	$ip = $_SERVER["REMOTE_ADDR"];

	$message = '';
	$message .= 'Contact Form';
	if (!empty($name)) {
		$message .= "\nName - ".$name;
	}
	if (!empty($email)) {
		$message .= "\nE-mail - ".$email;
	}
	if (!empty($mess)) {
		$message .= "\nMessage - ".$mess;
	}

	mail($to, $subject, $message, $headers);

} else {
	header('Location: /');
	exit();
}
?>