<?php
  include BASE_PATH . '/config/database.php';

?>

<section class="bg-[#1f6a9a] py-12 md:py-16">
  <div class="max-w-4xl mx-auto px-4 text-center text-white">

    <h2 class="text-xl md:text-3xl font-semibold mb-2">
      Subscribe to our newsletter
    </h2>

    <p class="text-sm md:text-base text-white/80 mb-6">
      Praesent fringilla erat ac tincidunt egestas. Done..
    </p>

    <form class="flex flex-col sm:flex-row gap-3 justify-center mb-10">
      <input type="email" placeholder="Email address" class="w-full sm:w-80 px-4 py-3 rounded-md text-gray-800 outline-none"/>
      <button
        type="submit"
        class="bg-orange-500 hover:bg-orange-600 px-6 py-3 rounded-md font-semibold">
          SUBSCRIBE →
      </button>
    </form>

  </div>
</section>