<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];
        $secretKey = "6LfEZrIUAAAAAENsFIgdpcNzSFLgyjc1VnNAdrJ3";
        $responseKey = $_POST['g-recaptcha-response'];
        $userIP = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
        $response = file_get_contents($url);
        $response = json_decode($response);
        if ($response->success)
            echo "Verification success. Your name is: $username";
        else
            echo "Verification failed!";
    }
?>