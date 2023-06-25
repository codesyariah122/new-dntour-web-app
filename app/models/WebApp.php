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
		$this->helpers = new Helpers;
		$this->datasources = new PackagesData;
		$this->check_mobile = $this->helpers->isMobileDevice();
		$this->env->config();
	}

	public function getPartials($page)
	{
		// var_dump($page); die;
		if($page === 'home') {
			$google_ads = '';
			$google_tag = 'app/views/layout/partials/google_meta.php';
			$partials = [
				'loading' => 'app/views/home/loading.php',
				'hero' => !$this->check_mobile ? 'app/views/home/hero.php' : 'app/views/home/mobile/hero.php',
				'panel' => !$this->check_mobile ? 'app/views/home/panel.php' : 'app/views/home/mobile/panel.php',
				'rental' => !$this->check_mobile ? 'app/views/home/rental.php' : 'app/views/home/mobile/rental.php',
				'travel' => !$this->check_mobile ? 'app/views/home/travel.php' : 'app/views/home/mobile/travel.php',
				'tour' => !$this->check_mobile ? 'app/views/home/tour.php' : 'app/views/home/mobile/tour.php',
				'blog' => 'app/views/home/blog.php',
				'gallery' => 'app/views/home/gallery.php',
				'contact' => !$this->check_mobile ? 'app/views/home/contact.php' : 'app/views/home/mobile/contact.php',
				'whatsapp' => !$this->check_mobile ? 'app/views/home/whatsapp.php' : 'app/views/home/mobile/whatsapp.php',
			];
			$scripts = ['/public/assets/js/contentful-init.js', '/public/assets/js/script.js', '/public/assets/js/nav.js'];
			
		} elseif($page === 'blog') {
			$google_ads = 'app/views/layout/partials/google_ads.php';
			$google_tag = 'app/views/layout/partials/google_meta.php';
			$partials = [
				'loading' => 'app/views/home/loading.php',
				'hero' => !$this->check_mobile ? 'app/views/blog/hero.php' : 'app/views/blog/mobile/hero.php',
				'content' => !$this->check_mobile ? 'app/views/blog/content.php' : 'app/views/blog/mobile/content.php',
				'whatsapp' => !$this->check_mobile ? 'app/views/home/whatsapp.php' : 'app/views/home/mobile/whatsapp.php',
			];

			$scripts = ['/public/assets/js/marked.umd.min.js', '/public/assets/js/contentful-init.js', '/public/assets/js/blog/script.js'];

		} else {
			$google_ads = '';
			$google_tag = '';
			$partials = [];
			$scripts = [];
		}

	
		return [
			'meta_google_tag' => $google_tag,
			'google_ads' => $google_ads,
			'navbar' => $page === 'home' ? 'app/views/layout/partials/navbar.php' : 'app/views/blog/partials/navbar.php',
			'footer_content' => 'app/views/layouts/partials/footer_content.php',
			'views' => $partials,
			'scripts' => $scripts
		];
	}

	public function getMetaTag($title) 
	{	
		return [
			'canonical' => 'https://dntourtravel.com',
			'meta_desc' => 'DN Tour Travel | Sewa Mobil Bandung | Sewa Hiace Bandung | Rental Mobil Bandung | Rental Mobil Bandara',
			'meta_key' => $title,
			'meta_author' => 'DN Tour Travel',
			'og_url' => 'https://dntourtravel.com',
			'og_type' => 'website',
			'og_site_name' => 'DN Tour Travel - Sewa Mobil Bandung | Sewa Hiace Bandung',
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

    public function getData() 
    {
        // Logika untuk mengambil data dari database atau sumber data lainnya
        return [
        	'logo' => '/public/assets/img/D&N-Logo.png',
        	'hero_img' => !$this->check_mobile ? '/public/assets/images/bg-hero.jpg' : '/public/assets/images/bg-hero.jpg',
        	'bg_img' => '/public/assets/images/bg-new.webp',
        	'favicon' => '/public/assets/favicon.ico',
            'title' => 'DN Tour Travel',
            'tagline' => 'Sewa Mobil Bandung - Sewa Hiace Bandung',
            'brand' => 'DN Tour',
			'desc_title' => 'Pelayanan kami meliputi :',
            'desc' => '<i class="fa-solid fa-location-arrow"></i>&nbsp;Sewa Mobil Bandung<br/>
            <i class="fa-solid fa-location-arrow"></i>&nbsp;Paket Drop Off Bandara Soetta <br/>
            <i class="fa-solid fa-location-arrow"></i>&nbsp;Sewa Hiace Bandung<br/>
            <i class="fa-solid fa-location-arrow"></i>&nbsp;Antar Jemput Bandara, Stasiun, Wisuda<br/> Pernikahan, Perjalanan Dinas / Meeting Kantor <br/>
            <i class="fa-solid fa-location-arrow"></i>&nbsp;Antar Jemput Luar Kota <br/>
            <i class="fa-solid fa-location-arrow"></i>&nbsp;Paket Wisata <br/>
            </ul>
            ',
            'our_about' => 'DN Tour Travel - merupakan jasa layanan transportasi dalam lingkup tour travel dan city tour terbaik dan profesional yang ada di wilayah Bandung. Kami memiliki kantor pusat yang berlokasi di wilayah Bandung, tepatnya di
            	<br/>
            	Jl. Hercules II No.5, Melong, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40534 <br/><br/>
            	Kami telah berpengalaman selama bertahun – tahun di bidang jasa antar jemput Bandung - Jakarta (Bandara Soetta) dan trip wisata, sehingga kami sangat berpengalaman dan profesional.
            	<br/><br/>
            	DN Tour Travel menawarkan beberapa layanan jasa yang dapat Anda pilih sesuai dengan kebutuhan Anda. Layanan jasa kami yang menjadi prioritas ialah antar jemput Bandung – Jakarta (Bandara Soetta). Semua layanan yang kami tawarkan dibanderol dengan harga yang ekonomis dan terjangkau serta lengkap dengan driver / sopir profesional yang sudah memiliki perizinan mengemudi secara legal dari pihak yang berwenang.',

            // For data products
            'rentals' => ['data' => $this->datasources->rentals()],

            'travels' => ['data' => $this->datasources->travels()],

            'tours' => ['data' => $this->datasources->tours()],

            'categories' => ['data' => $this->datasources->categories()],

            'sliders' => ['data' => $this->datasources->sliders()],
            'contentful_token' => CONTENTFUL_TOKEN,
            'contentful_space' => CONTENTFUL_SPACE
        ];
    }
}