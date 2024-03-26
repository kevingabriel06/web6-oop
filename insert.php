<?php
include 'database.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $date = date("Y-m-d H:i:s");
    $a = new database();
    $a->insert('user', [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
        'created' => $date,
        'updated' => $date
    ]);
    if ($a) {
        header('location:index.php');
        exit; // Added exit after header to stop further execution
    }
}
?>
