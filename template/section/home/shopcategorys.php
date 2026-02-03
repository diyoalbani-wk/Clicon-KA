<?php
include __DIR__ . '/../../../config/database.php';

$categories = $db->query("SELECT * FROM categories ORDER BY id ASC");
?>

<section class="container mx-auto">
    <div class="relative">

        <h1 class="text-xl md:text-2xl font-bold mb-6 text-gray-800 text-center">
            Shop With Categorys
        </h1>

        <button
          class="hidden md:flex absolute left-0 top-[60%] -translate-y-1/2 -translate-x-1/2
          bg-orange-500 text-white w-10 h-10 rounded-full items-center justify-center shadow z-10">
          ‹
        </button>

        <button
          class="hidden md:flex absolute right-0 top-[60%] -translate-y-1/2 translate-x-1/2
          bg-orange-500 text-white w-10 h-10 rounded-full items-center justify-center shadow z-10">
          ›
        </button>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
            <?php while ($category = $categories->fetch_assoc()): ?>
                <div class="bg-white border rounded-md p-4 text-center hover:shadow transition">
                    <img src="<?= $category['image']; ?>" class="mx-auto mb-3">
                    <p class="text-sm font-semibold text-gray-700">
                        <?= $category['name']; ?>
                    </p>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>
