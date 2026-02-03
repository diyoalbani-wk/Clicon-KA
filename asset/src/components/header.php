<header> 
    <nav class="bg-[#1e6ea1] py-2">
        <div class="hidden md:flex justify-between container mx-auto border-b border-gray-600 py-2">
            <div class="">
                <span class="text-gray-300 hidden md:inline">
                    Welcome to Clicon online eCommerce store.
                </span>
            </div>
            <div class="flex gap-6 items-center">
                <span class="text-white">Follow us:</span>
                    <div class="flex gap-4">
                        <img class="w-4 h-4" src="images/Twitter.png" alt="">
                        <img class="w-4 h-4" src="images/Facebook.png" alt="">
                        <img class="w-4 h-4" src="images/Pinterest.png" alt="">
                        <img class="w-4 h-4"  src="images/Reddit.png" alt="">
                        <img class="w-4 h-4" src="images/Youtube.png" alt="">
                        <img class="w-4 h-4" src="images/Instagram.png" alt="">
                        <div class="border-r border-gray-600 pl-6"></div>
                    </div>
                    <button class="text-white">
                        Eng 
                    </button>
                    <button class="text-white">
                        Usd
                    </button>
            </div>
        </div>

        <div class="container max-w-7xl mx-auto py-3 px-4 flex items-center gap-3">
            <a href="index.php">
                <div class="flex items-center gap-2 text-white font-bold text-base md:text-lg">
                    <div class="w-8 h-8 flex justify-center items-center rounded-full bg-white">
                        <div
                            class="w-5 h-5 border-2 border-[#1e6ea1]   rounded-full bg-white">
                        </div>
                    </div>
                    <span class="text-white font-semibold text-lg">CLICON</span>
                </div>
            </a>

            <div class="flex justify-center flex-1">
                <input
                    type="text"
                    placeholder="Search for anything..."
                    class="w-full md:w-[65%] px-4 py-2 rounded-l-md outline-none" />
                <button class="bg-white px-4 rounded-r-md">
                    <img src="asset/src/images/MagnifyingGlass.png" alt="">
                </button>
            </div>

            <label for="menu" class="md:hidden text-2xl cursor-pointer text-white">☰</label>

            <div class="lg:flex hidden lg:block items-center gap-5 text-white text-xl">
                <a href="wishlist.php">
                    <img src="asset/src/images/ShoppingCartSimple.png" alt="">
                </a>
                <img src="asset/src/images/Heart.png" alt="">
                <img src="asset/src/images/User.png" alt="">

               <form action="index.php" method="POST" >
                 <button type="submit" name="logout" class="mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                </button>
               </form>
            </div>
        </div>
    </nav>
</header>

<section class="hidden md:flex container py-2 flex justify-between mx-auto">
    <div class="flex items gap-4">
        <div class="bg-gray-100 font-semibold p-2">
            All Category
        </div>
         <a href="Track.php" class="flex items-center"> 
            <div class="text-gray-600 text-sm flex items-center hover:text-orange-500">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.25 21.75H18.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.5 9.75C19.5 16.5 12 21.75 12 21.75C12 21.75 4.5 16.5 4.5 9.75C4.5 7.76088 5.29018 5.85322 6.6967 4.4467C8.10322 3.04018 10.0109 2.25 12 2.25C13.9891 2.25 15.8968 3.04018 17.3033 4.4467C18.7098 5.85322 19.5 7.76088 19.5 9.75V9.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 12.75C13.6569 12.75 15 11.4069 15 9.75C15 8.09315 13.6569 6.75 12 6.75C10.3431 6.75 9 8.09315 9 9.75C9 11.4069 10.3431 12.75 12 12.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Track Order
            </div>
         </a>
        <div class="text-gray-600 text-sm flex items-center hover:text-orange-500">
            <a href="compare.php" class="flex items-center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.48126 9.34688H2.98126V4.84688" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17.8313 6.16874C17.0659 5.40226 16.1569 4.79418 15.1563 4.3793C14.1558 3.96442 13.0832 3.75087 12 3.75087C10.9168 3.75087 9.84427 3.96442 8.84369 4.3793C7.8431 4.79418 6.93413 5.40226 6.16876 6.16874L2.98126 9.34687" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16.5187 14.6531H21.0187V19.1531" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.16876 17.8313C6.93413 18.5977 7.8431 19.2058 8.84368 19.6207C9.84427 20.0356 10.9168 20.2491 12 20.2491C13.0832 20.2491 14.1558 20.0356 15.1563 19.6207C16.1569 19.2058 17.0659 18.5977 17.8313 17.8313L21.0188 14.6531" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Compare
            </a>    
        </div>
        <div class="text-gray-600 text-sm flex items-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.1406 12.75H18.1406C17.7428 12.75 17.3613 12.908 17.08 13.1893C16.7987 13.4707 16.6406 13.8522 16.6406 14.25V18C16.6406 18.3978 16.7987 18.7794 17.08 19.0607C17.3613 19.342 17.7428 19.5 18.1406 19.5H19.6406C20.0384 19.5 20.42 19.342 20.7013 19.0607C20.9826 18.7794 21.1406 18.3978 21.1406 18V12.75ZM21.1406 12.75C21.1407 11.5618 20.9054 10.3853 20.4484 9.28845C19.9915 8.1916 19.3218 7.1961 18.4781 6.35938C17.6344 5.52267 16.6334 4.8613 15.5328 4.41345C14.4322 3.96559 13.2538 3.74011 12.0656 3.75001C10.8782 3.74135 9.70083 3.96775 8.60132 4.41616C7.5018 4.86458 6.50189 5.52614 5.6592 6.36273C4.81651 7.19932 4.1477 8.1944 3.69131 9.29063C3.23492 10.3869 2.99997 11.5626 3 12.75V18C3 18.3978 3.15804 18.7794 3.43934 19.0607C3.72064 19.342 4.10218 19.5 4.5 19.5H6C6.39782 19.5 6.77936 19.342 7.06066 19.0607C7.34196 18.7794 7.5 18.3978 7.5 18V14.25C7.5 13.8522 7.34196 13.4707 7.06066 13.1893C6.77936 12.908 6.39782 12.75 6 12.75H3" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Customer Support
        </div>
        <div class="text-gray-600 text-sm flex items-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.25 11.25H12V16.5H12.75" stroke="#5F6C72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.8125 7.5C12.0196 7.5 12.1875 7.66789 12.1875 7.875C12.1875 8.08211 12.0196 8.25 11.8125 8.25C11.6054 8.25 11.4375 8.08211 11.4375 7.875C11.4375 7.66789 11.6054 7.5 11.8125 7.5Z" fill="#191C1F" stroke="#5F6C72" stroke-width="1.5"/>
            </svg>
            Need Help
        </div>
    </div>

    <div class="flex items-center">
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.4343 4.375C18.9185 4.77332 20.2718 5.55499 21.3584 6.64159C22.445 7.72818 23.2266 9.08147 23.625 10.5656" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5266 7.75468C17.4192 7.99175 18.2333 8.46057 18.8864 9.11364C19.5395 9.7667 20.0083 10.5808 20.2454 11.4734" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M10.1172 13.65C11.0176 15.5094 12.5211 17.0091 14.3828 17.9047C14.5201 17.9697 14.672 17.9979 14.8235 17.9864C14.975 17.9748 15.1209 17.9241 15.2469 17.8391L17.9812 16.0125C18.1021 15.9306 18.2417 15.8806 18.387 15.8672C18.5324 15.8538 18.6788 15.8775 18.8125 15.9359L23.9312 18.1344C24.1062 18.2072 24.2524 18.3355 24.3472 18.4995C24.4421 18.6636 24.4804 18.8542 24.4562 19.0422C24.294 20.3085 23.6759 21.4722 22.7177 22.3158C21.7594 23.1593 20.5266 23.6247 19.25 23.625C15.3049 23.625 11.5214 22.0578 8.73179 19.2682C5.94218 16.4786 4.375 12.6951 4.375 8.75001C4.37529 7.47338 4.84073 6.24059 5.68425 5.28233C6.52776 4.32407 7.69153 3.70599 8.95781 3.54376C9.14576 3.51961 9.33643 3.55792 9.50047 3.65279C9.66451 3.74765 9.79281 3.89381 9.86562 4.06876L12.0641 9.19844C12.1212 9.33007 12.1451 9.47374 12.1337 9.6168C12.1223 9.75985 12.0758 9.89789 11.9984 10.0188L10.1719 12.7969C10.0906 12.9225 10.0428 13.0669 10.0333 13.2163C10.0237 13.3657 10.0526 13.515 10.1172 13.65V13.65Z" stroke="#191C1F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <div>
            +1-202-555-0104
        </div>
    </div>
</section>

<div class="border-b"></div>
