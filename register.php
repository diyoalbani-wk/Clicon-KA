<?php
    session_start();
    include 'service/database.php';

    $register_message = "";

    if (isset($_SESSION["is_login"])) {
        header("Location: index.php");
        exit; 
    }

    if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $email    = $_POST["email"];
        $password = $_POST["password"];
        $confirm  = $_POST["confirm_password"];

        if ($password !== $confirm) {
            $register_message = "Password tidak sama";
        } else {
            $check = $db->prepare("SELECT id FROM users WHERE email = ?");
            $check->bind_param("s", $email);
            $check->execute();
            $check->store_result();

            if ($check->num_rows > 0) {
                $register_message = "Email sudah digunakan";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = $db->prepare($sql);
                $stmt->bind_param("sss", $username, $email, $hashedPassword);

                if ($stmt->execute()) {
                    $register_message = "Registrasi berhasil, silakan login";
                } else {
                    $register_message = "Registrasi gagal";
                }
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<?php 
$title="Register";
include __DIR__ . '/asset/src/components/head.php'?>
<body>

<?php include __DIR__ . '/asset/src/components/header.php' ?>

<div class="flex items-center justify-center font-bold text-8xl text-red-400">
    <?= $register_message ?></div>
<!-- START CONTENT -->
 <div class="flex justify-center py-16">
    <?php include __DIR__ . '/template/section/register/content.php' ?>
 </div>
<!-- CONTENT FOOTER -->

<?php include __DIR__ . '/asset/src/components/footer.php' ?>

</body>
</html>
