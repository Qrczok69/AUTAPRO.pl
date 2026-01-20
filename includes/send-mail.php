<?php
// includes/send-mail.php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Oczyszczanie danych
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // 2. Walidacja
    if (empty($name) || empty($email) || empty($phone)) {
        header("Location: ../index.php?msg=error#kontakt");
        exit;
    }

    // 3. Treść maila
    $to = SITE_EMAIL;
    $subject = "AutaPro - Zapytanie od: $name";
    
    $body = "Nowe zapytanie ze strony AutaPro:\n\n";
    $body .= "Imię: $name\n";
    $body .= "Telefon: $phone\n";
    $body .= "Email: $email\n\n";
    $body .= "Wiadomość:\n$message\n";

    $headers = "From: no-reply@autapro.pl\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 4. Wysyłka
    if (mail($to, $subject, $body, $headers)) {
        header("Location: ../index.php?msg=success#kontakt");
    } else {
        header("Location: ../index.php?msg=error#kontakt");
    }
} else {
    header("Location: ../index.php");
}
?>
