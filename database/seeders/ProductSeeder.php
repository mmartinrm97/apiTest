<?php

namespace Database\Seeders;

use App\Models\Local;
use App\Models\Presentation;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locals = Local::all()->pluck('id')->toArray();
        Product::factory(10)->create()->each(function ($product) use ($locals) {

            $local = Arr::random($locals, rand(1, 2));
            $product->locals()->attach($local);

            foreach ($product->locals as $l) {

                Presentation::factory(rand(0, 3))->create([
                    'local_id' => $l->id,
                    'product_id' => $product->id,
                    'local_product_id' => $l->pivot->id
                ])->each(function ($presentation) {

                });
            }
        });
    }
}
