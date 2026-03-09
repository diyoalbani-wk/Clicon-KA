<?php
  include BASE_PATH . '/config/database.php';

  $result = $db->query("SELECT * FROM intro ORDER BY id ASC");

  $introData = [];
  while ($row = $result->fetch_assoc()) {
      $introData[] = $row;
  }
?>

<section class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">
  <?php foreach ($introData as $item): ?>
    <div class="<?= ($item['bg_color'] == 'light') ? 'bg-gray-100' : 'bg-black text-white' ?> grid grid-cols-1 md:grid-cols-2 p-6">
      
      <div class="<?= ($item['bg_color'] == 'light') ? 'space-y-6' : 'text-white p-6 space-y-6' ?>">
        <span class="font-bold text-white bg-blue-500 px-2 py-1 rounded text-sm rounded">
          <?= $item['badge'] ?>
        </span>

        <div class="font-bold text-2xl">
          <h1><?= $item['title_line1'] ?></h1>
          <h1><?= $item['title_line2'] ?></h1>
        </div>

        <p class="<?= ($item['bg_color'] == 'light') ? 'text-gray-500' : 'text-gray-400' ?> text-sm">
          <?= $item['description'] ?>
        </p>
      </div>

      <div class="<?= ($item['bg_color'] == 'light') ? 'flex items-center justify-center mt-6 md:mt-0' : 'relative' ?>">
        <img src="<?= $item['image'] ?>" class="<?= ($item['bg_color'] == 'light') ? 'max-h-48' : 'mt-6' ?>" alt="">

        <?php if (!empty($item['price'])): ?>
          <div class="hidden md:block absolute left-[65%] bottom-[65%] bg-blue-500 text-white text-2xl w-[25%] h-[25%] font-bold p-2 rounded-full">
            <p class="flex items-center justify-center mt-3">
              <?= $item['price'] ?>
            </p>
          </div>
        <?php endif; ?>
      </div>

    </div>
  <?php endforeach; ?>
</section>
