<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return __constructor
**/

namespace app\models;

use app\helpers\{Helpers};
use app\datasources\{PackagesData};

class Home {

	private $helpers, $datasources;

	public function __construct()
	{
		$this->helpers = new Helpers;
		$this->datasources = new PackagesData;
	}

	public function getPartials()
	{

		$check_mobile = $this->helpers->isMobileDevice();

		$partials = [
			'hero' => 'app/views/home/hero.php',
			'rental' => !$check_mobile ? 'app/views/home/rental.php' : 'app/views/home/mobile/rental.php',
			'travel' => !$check_mobile ? 'app/views/home/travel.php' : 'app/views/home/mobile/travel.php',
			'tour' => !$check_mobile ? 'app/views/home/tour.php' : 'app/views/home/mobile/tour.php',
			'contact' => !$check_mobile ? 'app/views/home/contact.php' : 'app/views/home/mobile/contact.php',
			'whatsapp' => !$check_mobile ? 'app/views/home/whatsapp.php' : 'app/views/home/mobile/whatsapp.php',
		];

		$scripts = ['/public/assets/js/script.js', '/public/assets/js/nav.js'];

		return [
			'navbar' => 'app/views/layout/partials/navbar.php',
			'footer_content' => 'app/views/layouts/partials/footer_content.php',
			'homes' => $partials,
			'scripts' => $scripts
		];
	}

	public function getMetaTag() 
	{
		return [
			'canonical' => 'https://dntourtravel.com',
			'meta_desc' => 'D & N Tour Travel | Travel Bandung - Jakarta (Bandara Soekarno Hatta)',
			'meta_key' => 'Travel Bandung Bandara | Sewa Mobile Bandung | City Tour',
			'meta_author' => 'D & N Tour Travel',
			'og_url' => 'https://dntourtravel.com',
			'og_type' => 'website',
			'og_site_name' => 'D & N Tour Travel',
			'og_title' => 'D & N Tour Travel - Travel Bandung Bandara',
			'og_desc' => 'Melayani Paket reguler Travel Bandung - Jakarta (Bandara Soekarno Hatta) | Sewa mobile Bandung | Paket Wisata City Tour',
			'og_image' => '/public/assets/images/new-bg.jpg',
			'og_image_width' => '600',
			'og_image_height' => '600',
			'goole_ads_key' => 'pub-3269967595614450',
			'gtag_id' => 'UA-255953477-1',
			'tagm_id' => 'GTM-54WQ4Z5'
		];
	}

    public function getData() 
    {
        // Logika untuk mengambil data dari database atau sumber data lainnya
        return [
        	'logo' => '/public/assets/img/D&N-Logo.png',
        	'hero_img' => '/public/assets/images/hero_1.png',
        	'bg_img' => '/public/assets/images/bg-new.webp',
        	'favicon' => '/public/assets/favicon.ico',
            'title' => 'D & N Tour Travel',
            'brand' => 'D & N',
            'tagline' => ' Selamat Datang Di Website <br/> D & N Tour Travel',
            'desc' => 'Pelayanan kami meliputi : <br/>
            			> Sewa Mobil Bandung<br/>
            			> Paket Drop Off Bandara Soetta <br/>
            			> Sewa Hiace Bandung<br/>
            			> Antar Jemput Bandara, Stasiun, Wisuda<br/> Pernikahan, Perjalanan Dinas / Meeting Kantor <br/>
            			> Antar Jemput Luar Kota <br/>
            			> Paket Wisata <br/>
            		</ul>
            	',
            'our_about' => 'D & N Tour Travel - merupakan jasa layanan transportasi dalam lingkup tour travel dan city tour terbaik dan profesional yang ada di wilayah Bandung. Kami memiliki kantor pusat yang berlokasi di wilayah Bandung, tepatnya di
            	<br/>
            	Jl. Hercules II No.5, Melong, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40534 <br/><br/>
            	Kami telah berpengalaman selama bertahun – tahun di bidang jasa antar jemput Bandung - Jakarta (Bandara Soetta) dan trip wisata, sehingga kami sangat berpengalaman dan profesional.
            	<br/><br/>
            	D & N Tour Travel menawarkan beberapa layanan jasa yang dapat Anda pilih sesuai dengan kebutuhan Anda. Layanan jasa kami yang menjadi prioritas ialah antar jemput Bandung – Jakarta (Bandara Soetta). Semua layanan yang kami tawarkan dibanderol dengan harga yang ekonomis dan terjangkau serta lengkap dengan driver / sopir profesional yang sudah memiliki perizinan mengemudi secara legal dari pihak yang berwenang.',

            // For data products
            'rentals' => $this->datasources->rentals(),

            'travels' => $this->datasources->travels(),

            'tours' => $this->datasources->tours()
        ];
    }
}