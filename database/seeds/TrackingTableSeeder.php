<?php

use Illuminate\Database\Seeder;

class TrackingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trackings')->insert([
        	[
        		'product' => 'Shoes',
        		'delivery_date' => date('Y-m-d H:i:s', strtotime("+4 day")),
                'tracking_code' => 'ae14'
        	],
        	[
        		'product' => 'T-shirt',
        		'delivery_date' => date('Y-m-d H:i:s', strtotime("+1 day")),
                'tracking_code' => 'g4g'
        	],
        	[
        		'product' => 'Cell phone',
        		'delivery_date' => date('Y-m-d H:i:s', strtotime("+6 day")),
                'tracking_code' => 'sq4'
        	]
        ]);
    }
}
