<?php
  include BASE_PATH . '/config/database.php';

  $result = mysqli_query($db, "SELECT * FROM mackbook_banner LIMIT 1");
  $data = mysqli_fetch_assoc($result);
?>

<section class="container mx-auto">
  <div class="bg-[#ffe7d6] grid grid-cols-1 md:grid-cols-2 items-center">

    <div class="p-6 md:p-8 flex flex-col justify-center gap-6">
      <span class="inline-block font-bold text-sm md:text-base text-white bg-blue-500 px-3 py-1 w-fit">
        <?= $data['badge_text'] ?>
      </span>

      <h1 class="font-bold text-2xl md:text-3xl">
        <?= $data['title'] ?>
      </h1>

      <p class="font-semibold text-base md:text-xl">
        <?= $data['subtitle'] ?>
      </p>

      <a href="<?= $data['button_link'] ?>"
        class="inline-block w-fit bg-orange-500 text-white px-5 py-2 text-sm font-semibold">
        <?= $data['button_text'] ?>
      </a>
    </div>

    <div class="relative flex justify-center p-6 md:p-0">
      <img src="<?= $data['image'] ?>" class="max-w-xs md:max-w-full" alt="">

      <span
        class="absolute top-6 right-6 md:bottom-[65%] md:right-auto md:left-[60%]
        flex items-center justify-center bg-[#ffcead] text-lg md:text-2xl
        w-20 h-20 md:w-[20%] md:h-[30%]
        font-bold rounded-full border-4 md:border-8 border-white">
        <?= $data['price'] ?>
      </span>
    </div>

  </div>
</section>
