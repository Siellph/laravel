<?php

namespace App;


class Category
{
    private static $categories = [
        1 => [
            'id' => 1,
            'title' => 'Политика',
            'slug' => 'politics'
        ],
        2 => [
            'id' => 2,
            'title' => 'Экономика',
            'slug' => 'economics'
        ],
        3 => [
            'id' => 3,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        4 => [
            'id' => 4,
            'title' => 'Интернет',
            'slug' => 'internet'
        ],
        5 => [
            'id' => 5,
            'title' => 'Культура',
            'slug' => 'culture'
        ],
        6 => [
            'id' => 6,
            'title' => 'Происшествия',
            'slug' => 'accidents'
        ],
        7 => [
            'id' => 7,
            'title' => 'Преступность и право',
            'slug' => 'crime and law'
        ],
        8 => [
            'id' => 8,
            'title' => 'Религия',
            'slug' => 'religion'
        ],
        9 => [
            'id' => 9,
            'title' => 'Наука и технологии',
            'slug' => 'science and technology'
        ],
        10 => [
            'id' => 10,
            'title' => 'Некрологи',
            'slug' => 'obituaries'
        ],
        11 => [
            'id' => 11,
            'title' => 'Общество',
            'slug' => 'society'
        ],
        12 => [
            'id' => 12,
            'title' => 'Рейтинги',
            'slug' => 'ratings'
        ],
        13 => [
            'id' => 13,
            'title' => 'Россия',
            'slug' => 'Russia'
        ],
        14 => [
            'id' => 14,
            'title' => 'Украина',
            'slug' => 'Ukraine'
        ],
        15 => [
            'id' => 15,
            'title' => 'США',
            'slug' => 'USA'
        ]
    ];

    public static function getCategories() {
        return static::$categories;
    }

    public static function getCategoryIdByName($name) {
        $id = null;
        foreach (static::$categories as $category) {
            if ($category['slug'] == $name) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public static function getCategoryById($id) {
        return static::$categories[$id];
    }
}
