<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return __constructor
**/

namespace app\models;

use app\helpers\{Helpers};
use app\datasources\{PackagesData};
use app\config\Environment;

class WebApp {

	private $helpers, $datasources, $filterCategory, $check_mobile, $env;

	public function __construct()
	{
		$this->env = new Environment;
		$this->env->config();
	}

	public static function getPartials($page)
	{
		$helpers = new Helpers;
		$check_mobile = $helpers->isMobileDevice();
		if($page === 'home') {
			$google_ads = '';
			$google_tag = 'app/views/layout/partials/google_meta.php';
			$contents = [
				'loading' => 'app/views/home/loading.php',
				'hero' => !$check_mobile ? 'app/views/home/hero.php' : 'app/views/home/mobile/hero.php',
				'panel' => !$check_mobile ? 'app/views/home/panel.php' : 'app/views/home/mobile/panel.php',
				'rental' => !$check_mobile ? 'app/views/home/rental.php' : 'app/views/home/mobile/rental.php',
				'travel' => !$check_mobile ? 'app/views/home/travel.php' : 'app/views/home/mobile/travel.php',
				'tour' => !$check_mobile ? 'app/views/home/tour.php' : 'app/views/home/mobile/tour.php',
				'blog' => 'app/views/home/blog.php',
				'contact' => !$check_mobile ? 'app/views/home/contact.php' : 'app/views/home/mobile/contact.php',
				'whatsapp' => !$check_mobile ? 'app/views/home/whatsapp.php' : 'app/views/home/mobile/whatsapp.php',
			];
			$scripts = ['/public/assets/js/contentful-init.js', '/public/assets/js/script.js', '/public/assets/js/nav.js'];
			
		} elseif($page === 'blog') {
			$google_ads = 'app/views/layout/partials/google_ads.php';
			$google_tag = 'app/views/layout/partials/google_meta.php';
			$contents = [
				'loading' => 'app/views/home/loading.php',
				'hero' => !$check_mobile ? 'app/views/blog/hero.php' : 'app/views/blog/mobile/hero.php',
				'content' => !$check_mobile ? 'app/views/blog/content.php' : 'app/views/blog/mobile/content.php',
				'whatsapp' => !$check_mobile ? 'app/views/home/whatsapp.php' : 'app/views/home/mobile/whatsapp.php',
			];

			$scripts = ['/public/assets/js/marked.umd.min.js', '/public/assets/js/contentful-init.js', '/public/assets/js/blog/script.js'];

		} elseif($page === '404') {
			$google_ads = '';
			$google_tag = '';
			$contents = [
				'error_404_content' => 'app/views/errors/content_404.php'
			];
			$scripts = [];
		}else {
			$google_ads = '';
			$google_tag = '';
			$contents = [];
			$scripts = [];
		}


		return [
			'meta_google_tag' => $google_tag,
			'google_ads' => $google_ads,
			'navbar' => $page === 'home' ? 'app/views/layout/partials/navbar.php' : 'app/views/blog/partials/navbar.php',
			'footer_content' => 'app/views/layouts/partials/footer_content.php',
			'views' => $contents,
			'scripts' => $scripts
		];
	}

	public static function getMetaTag($title) 
	{	
		return [
			'canonical' => 'https://dntourtravel.com',
			'meta_desc' => 'D & N Tour Travel | Sewa Mobil Bandung | Sewa Hiace Bandung | Rental Mobil Bandung | Rental Mobil Bandara',
			'meta_key' => $title,
			'meta_author' => 'D & N Tour Travel',
			'og_url' => 'https://dntourtravel.com',
			'og_type' => 'website',
			'og_site_name' => 'D & N Tour Travel - Sewa Mobil Bandung | Sewa Hiace Bandung',
			'og_title' => $title,
			'og_desc' => 'Pelayanan kami meliputi :
			> Sewa Mobil Bandung
			> Paket Drop Off Bandara Soetta
			> Sewa Hiace Bandung
			> Antar Jemput Bandara, Stasiun, Wisuda
			Pernikahan, Perjalanan Dinas / Meeting Kantor
			> Antar Jemput Luar Kota
			> Paket Wisata ',
			'og_image' => 'https://images.ctfassets.net/hm3eztweb2rs/fxNBlorDiVrLSffPDc3eG/f03a8f6e6aa817cec8060818f6f445c1/about-dn.jpg?h=250',
			'og_image_width' => '600',
			'og_image_height' => '600',
			'google_ads_key' => GOOGLE_CA_KEY,
			'gtag_id' => GTM_ID,
			'tagm_id' => GTM_KEY,
			'head_title' => $title
		];
	}

	public static function getData() 
	{
		$datasources = new PackagesData;
		$hero_bg = '/public/assets/images/bg-hero.jpg';
		
		return [
			'logo' => '/public/assets/img/D&N-Logo.png',
			'hero_img' => $hero_bg,
			'bg_img' => '/public/assets/images/bg-new.webp',
			'favicon' => '/public/assets/favicon.ico',
			'title' => 'D & N Tour Travel',
			'tagline' => 'Sewa Mobil Bandung - Sewa Hiace Bandung',
			'brand' => 'D & N Tour',
			'desc_title' => 'Pelayanan kami meliputi :',
			'desc' => '<i class="fa-solid fa-location-arrow"></i>&nbsp;Sewa Mobil Bandung<br/>
			<i class="fa-solid fa-location-arrow"></i>&nbsp;Paket Drop Off Bandara Soetta <br/>
			<i class="fa-solid fa-location-arrow"></i>&nbsp;Sewa Hiace Bandung<br/>
			<i class="fa-solid fa-location-arrow"></i>&nbsp;Antar Jemput Bandara, Stasiun, Wisuda<br/> Pernikahan, Perjalanan Dinas / Meeting Kantor <br/>
			<i class="fa-solid fa-location-arrow"></i>&nbsp;Antar Jemput Luar Kota <br/>
			<i class="fa-solid fa-location-arrow"></i>&nbsp;Paket Wisata <br/>
			</ul>
			',
			'our_about' => 'D & N Tour Travel - merupakan jasa layanan transportasi dalam lingkup tour travel dan city tour terbaik dan profesional yang ada di wilayah Bandung. Kami memiliki kantor pusat yang berlokasi di wilayah Bandung, tepatnya di
			<br/>
			Jl. Hercules II No.5, Melong, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40534 <br/><br/>
			Kami telah berpengalaman selama bertahun – tahun di bidang jasa antar jemput Bandung - Jakarta (Bandara Soetta) dan trip wisata, sehingga kami sangat berpengalaman dan profesional.
			<br/><br/>
			D & N Tour Travel menawarkan beberapa layanan jasa yang dapat Anda pilih sesuai dengan kebutuhan Anda. Layanan jasa kami yang menjadi prioritas ialah antar jemput Bandung – Jakarta (Bandara Soetta). Semua layanan yang kami tawarkan dibanderol dengan harga yang ekonomis dan terjangkau serta lengkap dengan driver / sopir profesional yang sudah memiliki perizinan mengemudi secara legal dari pihak yang berwenang.',
			'phone' => '6283165539138',
            // For data products
			'rentals' => ['data' => $datasources->rentals()],

			'travels' => ['data' => $datasources->travels()],

			'tours' => ['data' => $datasources->tours()],

			'categories' => ['data' => $datasources->categories()],

			'sliders' => ['data' => $datasources->sliders()],
			'contentful_token' => CONTENTFUL_TOKEN,
			'contentful_space' => CONTENTFUL_SPACE,
			'vendor' => [
				'tailwind' => '/public/assets/vendor/js/tailwind.js',
				'fontawesome' => '/public/assets/vendor/css/all.min.css',
				'flowbite' => [
					'css' => '/public/assets/vendor/css/flowbite.min.css',
					'js' => '/public/assets/vendor/js/flowbite.min.js',
				],
				'contentful' => '/public/assets/vendor/js/contentful.browser.min.js',
				'sweetalert' => '/public/assets/vendor/js/sweetalert2@11.js'
			],
		];
	}
}