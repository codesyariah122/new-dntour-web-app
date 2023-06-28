
<section id="contact" class="container mx-auto px-4 py-24">
  <div class="flex justify-center mb-16">
    <div>
      <h3 class="text-4xl font-bold text-gray-900 dark:text-white">Our Contact</h3>
    </div>
  </div>
  <div class="w-full bg-white border-none rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
      <li class="mr-2">
        <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Contact</button>
      </li>
      <li class="mr-2">
        <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">About</button>
      </li>
      <li class="mr-2">
        <button id="statistics-tab" data-tabs-target="#statistics" type="button" role="tab" aria-controls="statistics" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Facts</button>
      </li>
    </ul>

    <div id="defaultTabContent">

      <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
        <div class="w-full text-gray-900 bg-white rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white mb-8">
          <div class="cursor-pointer relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white mb-12 dark:text-white">
            <div class="grid grid-cols-1">
              <div class="col-span-12">
                <h4 class="text-md font-normal"><i class="fa-solid fa-map-location-dot"></i>&nbsp;Address :</h4>
              </div>
              <div class="col-span-6 mt-4">
                <h6 class="font-bold text-lg">
                  Jl. Hercules II No.5, Melong, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40534 
                </h6>
              </div>
            </div>
          </div>

          <div class="cursor-pointer relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white mb-8">
            <div class="relative w-full h-96">
              <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7144437566362!2d107.55215701391396!3d-6.924698069701048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5c4f3806df3%3A0xe998826b2e3d9c2c!2sD%26N%20Tour%20RentCar!5e0!3m2!1sid!2sid!4v1668538401771!5m2!1sid!2sid"
              class="absolute top-0 left-0 w-full h-full"
              style="border: 0"
              allowfullscreen="true"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>

          <div class="cursor-pointer relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white mb-8 dark:text-white">
            <div class="grid grid-cols-1">
              <div class="col-span-12">
                <h4 class="text-md font-normal"><i class="fa-solid fa-mobile-screen-button"></i>&nbsp;Pesan melalui whatsapp :</h4>
              </div>
              <div class="col-span-6 mt-4">
                <a href="tel:6283165539138" class="font-bold text-lg">
                  +62 831 6553 9138
                </a>
              </div>
            </div>
          </div>

          <div class="cursor-pointer relative inline-flex items-center w-full px-4 py-2 text-sm font-medium rounded-b-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white dark:text-white">
            <div class="grid grid-cols-1">
              <div class="col-span-12">
                <h4 class="text-md font-normal"><i class="fa-solid fa-envelope-open-text"></i>&nbsp;Pesan melalui email :</h4>
              </div>
              <div class="col-span-6 mt-4">
                <a href="mailto:dntourtr@dntourtravel.com" class="font-bold text-lg">
                  dntourtr@dntourtravel.com
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hidden p-4 bg-black rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
        <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white"><?=$data['title']?></h2>
        <p class="mb-3 text-gray-500 dark:text-gray-400 dark:text-white"><?=$data['our_about']?></p>
      </div>

      <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
        <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
          <div class="flex flex-col">
            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
            <dd class="text-gray-500 dark:text-gray-400  dark:text-white">Kepuasan Pelanggan</dd>
          </div>
          <div class="flex flex-col">
            <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
            <dd class="text-gray-500 dark:text-gray-400 dark:text-white">Kenyamanan</dd>
          </div>
          <div class="flex flex-col">
            <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
            <dd class="text-gray-500 dark:text-gray-400 dark:text-white">Keramahan</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

</section>