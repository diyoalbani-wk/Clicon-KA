<?php
include __DIR__ . '/../../../config/database.php';

$badgeColors = [
  'HOT' => 'bg-red-500 text-white',
  'SOLD OUT' => 'bg-gray-400 text-white',
  '19% OFF' => 'bg-yellow-400 text-black',
  '32% OFF' => 'bg-yellow-400 text-black',
  'SALE' => 'bg-green-500 text-white',
  'BEST DEAL' => 'bg-blue-400 text-white',
];

$featuredSql = "SELECT * FROM featured_best_deal ORDER BY id DESC LIMIT 1";
$featured = $db->query($featuredSql)->fetch_assoc();

$productsSql = "SELECT * FROM best_deal_products ORDER BY id DESC LIMIT 8";
$products = $db->query($productsSql);
?>

<section class="bg-white py-14">
  <div class="container mx-auto">

    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
      <div class="flex flex-col sm:flex-row sm:items-center gap-3">
        <h2 class="text-xl font-bold text-gray-800">Best Deals</h2>
        <div class="bg-yellow-200 text-sm px-4 py-1 rounded font-semibold">
          Deals ends in <span class="font-bold"><?= $featured['subtitle'] ?></span>
        </div>
      </div>
      <a href="#" class="text-sm text-blue-500 hover:underline ">
        Browse All Product →
      </a>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-5">

      <div class="col-span-2 mb-4 md:mb-0 border p-6 relative">

        <div class="absolute top-4 left-4 space-y-2">
          <?php if (!empty($featured['badge1'])): ?>
            <span class="block <?= $badgeColors[$featured['badge1']] ?? 'bg-yellow-400 text-black' ?> text-xs px-2 py-1 rounded font-semibold">
              <?= $featured['badge1'] ?>
            </span>
          <?php endif; ?>

          <?php if (!empty($featured['badge2'])): ?>
            <span class="block <?= $badgeColors[$featured['badge2']] ?? 'bg-red-500 text-white' ?> text-xs px-2 py-1 rounded">
              <?= $featured['badge2'] ?>
            </span>
          <?php endif; ?>
        </div>

        <img src="<?= $featured['image'] ?>" class="mx-auto mb-6" />

        <p class="text-yellow-400 text-sm mb-2">
          <?= $featured['rating'] ?> <span class="text-gray-400"><?= $featured['reviews'] ?></span>
        </p>

        <h3 class="font-semibold text-gray-800 mb-2">
          <?= $featured['title'] ?>
        </h3>

        <div class="flex items-center gap-3 mb-3">
          <span class="line-through text-gray-400"><?= $featured['price_old'] ?></span>
          <span class="text-blue-600 text-xl font-bold"><?= $featured['price_new'] ?></span>
        </div>

        <p class="text-sm text-gray-500 mb-6">
          <?= $featured['description'] ?>
        </p>

        <div class="flex gap-3">
          <button class="border px-4 py-2 rounded bg-[#ffe7d6]">
            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.125 17.25C10.125 17.25 0.75 12 0.75 5.62501C0.75 4.49803 1.14046 3.40585 1.85496 2.53431C2.56945 1.66277 3.56384 1.0657 4.66893 0.844677C5.77403 0.623658 6.92157 0.792346 7.91631 1.32204C8.91105 1.85174 9.69155 2.70972 10.125 3.75001C10.5585 2.70972 11.3389 1.85174 12.3337 1.32204C13.3284 0.792346 14.476 0.623658 15.5811 0.844677C16.6862 1.0657 17.6805 1.66277 18.395 2.53431C19.1095 3.40585 19.5 4.49803 19.5 5.62501C19.5 12 10.125 17.25 10.125 17.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>

          <?php
              $text = 'ADD TO CHART';
              $href = '/shop';
              include BASE_PATH . '/asset/src/components/button/add.php';
          ?>

          <button class="border px-4 py-2 rounded bg-[#ffe7d6]">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
      </div>

      <div class="col-span-2 gap-4 md:gap-0 grid grid-cols-2 md:grid-cols-4 lg:col-span-3">
        <?php while($product = $products->fetch_assoc()): ?>
          <div class="border p-4 relative group">
            <?php if (!empty($product['label'])): ?>
              <span class="absolute z-20 top-3 left-3 <?= $badgeColors[$product['label']] ?? 'bg-yellow-400 text-black' ?> text-xs px-2 py-1 rounded">
                <?= $product['label'] ?>
              </span>
            <?php endif; ?>

            <div class="relative overflow-hidden">
              <img src="<?= $product['image'] ?>" class="mx-auto mb-4 z-10" />
              <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300"></div>
              <div class="absolute inset-0 flex items-center justify-center gap-3 opacity-0 group-hover:opacity-100 transition duration-300 z-10">
                  <span class="bg-orange-500 w-6 h-6 flex items-center justify-center rounded-full cursor-pointer">
                      <img src="asset/src/images/Heart.png" class="w-4" alt="Wishlist">
                  </span>
                  <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5Z" fill="#191C1F" stroke="#191C1F" stroke-width="1.5"/>
                      <path d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z" fill="#191C1F"/>
                      <path d="M3.96562 6.75H20.7844L18.3094 15.4125C18.2211 15.7269 18.032 16.0036 17.7711 16.2C17.5103 16.3965 17.1922 16.5019 16.8656 16.5H7.88437C7.55783 16.5019 7.2397 16.3965 6.97886 16.2C6.71803 16.0036 6.52893 15.7269 6.44062 15.4125L3.04688 3.54375C3.00203 3.38696 2.9073 3.24905 2.77704 3.15093C2.64677 3.05282 2.48808 2.99983 2.325 3H0.75" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </span>
                  
                  <span class="bg-white w-6 h-6 flex items-center justify-center rounded-full">
                  <a href="product_detail.php">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 4.25C4.5 4.25 1.5 12 1.5 12C1.5 12 4.5 19.75 12 19.75C19.5 19.75 22.5 12 22.5 12C22.5 12 19.5 4.25 12 4.25Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                  </span>
              </div>
            </div>

            <h4 class="text-sm font-semibold text-gray-700">
              <?= $product['title'] ?>
            </h4>

            <p class="text-blue-600 font-bold mt-2">
              <?= $product['price'] ?>
            </p>
          </div>
        <?php endwhile; ?>
      </div>

    </div>
  </div>
</section>
