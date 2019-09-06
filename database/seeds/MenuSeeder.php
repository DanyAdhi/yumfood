<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
    	$menus =['Ayam Goreng', 'Mie Goreng', 'Bakso', 'Mie Ayam', 'Nasi Goreng', 'Soto', 'Seblak', 'Telor', 'Tempe', 'Sayur'];

    	for ($i=0; $i < 25 ; $i++) { 
	        DB::table('menus')->insert([
	        	'menu_name' 	=> $faker->randomElement($menus),
	        	'price' 		=> $faker->numberBetween(8, 25).'000',
	        	'descryption' 	=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
	        	'vendor_id' 	=> $faker->numberBetween(1,25),
	        ]);
    	}
    }
}
