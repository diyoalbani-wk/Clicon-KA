<?php
    session_start();
    include 'service/database.php';

    if (isset($_SESSION["is_login"])) {
        header("Location: index.php");
        exit;
    }

    if (isset($_POST["login"])) {

        $email    = $_POST["email"]; 
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION["is_login"] = true;
            $_SESSION["user_id"]  = $user["id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["email"]    = $user["email"];

            header("Location: index.php");
            exit;
        } else {
            echo "Email atau password salah";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php 
    $title="Login";
    include __DIR__ . '/asset/src/components/head.php'?>
    <body>

        <?php include __DIR__ . '/asset/src/components/header.php' ?>

        <!-- START CONTENT -->
        <div class="flex justify-center py-16">
            <?php include __DIR__ . '/template/section/login/content.php' ?>
        </div>
        <!-- END CONTENT -->

        <?php  include __DIR__ . '/asset/src/components/footer.php' ?>

    </body>
</html>
