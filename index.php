<?php
    session_start();
    
    if (!isset($_SESSION["is_login"]) || $_SESSION["is_login"] !== true) {
    header("Location: login.php");
    exit;
    }
    
    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php 
$title="Home Page";
include __DIR__ . '/asset/src/components/head.php'?>

<body>

<div class="hidden md:block bg-[#111827] text-white text-sm">
    <div class="max-w-7xl mx-auto py-2 flex justify-between items-center">

        <div class="flex items-center gap-2">
            <img src="asset/src/images/Black.png" class="w-8 h-6" alt="">
            <span>Friday</span>
        </div>

        <div class="flex items-center">
            <div class="text-white">
                Up to
            </div>
            <div class="text-yellow-400 font-bold text-2xl">
                59%
            </div>
            <div class="text-white font-bold">
                OFF
            </div>
        </div>  
        <button class="hidden md:inline bg-yellow-400 text-black px-3 py-1 rounded font-semibold">
        SHOP NOW →
        </button>

    </div>
</div>

<?php include __DIR__ . '/asset/src/components/header.php'?>

<!-- START CONTENT -->
<?php

    define('BASE_PATH', __DIR__);

    include BASE_PATH . '/template/section/home/hero.php';
    include BASE_PATH . '/template/section/home/beast.php';
    include BASE_PATH . '/template/section/home/shopcategorys.php';
    include BASE_PATH . '/template/section/home/featured.php';
    include BASE_PATH . '/template/section/home/intro.php';
    include BASE_PATH . '/template/section/home/accessories.php';
    include BASE_PATH . '/template/section/home/mackbook.php';
    include BASE_PATH . '/template/section/home/flashsale.php';
    include BASE_PATH . '/template/section/home/news.php';
    include BASE_PATH . '/template/section/home/suscribe.php';

?>
<!-- END CONTENT -->

<?php include BASE_PATH . '/asset/src/components/footer.php'?>

</body>
</html>
