<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    private array $menu = [
        [
            'id' => 1,
            'name' => 'Margherita Pizza',
            'image' => 'https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_640.jpg',
            'price' => 12.99,
            'category' => 'Pizza',
            'description' => 'Klassik italyan pizzasi. Motsarella pishlogʻi, tomat sousi va yangi rayhon barglari bilan tayyorlangan.',
            'rating' => 4.8,
            'cooking_time' => '20-25 min'
        ],
        [
            'id' => 2,
            'name' => 'Cheese Burger',
            'image' => 'https://cdn.pixabay.com/photo/2016/03/05/19/02/hamburger-1238246_640.jpg',
            'price' => 10.99,
            'category' => 'Burger',
            'description' => 'Shirali mol goʻshti, cheddar pishlogʻi, salat bargi va yangi sabzavotlar bilan tayyorlangan klassik burger.',
            'rating' => 4.6,
            'cooking_time' => '15-20 min'
        ],
        [
            'id' => 3,
            'name' => 'Grilled Salmon',
            'image' => 'https://images.unsplash.com/photo-1467003909585-2f8a72700288?w=600',
            'price' => 18.99,
            'category' => 'Seafood',
            'description' => 'Gril qilingan losos filesi, sabzavotlar va limonli sariyogʻ sousi bilan tortiladi.',
            'rating' => 4.9,
            'cooking_time' => '25-30 min'
        ],
        [
            'id' => 4,
            'name' => 'Chicken Pasta',
            'image' => 'https://cdn.pixabay.com/photo/2017/11/08/22/18/spaghetti-2931846_640.jpg',
            'price' => 14.99,
            'category' => 'Pasta',
            'description' => 'Qaymoqli Alfredo sousida tovuq goʻshti va parmezan pishlogʻi bilan tayyorlangan makaron.',
            'rating' => 4.7,
            'cooking_time' => '20-25 min'
        ],
        [
            'id' => 5,
            'name' => 'Caesar Salad',
            'image' => 'https://images.unsplash.com/photo-1546793665-c74683f339c1?w=600',
            'price' => 8.99,
            'category' => 'Salad',
            'description' => 'Yangi romain salati, parmezan pishlogʻi, krutonlar va klassik Caesar sousi bilan tayyorlangan.',
            'rating' => 4.5,
            'cooking_time' => '10-15 min'
        ],
        [
            'id' => 6,
            'name' => 'Chocolate Cake',
            'image' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=600',
            'price' => 6.99,
            'category' => 'Dessert',
            'description' => 'Shokoladli tort, vanilli muzqaymoq va shokolad siropi bilan birga tortiladi.',
            'rating' => 4.9,
            'cooking_time' => '10 min'
        ],
    ];

    public function index()
    {
        return view(
            'menu.index',
            [
                'menu' => $this->menu,
            ]
        );
    }

    public function show(int $id)
    {
        $menu = collect($this->menu)->firstWhere('id', $id);
        return view(
            'menu.show',
            [
                'menu' => $menu,
            ]
        );
    }
}
