<?php // database/seeds/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Article;

class DatabaseSeeder extends Seeder
{

    public function run()  // ①
    {
        Model::unguard();

        $this->call('ArticlesTableSeeder');  // ②

        Model::reguard();
    }
}

class ArticlesTableSeeder extends Seeder  // ③
{
    public function run()
    {
        // DB::table('articles')->delete();  // ④

        $faker = Faker::create('ja_JP');  // ⑤

        $faker = Faker::create('ja_JP');


        for ($i = 0; $i < 10; $i++) {  // ⑥

            echo $faker->sentence();
            echo $faker->paragraph();
            echo $faker->email();
            Article::create([
                'title' => $faker->sentence(),
                'body' => $faker->paragraph(),
                'published_at' => Carbon::today()
            ]);
        }



    $gender = ['男','女'];

    for($i=0; $i<10; $i++)
    {
        echo $faker->name."<br>";
        echo $faker->address."<br>";
        echo $faker->userName."<br>";
        echo $faker->password."<br>";
        echo $faker->email."<br>";
        echo $faker->sentence();
            echo $faker->paragraph();
            echo $faker->email();
        echo $faker->phoneNumber."<br>";
        echo $faker->date($format='Y-m-d',$max='now')."<br>";
        echo $faker->creditCardNumber."<br>";
        echo $faker->randomElement($gender)."<br>";
        echo $faker->regexify('[1-9]{3}-[0-9]{4}')."<br>";
        echo "<hr>";
    }


    }



}