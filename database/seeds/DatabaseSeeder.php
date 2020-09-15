<?php

use Illuminate\Database\Seeder;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(RoleTableSeeder::class);
        //factory(App\Category::class, 2)->create();

        $s1 = new Category;
        // mgmg
        $s1->name = "Plant";
        $s1->save();


        $s1 = new Category;
        // mgmg
        $s1->name = "Fruit";
         $s1->save();
    }
}
