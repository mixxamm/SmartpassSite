<?php
$to = 'info@smartpass.one';
$subject = $_POST["name"];
$message = $_POST["comments"];
$from = $_POST["email"];
if(!empty($from)){
    $headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "<script>
alert('Bericht verzonden');
window.location.href='https://smartpass.one/';
</script>";
}
else{
    header("Location: https://smartpass.one/");
die();
}


?>