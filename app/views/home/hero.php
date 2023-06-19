<section id="home" class="bg-center bg-no-repeat bg-cover bg-[url('<?=$data['hero_img']?>')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-12 lg:py-36">
        <a href="#rental" id="hero-cta" class="hero-cta inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
            <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">Sewa Mobil </span>&nbsp;<i class="fa-solid fa-angle-down text-lg"></i>
        </a>
        <h2 class="mb-4 text-6xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl"><?=$data['title']?></h2>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 leading-loose">
            <?=$data['desc']?>
        </p>
    </div>
</section>

<script type="text/javascript">
    $('#hero-cta').click(function(e) {
        e.preventDefault(); 
        let target = $(this).attr('href');
        let offset = $(target).offset().top;
        $('html, body').animate({
          scrollTop: offset
      }, 800);
    });
</script>