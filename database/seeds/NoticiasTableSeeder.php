<?php

use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Noticias::class, 10)->create();
    }
}
