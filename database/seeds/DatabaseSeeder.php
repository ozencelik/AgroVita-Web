<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $product = new \App\Products([
            'imagePath' => 'https://cdn.shopify.com/s/files/1/1380/2059/products/Cherry-Tomato_600x600.jpg?v=1480318422',
            'proName' => 'Tomato',
            'description' => 'Really fresh and 10 kg.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath' => 'http://cdn.mr-fothergills.co.uk/product-images/op/z/POT-275z.jpg',
            'proName' => 'Potato',
            'description' => 'Its ground to bazaar 20 kg',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath' => 'https://i2.wp.com/www.yummy.co.ke/wp-content/uploads/2014/03/lem.jpg?resize=300%2C199&ssl=1',
            'proName' => 'Lemon',
            'description' => 'Come people come...',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath' => 'http://www.aysetolgaiyiyasam.com/wp-content/uploads/2017/04/nane.jpg',
            'proName' => 'Mint',
            'description' => 'No one is going to survive!',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath' => 'http://www.lemonsandlavender.com/wp-content/uploads/2011/12/DSC_0062-1-1024x680.jpg',
            'proName' => 'Orange',
            'description' => 'Still, no one is going to survive!',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath' => 'http://www.aht.org.uk/skins/Default/media/dnac_banner.jpg',
            'proName' => 'Cow',
            'description' => 'Montofon Cow',
            'price' => 200
        ]);
        $product->save();
    }
}
