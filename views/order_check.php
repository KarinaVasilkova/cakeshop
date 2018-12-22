<?php
$errors = '';
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
    $errors .= 'email@';
}
$location = 'Location: ./index.php?action=order';
if ($errors != '') {
    $location .= '&errors=' . $errors;
    header($location);
}
else
{
    require 'views/databaseconfig.php';
    $conn = new mysqli($host, $user, $pass, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset('utf8');

    $pip = $conn->real_escape_string($_POST['pip']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $cake = $conn->real_escape_string($_POST['cake']);
    $kg = $conn->real_escape_string($_POST['kg']);
    $wishes = $conn->real_escape_string($_POST['wishes']);

        $sql = 'INSERT INTO ' . $database . ' .orders(pip, email, address, phone, cake, kg, wishes) VALUES'
        . sprintf('("%s", "%s", "%s", "%s", "%s", "%s", "%s");',
        $pip, $email, $address, $phone, $cake, $kg, $wishes);

        $msg = "$pip\n$email\n$address\n$phone\n$cake\n$kg\n$wishes";
        $msg = wordwrap($msg,70);
        mail("ilitebc.ua@gmail.com","NEW ORDER",$msg);

    if (!$conn->query($sql)) {
        die("Error: " . $sql . "<br>" . $conn->error);
    }


    header('Location: ./index.php?action=order_success');
}
?>
