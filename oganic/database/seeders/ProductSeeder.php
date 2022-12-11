<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            Product::factory()->count(5)->state(new Sequence(
                [
                    'Name'=>'Beef',
                    'Avatar'=>'thitbo.jpg',
                    'Images'=>[
                        '0'=>"1-1.jpg",
                        '1'=>"1-2.jpg",
                        '2'=>"1-3.jpg",
                        '3'=>"1-4.jpg",
                        '4'=>"1-5.jpg",
                    ]
                ],
                [
                    'Name'=>'Pork thigh meat',
                    'Avatar'=>'thitdui.jpg',
                    'Images'=>["pork-1.jpg","pork-2.jpg","pork-3.jpg","pork-4.jpg","pork-5.jpg"]
                ],
                [
                    'Name'=>'Salmon',
                    'Avatar'=>'cangu.jpg',
                    'Images'=>["tuna-1.jpg","tuna-2.jpg","tuna-3.jpg","tuna-4.jpg","tuna-5.jpg"]
                ],
                [
                    'Name'=>'Pompano',
                    'Avatar'=>'canuc.jpg',
                    'Images'=>["canuc-1.jpg","canuc-2.jpg","canuc-3.jpg","canuc-4.jpg","canuc-5.jpg"]
                ],
                [
                    'Name'=>'Tuna',
                    'Avatar'=>'cangu.jpg',
                    'Images'=>["tuna-1.jpg","tuna-2.jpg","tuna-3.jpg","tuna-4.jpg","tuna-5.jpg"]
                ],

            ))->create([
                'CategoryId'=>1,
            ]);
            Product::factory()->count(9)->state(new Sequence(
                [
                    'Name'=>'Bananas',
                    'Avatar'=>'chuoi.jpg',
                    'Images'=>["banana-1.jpg","banana-2.jpg","banana-3.jpg","banana-4.jpg","banana-5.jpg"]
                ],
                [
                    'Name'=>'Guava fruit',
                    'Avatar'=>'oi.jpg',
                    'Images'=>["oi-1.jpg","oi-2.jpg","oi-3.jpg","oi-4.jpg","oi-5.jpg"]
                ],
                [
                    'Name'=>'Grapes',
                    'Avatar'=>'nho.jpg',
                    'Images'=>["nho-1.jpg","nho-2.jpg","nho-3.jpg","nho-4.jpg","nho-5.jpg"]
                ],
                [
                    'Name'=>'Mangoes',
                    'Avatar'=>'xoai.jpg',
                    'Images'=>["xoai-1.jpg","xoai-2.jpg","xoai-3.jpg","xoai-4.jpg","xoai-5.jpg"]
                ],
                [
                    'Name'=>'Watermelon',
                    'Avatar'=>'dua.jpg',
                    'Images'=>["dua-1.jpg","dua-2.jpg","dua-3.jpg","dua-4.jpg","dua-5.jpg"]
                ],
                [
                    'Name'=>'Apple',
                    'Avatar'=>'tao.jpg',
                    'Images'=>["tao-1.jpg","tao-2.jpg","tao-3.jpg","tao-4.jpg","tao-5.jpg"]
                ],
                [
                    'Name'=>'carrot',
                    'Avatar'=>'carot.jpg',
                    'Images'=>["carot-1.jpg","carot-2.jpg","carot-3.jpg","carot-4.jpg","carot-5.jpg"]
                ],
                [
                    'Name'=>'Broccoli',
                    'Avatar'=>'suplo.jpg',
                    'Images'=>["suplo-1.jpg","suplo-2.jpg","suplo-3.jpg","suplo-4.jpg","suplo-5.jpg"]
                ],
                [
                    'Name'=>'Scallion',
                    'Avatar'=>'hanhla.jpg',
                    'Images'=>["hanh-1.jpg","hanh-2.jpg","hanh-3.jpg","hanh-4.jpg","hanh-5.jpg"]
                ],
            ))->create([
                'CategoryId'=>2
            ]);
            Product::factory()->count(7)->state(new Sequence(
                [
                    'Name'=>'Grape juice',
                    'Avatar'=>'epnho-1.jpg',
                    'Images'=>["epnho-1.jpg","epnho-2.jpg","epnho-3.jpg","epnho-4.jpg","epnho-5.jpg"]
                ],
                [
                    'Name'=>'Orange juice',
                    'Avatar'=>'epcam-1.jpg',
                    'Images'=>["epcam-1.jpg","epcam-2.jpg","epcam-3.jpg","epcam-4.jpg","epcam-5.jpg"]
                ],
                [
                    'Name'=>'Combo1',
                    'Avatar'=>'product-12.jpg'
                ],
                [
                    'Name'=>'Combo2',
                    'Avatar'=>'product-15.jpeg'
                ],
                [
                    'Name'=>'Combo3',
                    'Avatar'=>'product-16.jpeg'
                ],
                [
                    'Name'=>'Combo4',
                    'Avatar'=>'product-17.jpeg'
                ],
                [
                    'Name'=>'Combo5',
                    'Avatar'=>'product-18.jpeg'
                ],
            ))->create([
                'CategoryId'=>3
            ]);
            Product::factory()->count(3)->state(new Sequence(
                [
                    'Name'=>'Hamburgers',
                    'Avatar'=>'hambeger.jpg',
                    'Images'=>["hambeger-1.jpg","hambeger-2.jpg","hambeger-3.jpg","hambeger-4.jpg","hambeger-5.jpg"]
                ],
                [
                    'Name'=>'Fried chicken',
                    'Avatar'=>'garan.jpg',
                    'Images'=>["garan-1.jpg","garan-2.jpg","garan-3.jpg","garan-4.jpg","garan-5.jpg"]
                ],
                [
                    'Name'=>'Cereal',
                    'Avatar'=>'ngucoc.jpg',
                    'Images'=>["ngucoc-1.jpg","ngucoc-2.jpg","ngucoc-3.jpg","ngucoc-4.jpg","ngucoc-5.jpg"]
                ],
                [
                    'Name'=>'Oatmeal',
                    'Avatar'=>'yenmach.jpg',
                    'Images'=>["oat-1.jpg","oat-2.jpg","oat-3.jpg","oat-4.jpg","oat-5.jpg"]
                ],

            ))->create([
                'CategoryId'=>4
            ]);
            Product::factory()->count(3)->state(new Sequence(
                [
                    'Name'=>'Salmon',
                    'Avatar'=>'cangu.jpeg',
                    'Images'=>["1-1.jpg","1-2.jpg","1-3.jpg","1-4.jpg","1-5.jpg"]
                ],
                [
                    'Name'=>'Pompano',
                    'Avatar'=>'canuc.jpg',
                    'Images'=>["canuc-1.jpg","canuc-2.jpg","canuc-3.jpg","canuc-4.jpg","canuc-5.jpg"]
                ],
                [
                    'Name'=>'Tuna',
                    'Avatar'=>'cangu.jpeg',
                    'Images'=>["tuna-1.jpg","tuna-2.jpg","tuna-3.jpg","tuna-4.jpg","tuna-5.jpg"]
                ],
            ))->create([
                'CategoryId'=>5
            ]);
            Product::factory()->count(3)->state(new Sequence(
                [
                    'Name'=>'Butter',
                    'Avatar'=>'bo.jpg',
                    'Images'=>["bo-1.jpg","bo-2.jpg","bo-3.jpg","bo-4.jpg","bo-5.jpg"]
                ],
                [
                    'Name'=>'Eggs',
                    'Avatar'=>'trungga.jpg',
                    'Images'=>["trung-1.jpg","trung-2.jpg","trung-3.jpg","trung-4.jpg","trung-5.jpg"]
                ],
                [
                    'Name'=>'Industrial Eggs',
                    'Avatar'=>'trungga.jpg',
                    'Images'=>["trungga-1.jpg","trungga-2.jpg","trungga-3.jpg","trungga-4.jpg","trungga-5.jpg"]
                ],
            ))->create([
                'CategoryId'=>6
            ]);
            Product::factory()->count(3)->state(new Sequence(
                [
                    'Name'=>'Scallion',
                    'Avatar'=>'hanhla.jpg',
                    'Images'=>["hanh-1.jpg","hanh-2.jpg","hanh-3.jpg","hanh-4.jpg","hanh-5.jpg"]
                ],
                [
                    'Name'=>'Small Onions',
                    'Avatar'=>'hanhcu.jpg',
                    'Images'=>["hanhcu-1.jpg","hanhcu-2.jpg","hanhcu-3.jpg","hanhcu-4.jpg","hanhcu-5.jpg"]
                ],
                [
                    'Name'=>'Onion',
                    'Avatar'=>'hanhtay.jpg',
                    'Images'=>["hanhtay-1.jpg","hanhtay-2.jpg","hanhtay-3.jpg","hanhtay-4.jpg","hanhtay-5.jpg"]
                ],

            ))->create([
                'CategoryId'=>7
            ]);
            Product::factory()->count(6)->state(new Sequence(
                [
                    'Name'=>'Bananas',
                    'Avatar'=>'chuoi.jpg',
                    'Images'=>["banana-1.jpg","banana-2.jpg","banana-3.jpg","banana-4.jpg","banana-5.jpg"]
                ],
                [
                    'Name'=>'Guava fruit',
                    'Avatar'=>'oi.jpg',
                    'Images'=>["oi-1.jpg","oi-2.jpg","oi-3.jpg","oi-4.jpg","oi-5.jpg"]
                ],
                [
                    'Name'=>'Grapes',
                    'Avatar'=>'nho.jpg',
                    'Images'=>["nho-1.jpg","nho-2.jpg","nho-3.jpg","nho-4.jpg","nho-5.jpg"]
                ],
                [
                    'Name'=>'Mangoes',
                    'Avatar'=>'xoai.jpg',
                    'Images'=>["xoai-1.jpg","xoai-2.jpg","xoai-3.jpg","xoai-4.jpg","xoai-5.jpg"]
                ],
                [
                    'Name'=>'Watermelon',
                    'Avatar'=>'dua.jpg',
                    'Images'=>["dua-1.jpg","dua-2.jpg","dua-3.jpg","dua-4.jpg","dua-5.jpg"]
                ],
                [
                    'Name'=>'Apple',
                    'Avatar'=>'tao.jpg',
                    'Images'=>["tao-1.jpg","tao-2.jpg","tao-3.jpg","tao-4.jpg","tao-5.jpg"]
                ],

            ))->create([
                'CategoryId'=>8
            ]);
            Product::factory()->count(1)->state(new Sequence(
                [
                    'Name'=>'Oatmeal',
                    'Avatar'=>'yenmach.jpg',
                    'Images'=>["oat-1.jpg","oat-2.jpg","oat-3.jpg","oat-4.jpg","oat-5.jpg"]
                ],
            ))->create([
                'CategoryId'=>9
            ]);

    }
}
