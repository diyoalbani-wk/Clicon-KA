<?php
  include BASE_PATH . '/config/database.php';

  $sql = " SELECT s.id AS section_id, s.section_title,  i.id AS item_id, i.title AS item_title, i.price, i.image
    FROM product_sections s
    LEFT JOIN product_section_items i
    ON s.id = i.section_id
    ORDER BY s.id ASC, i.id ASC
  ";

  $result = $db->query($sql);

  $sections = array();

  while ($row = $result->fetch_assoc()) {
      $section_id = $row['section_id'];

      if (!isset($sections[$section_id])) {
          $sections[$section_id] = array(
              'title' => $row['section_title'],
              'items' => array()
          );
      }

      if ($row['item_id'] != null) {
          $sections[$section_id]['items'][] = array(
              'id' => $row['item_id'],
              'title' => $row['item_title'],
              'price' => $row['price'],
              'image' => $row['image']
          );
      }
  }

  // ubah keys menjadi numeric
  $sections = array_values($sections);
?>

<section class="container mx-auto py-16 mt-4">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <?php foreach ($sections as $section): ?>
      <div>
        <h3 class="font-semibold mb-4"><?= $section['title'] ?></h3>

        <?php if (!empty($section['items'])): ?>
          <div class="space-y-4">
            <?php foreach ($section['items'] as $item): ?>
              <div class="border rounded-lg p-3 flex gap-3">
                <img src="<?= $item['image'] ?>" class="w-14" alt="">
                <div>
                  <p class="text-sm leading-snug"><?= $item['title'] ?></p>
                  <p class="text-blue-600 font-semibold"><?= $item['price'] ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php else: ?>
          <p>Tidak ada item di section ini.</p>
        <?php endif; ?>

      </div>
    <?php endforeach; ?>

  </div>
</section>