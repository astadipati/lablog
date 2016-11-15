<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate posts
        
        DB::table('posts')->truncate();
        //make a object
        $posts = [];
        //Object Faker
        $faker = Factory::create();
        //increament date
       
        //generate 10 posts
        for ($i = 1; $i <=10; $i++)
        {
            $date = date("Y-m-d H:i:s", strtotime("2016-07-18 08:00:00 +{$i} days"));
        	$image = "Post_Image_". rand(1, 5). ".jpg";
        	$posts[] = 
        	[
        		'author_id' => rand(1, 3),
        		'title' => $faker->sentence(rand(8, 12)),
        		'excerpt' => $faker->text(rand(250,300)),
        		'body'=>$faker->paragraphs(rand(10,15), true),
        		'slug'=>$faker->slug(),
        		'image'=>rand(0,1) == 1 ? $image : NULL,
        		'created_at' => $date,
        		'Updated_at' => $date,
        	];

        }

        DB::table('posts')->insert($posts);
    }
}
