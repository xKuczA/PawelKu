<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = htmlspecialchars($_POST["imie"]);
    $email = htmlspecialchars($_POST["email"]);
    $wiadomosc = htmlspecialchars($_POST["wiadomosc"]);

    $adres_email = "kucza324@gmail.com"; // Adres, na który ma być wysłana wiadomość

    $temat = "Nowa wiadomość od $imie";
    $tresc = "Imię: $imie\n";
    $tresc .= "Email: $email\n";
    $tresc .= "Wiadomość:\n$wiadomosc";

    // Jeśli masz funkcję mail w środowisku serwera, użyj jej do wysłania wiadomości
    // Jeśli nie, możesz dostosować kod do swoich potrzeb lub użyć innych narzędzi do obsługi formularza

    if (mail($adres_email, $temat, $tresc)) {
        echo "Dziękujemy! Twoja wiadomość została wysłana.";
    } else {
        echo "Wystąpił błąd podczas wysyłania wiadomości.";
    }
} else {
    // W przypadku bezpośredniego dostępu do tej strony, przekieruj użytkownika gdzie indziej lub obsłuż sytuację inaczej
    header("Location: index.html");
    exit();
}
?>
