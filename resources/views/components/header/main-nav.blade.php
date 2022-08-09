<div id="main-menu" class="transition-all duration-500 h-0 hidden lg:block fixed w-full lg:sticky top-[4.6rem] md:top-12 lg:top-0 mt-2  bg-[#4d4d4d] lg:bg-white z-20 border-y lg:h-16 xl:h-24 lg:text-sm xl:text-base">
    <div class="flex items-center justify-between h-full overflow-hidden lg:px-16 max-w-screen-xl mx-auto">
        <img src="/assets/niagahoster-logo.png" alt="" class="hidden lg:block lg:w-44 xl:w-[255px]">
        
        <div class="flex flex-col lg:flex-row w-full lg:w-auto divide-y lg:divide-y-0 divide-[#5d5d5d] text-[#999] lg:text-inherit lg:items-center justify-end lg:gap-2 xl:gap-4">
            <a class="px-6 lg:px-0 py-1" href="#">Hosting</a>
            <a class="px-6 lg:px-0 py-1" href="#">Domain</a>
            <a class="px-6 lg:px-0 py-1" href="#">Server</a>
            <a class="px-6 lg:px-0 py-1" href="#">Website</a>
            <a class="px-6 lg:px-0 py-1" href="#">Afiliasi</a>
            <a class="px-6 lg:px-0 py-1" href="#">Promo</a>
            <a class="px-6 lg:px-0 py-1" href="#">Pembayaran</a>
            <a class="px-6 lg:px-0 py-1" href="#">Review</a>
            <a class="px-6 lg:px-0 py-1" href="#">Kontak</a>
            <a class="px-6 lg:px-0 py-1" href="#">Blog</a>
        </div>

    </div>
</div>

<script>
    const mainMenu = document.getElementById('main-menu')

    function toggleMenu() {
        if (mainMenu.classList.contains('h-0')) {
            mainMenu.classList.remove('hidden')
            setTimeout(() => {
                mainMenu.classList.remove('h-0')
                mainMenu.classList.add('h-[329px]')
                // mainMenu.classList.add('duration-1000')
                
            });
        } else {
            mainMenu.classList.remove('h-[329px]')
            mainMenu.classList.add('h-0')
            setTimeout(() => {
                mainMenu.classList.add('hidden')                
            },500);
        }
    }

    document.getElementById('menu-btn').addEventListener('click', toggleMenu)
</script>