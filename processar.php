<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Substitua o endereço de e-mail abaixo pelo seu próprio endereço de e-mail
    $to = "seu_email@exemplo.com";
    $subject = "Nova mensagem do site de Inserção de Mulheres na TI";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    header("Location: agradecimento.html"); // Redirecionar para uma página de agradecimento
}
?>
