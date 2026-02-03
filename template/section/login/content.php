<section class="w-full max-w-md bg-white rounded-lg shadow-xl p-6">
    <div class="grid grid-cols-2 items-center">
        <h2   aria-current="page" 
            class="text-xl text-gray-500 font-semibold text-center cursor-pointer   hover:border-b-4 hover:border-orange-400   aria-[current=page]:border-b-4 aria-[current=page]:border-orange-400 aria-[current=page]:text-black">
            Sign In
        </h2>

        <a href="register.php" class="text-xl text-gray-500 font-semibold border-b-2 border-gray-200 text-center cursor-pointer  hover:border-b-4 hover:border-orange-400 aria-[current=page]:border-b-4 aria-[current=page]:border-orange-400 aria-[current=page]:text-black" >
            Sign Up
        </a>
    </div>

  <form action="login.php" method="POST" class="space-y-2 mt-6">

    <div>
      <label class="text-sm font-medium">Email Address</label>
      <input name="email" type="email"
        class="w-full mt-1 px-3 py-2 border rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none">
    </div>

    <div class=" text-right text-sm text-orange-500 cursor-pointer">
      Forgot Password?
    </div>

    <div>
      <label class="text-sm font-medium">Password</label>
      <input name="password" type="password"
        class="w-full mt-1 px-3 py-2 border rounded-md focus:ring-2 focus:ring-orange-400 focus:outline-none">
    </div>

    <button name="login"
      class="w-full bg-orange-500 text-white py-2 rounded-md font-semibold hover:bg-orange-600 transition">
      SIGN IN →
    </button>

    <div class="flex items-center my-4">
      <div class="flex-grow h-px bg-gray-300"></div>
      <span class="px-3 text-sm text-gray-400">or</span>
      <div class="flex-grow h-px bg-gray-300"></div>
    </div>

    <button class="w-full border py-2 rounded-md">Login with Google</button>
    <button class="w-full border py-2 rounded-md">Login with Apple</button>

  </form>
</section>