<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Robby Maulana',
            'username' => 'robbymaulaan',
            'email' => 'robby@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        User::factory(5)->create();

        Category::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'nama' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum Pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid veniam doloribus praesentium, nesciunt neque dolorem aliquam possimus. Ullam facere illum nam, error doloremque culpa alias expedita sit porro aliquid. Repellendus!,</p><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sed dolore quos dignissimos atque omnis fugiat quidem voluptatem sit enim soluta illum, quas repellendus nemo ipsam quam at reprehenderit ipsum. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p><p>Itaque, placeat laborum autem nisi reprehenderit pariatur inventore nesciunt unde sequi dolorem ex commodi, similique asperiores numquam eaque, rerum quo vero dolorum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. A expedita quasi quaerat enim ratione totam suscipit, ducimus doloribus delectus debitis nam, laboriosam soluta saepe! Eaque pariatur cupiditate repudiandae non error?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid veniam doloribus praesentium, nesciunt neque dolorem aliquam possimus. Ullam facere illum nam, error doloremque culpa alias expedita sit porro aliquid. Repellendus!,</p><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sed dolore quos dignissimos atque omnis fugiat quidem voluptatem sit enim soluta illum, quas repellendus nemo ipsam quam at reprehenderit ipsum. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p><p>Itaque, placeat laborum autem nisi reprehenderit pariatur inventore nesciunt unde sequi dolorem ex commodi, similique asperiores numquam eaque, rerum quo vero dolorum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. A expedita quasi quaerat enim ratione totam suscipit, ducimus doloribus delectus debitis nam, laboriosam soluta saepe! Eaque pariatur cupiditate repudiandae non error?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid veniam doloribus praesentium, nesciunt neque dolorem aliquam possimus. Ullam facere illum nam, error doloremque culpa alias expedita sit porro aliquid. Repellendus!,</p><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sed dolore quos dignissimos atque omnis fugiat quidem voluptatem sit enim soluta illum, quas repellendus nemo ipsam quam at reprehenderit ipsum. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p><p>Itaque, placeat laborum autem nisi reprehenderit pariatur inventore nesciunt unde sequi dolorem ex commodi, similique asperiores numquam eaque, rerum quo vero dolorum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. A expedita quasi quaerat enim ratione totam suscipit, ducimus doloribus delectus debitis nam, laboriosam soluta saepe! Eaque pariatur cupiditate repudiandae non error?</p>'
        // ]);
    }
}
