<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->sentence(9,true),
        'author_id'=>rand(2,11),
        'top_image'=>$faker->imageUrl(800,534),
        'top_description'=>$faker->paragraphs(3, true),
        'center_image'=>$faker->imageUrl(800,534),
        'left_image'=>$faker->imageUrl(800,534),
        'right_image'=>$faker->imageUrl(800,534),
        'bottom_description'=>$faker->paragraphs(5, true),
        'category_id'=>rand(1,9),
        'tag_id'=>rand(1,9),
        'comment_id'=>rand(1,10),
        'published'=>rand(0,1),
    ];
});
