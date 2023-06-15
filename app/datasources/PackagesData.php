<?php
/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @return USER_AGENT
**/

namespace app\datasources;

class PackagesData {

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
                'price' => number_format(490000,0, ',', '.'),
                'img' => '/public/assets/images/cars/new-avanza.jpg'
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'title' => 'Inova Reborn',
                'price' => number_format(690000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/inova.jpg'
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'title' => 'Hiace',
                'price' => number_format(980000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/hiace.jpg'
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
                'price' => number_format(790000,0, ',', '.'),
                'img' => '/public/assets/images/cars/new-avanza.jpg'
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'title' => 'Inova Reborn',
                'price' => number_format(990000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/inova.jpg'
            ],
            [
                'id' => 3,
                'category_id' => 2,
                'title' => 'Hiace',
                'price' => number_format(1340000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/hiace.jpg'
            ]
        ];
    }

    public function tours()
    {
        return [
            [
                'id' => 1,
                'category_id' => 3,
                'title' => 'Avanza',
                'price' => number_format(550000,0, ',', '.'),
                'img' => '/public/assets/images/cars/new-avanza.jpg'
            ],
            [
                'id' => 2,
                'category_id' => 3,
                'title' => 'Inova Reborn',
                'price' => number_format(600000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/inova.jpg'
            ],
            [
                'id' => 3,
                'category_id' => 3,
                'title' => 'Hiace',
                'price' => number_format(650000, 0, ',', '.'),
                'img' => '/public/assets/images/cars/hiace.jpg'
            ]
        ];
    }
}