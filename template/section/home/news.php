<?php
include BASE_PATH . '/config/database.php';

$news = [];
$query = mysqli_query($db, "SELECT * FROM latest_news ORDER BY id ASC");

while ($row = mysqli_fetch_assoc($query)) {
  $news[] = $row;
}
?>

<section class="bg-gray-100 py-12 md:py-20">
  <div class="container mx-auto">

    <h1 class="font-bold text-2xl md:text-4xl text-center py-6">
      Latest News
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php foreach ($news as $item): ?>
        <div class="bg-white p-4 space-y-3">
          <img src="<?= $item['image'] ?>" class="w-full" alt="">

          <div class="hidden md:flex gap-4 mt-2 text-sm text-gray-600">
            <div class="flex items-center gap-2">
              <?= $item['author'] ?>
            </div>
            <div class="flex items-center gap-2">
              <?= $item['publish_date'] ?>
            </div>
            <div class="flex items-center gap-2">
              <?= $item['comments'] ?>
            </div>
          </div>

          <div class="font-bold text-base md:text-lg">
            <?= $item['title'] ?>
          </div>

          <div class="text-gray-400 text-sm md:text-base">
            <?= $item['description'] ?>
          </div>

          <button class="w-full md:w-auto border border-orange-200 text-sm font-semibold px-4 py-2 text-orange-500 mt-2">
            READ MORE →
          </button>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
