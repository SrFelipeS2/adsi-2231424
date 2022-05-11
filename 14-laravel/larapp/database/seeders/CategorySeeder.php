<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category;
        $cat->name ='Nintendo Switch';
        $cat->image = 'images/switch.png';
        $cat->description ='lorem impsum dolor';
        $cat->save();
        //
        $cat = new Category;
        $cat->name ='Xbox';
        $cat->image = 'images/Xbox.png';
        $cat->description ='lorem impsum dolor';
        $cat->save();
        //
        $cat = new Category;
        $cat->name ='Play 5';
        $cat->image = 'images/pay.png';
        $cat->description ='lorem impsum dolor';
        $cat->save();
    }
}
