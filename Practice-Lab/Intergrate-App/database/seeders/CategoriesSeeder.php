<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;



class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //First way
    //  $categoriesData=[
    //      [
    //          'name'=>'Phone'
    //      ],
    //      [
    //          'name'=>'Laptop'
    //      ],
    //      [
    //          'name'=>'Telephone'
    //      ],
        
    //  ]
    //second way by create setting file in config folder
    
    $categoriesData = config('setting.categories');
        foreach ($categoriesData as $name){
            $category = Category::where('name','=','$name')-> first();

            if(empty($category)){
                $category = new Category();
                $category->name = $name;
                $category->save();
            }
        }

    }
}
