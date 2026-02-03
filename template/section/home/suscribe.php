<?php
  include BASE_PATH . '/config/database.php';

  $newsletter = [];
  $q1 = $db->query("SELECT * FROM newsletter_section LIMIT 1");
  while ($row = $q1->fetch_assoc()) {
    $newsletter = $row;
  }

  $logos = [];
  $q2 = $db->query("SELECT * FROM brand_logos ORDER BY id ASC");
  while ($row = $q2->fetch_assoc()) {
    $logos[] = $row;
  }
?>

<section class="bg-[#1f6a9a] py-12 md:py-16">
  <div class="max-w-4xl mx-auto px-4 text-center text-white">

    <h2 class="text-xl md:text-3xl font-semibold mb-2">
      <?= $newsletter['title'] ?>
    </h2>

    <p class="text-sm md:text-base text-white/80 mb-6">
      <?= $newsletter['description'] ?>
    </p>

    <form class="flex flex-col sm:flex-row gap-3 justify-center mb-10">
      <input
        type="email"
        placeholder="Email address"
        class="w-full sm:w-80 px-4 py-3 rounded-md text-gray-800 outline-none"
      />
      <button
        type="submit"
        class="bg-orange-500 hover:bg-orange-600 px-6 py-3 rounded-md font-semibold"
      >
        <?= $newsletter['button_text'] ?>
      </button>
    </form>

    <div class="flex flex-wrap justify-center gap-6 opacity-70">
      <?php foreach ($logos as $logo): ?>
        <?= $logo['svg_code'] ?>
      <?php endforeach; ?>
    </div>

  </div>
</section>