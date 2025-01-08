<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['name'];
    $email = $_POST['email'];
    $mesaj = $_POST['message'];

    $to = "mariuspintea08@gmail.com";
    $subject = "Mesaj de pe site-ul tau";
    $message = "Nume: " . $nume . "\n" .
               "Email: " . $email . "\n" .
               "Mesaj: " . $mesaj;

    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mesajul a fost trimis cu succes!";
    } else {
        echo "Eroare la trimiterea mesajului.";
    }
}
?>
