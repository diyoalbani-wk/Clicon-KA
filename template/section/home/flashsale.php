<?php
include BASE_PATH . '/config/database.php';

$sections = [];

$sectionQuery = $db->query("SELECT * FROM product_sections ORDER BY id ASC");

while ($section = $sectionQuery->fetch_assoc()) {

  $items = [];
  $itemQuery = $db->query(
    "SELECT * FROM product_section_items WHERE section_id = " . $section['id']
  );

  while ($item = $itemQuery->fetch_assoc()) {
    $items[] = $item;
  }

  $sections[] = [
    'title' => $section['section_title'],
    'items' => $items
  ];
}
?>

<section class="container mx-auto py-16 mt-4">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <?php foreach ($sections as $section): ?>
      <div>
        <h3 class="font-semibold mb-4">
          <?= $section['title'] ?>
        </h3>

        <div class="space-y-4">
          <?php foreach ($section['items'] as $item): ?>
            <div class="border rounded-lg p-3 flex gap-3">
              <img src="<?= $item['image'] ?>" class="w-14" alt="">
              <div>
                <p class="text-sm leading-snug">
                  <?= $item['title'] ?>
                </p>
                <p class="text-blue-600 font-semibold">
                  <?= $item['price'] ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>