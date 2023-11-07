<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $stateId1 = \DB::table('states')->insertGetId([
            'state_name' => 'Abuja',
        ]);
        $stateId2 = \DB::table('states')->insertGetId([
            'state_name' => 'Lagos',
        ]);
        $stateId3 = \DB::table('states')->insertGetId([
            'state_name' => 'Port Harcourt',
        ]);
        $stateId4 = \DB::table('states')->insertGetId([
            'state_name' => 'Delta',
        ]);

        $stateId5 = \DB::table('states')->insertGetId([
            'state_name' => 'Anambra',
        ]);

        \DB::table('hotels')->insert([

            [
            'name' => "Transcorp Hilton Abuja",
            'location' => '1 Aguiyi Ironsi St, Maitama 900001, Abuja, Federal Capital Territory',
            'description' => "Transcorp Hilton Abuja is located in Abuja and has views of the mountains and an outdoor pool. Visitors are welcome to use the on-site eatery.This hotel offers air conditioning and flat-screen TVs with satellite programming in each room. For your convenience, a seating space is included in 
            some units. Every room has a separate bathroom with a bathtub and a bidet.",
            'amenities' => 'Bathroom, Bathtub, Swimming Pool',
            'image_path' => 'images/transcorp.jpg',
            'state_id' =>  $stateId1,
             'created_at' => now(),
             'updated_at' =>  now(),  
                ],

                [
                    'name' => "Meridean Hotels Abuja",
                    'location' => '1 Aguiyi Ironsi St, Maitama 900001, Abuja, Federal Capital Territory',
                    'description' => "Transcorp Hilton Abuja is located in Abuja and has views of the mountains and an outdoor pool. Visitors are welcome to use the on-site eatery.This hotel offers air conditioning and flat-screen TVs with satellite programming in each room. For your convenience, a seating space is included in 
                    some units. Every room has a separate bathroom with a bathtub and a bidet.",
                    'amenities' => 'Bathroom, Bathtub, Swimming Pool',
                    'image_path' => 'images/meridean.jpg',
                    'state_id' =>  $stateId1,
                     'created_at' => now(),
                     'updated_at' =>  now(),  
                        ],

            [
                'name' => "Eko Hotels & Suites",
                'location' => '1415 Adetokunbo Ademola Street, Victoria Island',
                'description' => "Eko Hotels Limited is located in Lagos and has a playground, 
                barbeque area, and outdoor pool. The hotel offers a restaurant where guests can eat, as well as a terrace and spa. There is free on-site private parking as well as free WiFi.",
                'amenities' => 'Bathroom, Bathtub, Swimming Pool',
                'image_path' => 'images/eko.jpg',
                'state_id' =>  $stateId2,
                'created_at' => now(),
                'updated_at' =>  now(),
                ],
               
                [
                'name' => "The Hills Hotels",
                'location' => '1415 Adetokunbo Ademola Street, Victoria Island',
                'description' => "Eko Hotels Limited is located in Lagos and has a playground, 
                barbeque area, and outdoor pool. The hotel offers a restaurant where guests can eat, as well as a terrace and spa. There is free on-site private parking as well as free WiFi.",
                'amenities' => 'Bathroom, Bathtub, Swimming Pool',
                'image_path' => 'images/hills.jpg',
                'state_id' =>  $stateId2,
                'created_at' => now(),
                'updated_at' =>  now(),
                ],

                [
                    'name' => "Westland Premium Apartment",
                    'location' => 'Westland Premium apartments Rukpokwu Eneka Road',
                    'description' => "The address of the Westland Premium Apartment is Port Harcourt. 
                    This property has free private parking as well as access to a balcony.",
                    'amenities' => 'Bathroom, Bathtub, Swimming Pool',
                    'image_path' => 'images/westland.jpg',
                    'state_id' => $stateId3,
                    'created_at' => now(),
                     'updated_at' =>  now(),
                    ],

                    [
                        'name' => "Portnovo Seaside Hotels",
                        'location' => 'Westland Premium apartments Rukpokwu Eneka Road',
                        'description' => "The address of the Westland Premium Apartment is Port Harcourt. 
                        This property has free private parking as well as access to a balcony.",
                        'amenities' => 'Bathroom, Bathtub, Swimming Pool',
                        'image_path' => 'images/portnovo.jpg',
                        'state_id' => $stateId3,
                        'created_at' => now(),
                         'updated_at' =>  now(),
                        ],

                    [
                        'name' => "Manuex Place Hotel",
                        'location' => ' 209a Jakpa Road Effurun, 320242 Warri',
                        'description' => "The Manuex Place Hotel in Warri has a restaurant, 
                        a fitness center, a patio, and an outdoor pool. The 4-star hotel has free 
                        WiFi, air conditioning, and a bar.",
                        'amenities' => 'Bathroom, Bathtub, Swimming Pool',
                        'image_path' => 'images/manuex.jpg',
                        'state_id' => $stateId4,
                        'created_at' => now(),
                         'updated_at' =>  now(),
                        ],

                        [
                            'name' => "Belview Hotels",
                            'location' => ' 280a Marun Road OgwuashiUkwu, 320242 Asaba',
                            'description' => "The Belview Hotel in Asaba has a restaurant, 
                            a fitness center, a patio, anand a bar.",
                            'amenities' => 'Bathrod an outdoor pool. The 4-star hotel has free 
                            WiFi, air conditioning, om, Bathtub, Swimming Pool',
                            'image_path' => 'images/belview.jpg',
                            'state_id' => $stateId4,
                            'created_at' => now(),
                             'updated_at' =>  now(),
                            ],

                        [
                            'name' => "Golden Sky Hotels & Suites",
                            'location' => 'No 2 Iruka Street,Odume Layout Obosi, 434222 Onitsha',
                            'description' => "Golden Sky Hotels & Suites is located in Onitsha and has a bar. 
                            The 2-star hotel offers free WiFi, air conditioning, and private bathrooms in 
                            addition to a restaurant. ",
                            'amenities' => 'Bathroom, Bathtub, Swimming Pool',
                            'image_path' => 'images/golden.jpg',
                            'state_id' => $stateId5,
                            'created_at' => now(),
                             'updated_at' =>  now(),
                            ],

                            [
                                'name' => "Platinum Suites Hotel & Suites",
                                'location' => 'No 2 Iruka Street,Odume Layout Obosi, 434222 Onitsha',
                                'description' => "Golden Sky Hotels & Suites is located in Onitsha and has a bar. 
                                The 2-star hotel offers free WiFi, air conditioning, and private bathrooms in 
                                addition to a restaurant. ",
                                'amenities' => 'Bathroom, Bathtub, Swimming Pool',
                                'image_path' => 'images/platinum.jpg',
                                'state_id' => $stateId5,
                                'created_at' => now(),
                                 'updated_at' =>  now(),
                                ],

            
         ]);
}
}
