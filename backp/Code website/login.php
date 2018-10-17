<?php


require 'database.php';

session_start();
try {
    function checker_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usernameErr = $passwordErr = "";
    $username = $password = "";



    if (!empty($_POST['LoggedIn']) && !empty($_POST['username'])) {

    } else if (!empty($_POST['username']) && !empty($_POST['password'])) {
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = (checker_input($_POST["username"]));
        }
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = md5(checker_input($_POST["password"]));
        }


        $stmt = $conn->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
//        $stmt->execute();

        if ($stmt->rowCount() >= 1) {
            $email = $userRow['email'];

            $_SESSION['username'] = $username;
            //$_SESSION['email'] = $email;
            // $_SESSION['mobile'] = $mobile;
            $_SESSION['LoggedIn'] = 1;

//            header("Location: /");

            echo "<h1>Success</h1>";

       } else {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your account could not be found.</p>";
        }

    }
} catch (Exception $e) {
    echo $e;
}






