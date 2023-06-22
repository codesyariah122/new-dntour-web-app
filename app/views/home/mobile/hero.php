
<section id="home" class="bg-center bg-no-repeat bg-cover bg-[url('<?=$data['hero_img']?>')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24">
        <a href="#rental" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800 mt-12">
            <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">Sewa Mobil </span>&nbsp;<i class="fa-solid fa-angle-down text-lg"></i>
        </a>
        <h2 class="mb-4 text-3xl lg:text-xl font-extrabold tracking-tight leading-none text-white leading-loose" style="line-height: 2.5rem;"><?=$data['title']?></h2>
        <h1 class="text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 leading-loose">
            <?=$data['desc_title']?>
        </h1>        
        <p class="mb-8 text-sm font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 leading-loose">
            <?=$data['desc']?>
        </p>
    </div>
</section>