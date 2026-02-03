<?php
$products = [
    [
        "image" => "asset/src/images/c1.png",
        "name"  => "Gamdias ARES M2 Gaming Keyboard, Mouse and Mouse Mat Combo",
        "price" => 899,
        "seller"=> "Clicon",
        "brand" => "TarTech",
        "model" => "ARES M2 and ZEUS E2",
        "stock" => true,
        "size"  => "6.71 inches, 110.5 cm",
        "weight"=> "650 g (7.41 oz)",
        "rating"=> 51746385,
        "cart"  => true,
    ],
    [
        "image" => "asset/src/images/c2.png",
        "name"  => "Apple iMac 24\" 4K Retina Display M1 2021",
        "price" => 1699,
        "seller"=> "Apple",
        "brand" => "Apple",
        "model" => "Apple iMac 24\" M1 Blue 2021",
        "stock" => true,
        "size"  => "6.7 inches, 109.8 cm",
        "weight"=> "240 g (8.47 oz)",
        "rating"=> 673971743,
        "cart"  => true,
    ],
    [
        "image" => "asset/src/images/c3.png",
        "name"  => "Samsung Galaxy S21 FE 5G 128GB",
        "price" => 699,
        "seller"=> "Clicon",
        "brand" => "Samsung",
        "model" => "S21 FE",
        "stock" => false,
        "size"  => "6.4 inches, 98.9 cm",
        "weight"=> "177 g (6.24 oz)",
        "rating"=> 96459761,
        "cart"  => false,
    ],
];
?>
<section class="container mx-auto py-10 md:py-20 px-4 md:px-0">
    <div class="overflow-x-auto">
        <div class="grid grid-cols-4 min-w-[900px] border">

            <div></div>
            <?php foreach ($products as $p): ?>
                <div class="border p-4 flex flex-col items-center gap-3 text-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="9" stroke="#929FA5" stroke-width="1.5"/>
                        <path d="M15 9L9 15M15 15L9 9" stroke="#929FA5" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>

                    <img src="<?= $p['image'] ?>" class="h-32 md:h-40 object-contain">
                    <p class="font-medium leading-snug"><?= $p['name'] ?></p>

                    <div class="flex gap-2">
                        <?php
                            $text  = 'ADD TO CART';
                            $href  = '/shop';
                            $bg    = $p['cart'] ? 'bg-orange-500' : 'bg-gray-400';
                            $hover = $p['cart'] ? 'hover:bg-orange-700' : 'hover:bg-gray-500';
                            include BASE_PATH . '/asset/src/components/button/add.php';
                        ?>
                        <button class="border p-2 <?= $p['cart'] ? 'border-orange-200' : 'border-gray-200 text-gray-400' ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.625 7.49803 3.01546 6.40585 3.72996 5.53431C4.44445 4.66277 5.43884 4.0657 6.54393 3.84468C7.64903 3.62366 8.79657 3.79235 9.79131 4.32204C10.7861 4.85174 11.5665 5.70972 12 6.75001C12.4335 5.70972 13.2139 4.85174 14.2087 4.32204C15.2034 3.79235 16.351 3.62366 17.4561 3.84468C18.5612 4.0657 19.5555 4.66277 20.27 5.53431C20.9845 6.40585 21.375 7.49803 21.375 8.62501C21.375 15 12 20.25 12 20.25Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="border bg-gray-100 p-2 text-gray-500">Customer Feedback:</div>
            <?php foreach ($products as $p): ?>
                <div class="border bg-gray-100 p-2 text-gray-400 flex gap-2">
                    ⭐⭐⭐⭐⭐ (<?= number_format($p['rating']) ?>)
                </div>
            <?php endforeach; ?>

            <div class="border p-2 text-gray-500">Price:</div>
            <?php foreach ($products as $p): ?>
                <div class="border p-2 text-blue-500 font-semibold text-xl">
                    $<?= number_format($p['price'], 2) ?>
                </div>
            <?php endforeach; ?>

            <div class="border bg-gray-100 p-2 text-gray-500">Sold by :</div>
            <?php foreach ($products as $p): ?>
                <div class="border bg-gray-100 p-2 text-gray-500"><?= $p['seller'] ?></div>
            <?php endforeach; ?>

            <div class="border p-2 text-gray-500">Brand :</div>
            <?php foreach ($products as $p): ?>
            <div class="border p-2 text-gray-500"><?= $p['brand'] ?></div>
            <?php endforeach; ?>

            <div class="border bg-gray-100 p-2 text-gray-500">Model :</div>
            <?php foreach ($products as $p): ?>
                <div class="border bg-gray-100 p-2 text-gray-500"><?= $p['model'] ?></div>
            <?php endforeach; ?>

            <div class="border p-2 text-gray-500">Stock Status :</div>
            <?php foreach ($products as $p): ?>
                <div class="border p-2 font-semibold <?= $p['stock'] ? 'text-green-500' : 'text-red-500' ?>">
                    <?= $p['stock'] ? 'IN STOCK' : 'OUT OF STOCK' ?>
                </div>
            <?php endforeach; ?>

            <div class="border bg-gray-100 p-2 text-gray-500">Size :</div>
            <?php foreach ($products as $p): ?>
                <div class="border bg-gray-100 p-2 text-gray-500"><?= $p['size'] ?></div>
            <?php endforeach; ?>

            <div class="border p-2 text-gray-500">Weight :</div>
            <?php foreach ($products as $p): ?>
                <div class="border p-2 text-gray-500"><?= $p['weight'] ?></div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
