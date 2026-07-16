<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private array $slides = [
        [
            'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1600&q=80',
            'title' => 'Taste The Best Food',
            'description' => 'Fresh ingredients and unforgettable dining experience.',
            'button' => 'Explore Menu',
            'url' => '/menu',
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=1600&q=80',
            'title' => 'Reserve Your Table',
            'description' => 'Book your table online in just a few clicks.',
            'button' => 'Book Now',
            'url' => '/reservation',
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=1600&q=80',
            'title' => 'Professional Chefs',
            'description' => 'Prepared with love by experienced chefs.',
            'button' => 'Contact Us',
            'url' => '/contact',
        ],
    ];

    private array $features = [
        [
            'icon' => 'chef-hat',
            'title' => 'Professional Chefs',
            'description' => 'Our experienced chefs prepare every meal with passion and premium ingredients.',
        ],
        [
            'icon' => 'leaf',
            'title' => 'Fresh Ingredients',
            'description' => 'We use only fresh and carefully selected ingredients every single day.',
        ],
        [
            'icon' => 'clock-3',
            'title' => 'Fast Service',
            'description' => 'Enjoy quick and friendly service without compromising food quality.',
        ],
        [
            'icon' => 'star',
            'title' => 'Top Rated',
            'description' => 'Thousands of satisfied customers recommend our restaurant for its quality and hospitality.',
        ],
        [
            'icon' => 'utensils-crossed',
            'title' => 'Delicious Menu',
            'description' => 'Explore a wide selection of delicious dishes, desserts, and refreshing beverages.',
        ],
        [
            'icon' => 'calendar-check-2',
            'title' => 'Easy Reservation',
            'description' => 'Book your table online in just a few clicks and enjoy a seamless dining experience.',
        ],
    ];

    public function index()
    {
        return view('home', [
            'slides' => $this->slides,
            'features' => $this->features,
        ]);
    }
}
