<?php

/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return USER_AGENT
 **/

namespace app\datasources;

class PackagesData
{


    public function file_images()
    {
        return [
            [
                'id' => 1,
                'img' => '/public/assets/images/file1.png'
            ],

            [
                'id' => 3,
                'img' => '/public/assets/images/file3.png'
            ],
            [
                'id' => 4,
                'img' => '/public/assets/images/file4.png'
            ]
        ];
    }

    public function categories()
    {
        return [
            [
                'id' => 1,
                'name' => 'Sewa Mobil'
            ],

            [
                'id' => 2,
                'name' => 'Dropp Off Bandara Soetta'
            ],

            [
                'id' => 3,
                'name' => 'Paket City Tour'
            ]
        ];
    }

    public function rentals()
    {
        return [
            [
                'id' => 1,
                'category_id' => 1,
                'title' => 'Avanza',
                'price' => number_format(490000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/avanza.png'
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'title' => 'Inova Reborn',
                'price' => number_format(690000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/innova.png'
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'title' => 'Hiace',
                'price' => number_format(980000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/Toyota-Hiace.png'
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'title' => 'Fortuner',
                'price' => number_format(1500000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/fortuner.png'
            ],
            [
                'id' => 5,
                'category_id' => 1,
                'title' => 'Alphard',
                'price' => number_format(2000000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/alphard.png'
            ],
            [
                'id' => 6,
                'category_id' => 1,
                'title' => 'Xpander',
                'price' => number_format(600000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/xpander.png'
            ]
        ];
    }

    public function travels()
    {
        return [
            [
                'id' => 1,
                'category_id' => 2,
                'title' => 'Avanza',
                'price' => number_format(790000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/avanza.png'
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'title' => 'Inova Reborn',
                'price' => number_format(990000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/innova.png'
            ],
            [
                'id' => 3,
                'category_id' => 2,
                'title' => 'Hiace',
                'price' => number_format(1440000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/Toyota-Hiace.png'
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'title' => 'Fortuner',
                'price' => number_format(2300000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/fortuner.png'
            ],
        ];
    }

    public function tours()
    {
        return [
            [
                'id' => 1,
                'category_id' => 3,
                'title' => 'Paket Lembang',
                'price' => number_format(550000, 0, ',', '.'),
                'img' => '/public/assets/images/city-tour/city-tour1.jpg'
            ],
            [
                'id' => 2,
                'category_id' => 3,
                'title' => 'Paket Ciwidey',
                'price' => number_format(600000, 0, ',', '.'),
                'img' => '/public/assets/images/city-tour/city-tour2.jpg'
            ],
            [
                'id' => 3,
                'category_id' => 3,
                'title' => 'Paket Pangalengan',
                'price' => number_format(650000, 0, ',', '.'),
                'img' => '/public/assets/images/city-tour/city-tour4.jpg'
            ]
        ];
    }

    public function sliders()
    {
        return [
            [
                'id' => 1,
                'img' => '/public/assets/images/gallery/intro.png',
                'alt' => 'Intro DN Tour'
            ],
            [
                'id' => 2,
                'img' => '/public/assets/images/gallery/new-bg.jpg',
                'alt' => 'DN Tour Travel'
            ],
            [
                'id' => 3,
                'img' => '/public/assets/images/bg-hero.jpg',
                'alt' => 'DN Tour For Family'
            ],
            [
                'id' => 4,
                'img' => '/public/assets/images/gallery/hero_1.png',
                'alt' => 'DN Tour Rentals'
            ],
            [
                'id' => 5,
                'img' => '/public/assets/images/gallery/banner2.jpg',
                'alt' => 'DN Tour Rentals'
            ]
        ];
    }
}
