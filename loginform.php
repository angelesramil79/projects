<?php
require "LoginAttempt.php";

if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $dsn = "mysql:host=localhost;dbname=test";
    $pdo = new PDO($dsn, "root", "");

    try {
        $attempt = new LoginAttempt($_POST["username"], $_POST["password"], $pdo);
        $attempt->whenReady(function($success) {
            echo $success ? "Valid" : "Invalid";
        });
    }
    catch (Exception $e) {
        if ($e->getCode() == 503) {
            header("HTTP/1.1 503 Service Unavailable");
            exit;
        }
        else if ($e->getCode() == 403) {
            header("HTTP/1.1 403 Forbidden");
            exit;
        }
        else {
            echo "Error: " . $e->getMessage();
        }

        // Note here that it may be advisable to show the
        // same response for error messages that you show
        // for invalid requests. That way it'll be less
        // obvious to attackers that their requests are
        // being rejected rather than processed and
        // invalidated.
    }
}
else {
    echo "Error: Missing user input.";
}
?>
<form name="form1" action="loginform.php" method="post">
    <h2>Form 1</h2>
    <input type="text" name="username" value="Name">
    <input type="password" name="password" >
    <input type="submit" value="Send form">
</form>
