<?php
$to = 'info@smartpass.one';
$subject = $_POST["naam"];
$subject = $subject . ' | Wachtlijst aanvraag';
$school = $_POST["school"];
$message = 'School: ' . $school . "\r\n\r\n" . $_POST["bericht"];
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
    echo "<script>
alert('Gelieve al uw gegevens in te vullen.');
window.location.href='https://smartpass.one/wachtlijst.html';
</script>";
}
?>