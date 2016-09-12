<?php
    session_start();

    if (isset($_POST['submit'])) {
        $to = "Eugeneatherton@corrconsultgroup.com, Andjelajurisic@corrconsultgroup.com, applications4422@hotmail.co.uk"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $subject = "Correctional Consulting Services Group Contact Request";
        $message = "Full Name:  " . $full_name . "\n\n" . "Email: " . $email . "\n\n" . "Phone: " . $telephone ;


        mail($to, $subject, $message);
        header('Location: contact.php');
        echo "$full_name. thank you for contacting us. Someone will contact you shortly.";
    }
?>