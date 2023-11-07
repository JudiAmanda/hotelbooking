<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotelId1 = \DB::table('hotels')->where('name', 'Transcorp Hilton Abuja')->value('id');
        $hotelId11 = \DB::table('hotels')->where('name', 'Meridean Hotels Abuja')->value('id');
        $hotelId2 = \DB::table('hotels')->where('name', 'Eko Hotels & Suites')->value('id');
        $hotelId22 = \DB::table('hotels')->where('name', 'The Hills Hotels')->value('id');
        $hotelId3 = \DB::table('hotels')->where('name', 'Westland Premium Apartment')->value('id');
        $hotelId33 = \DB::table('hotels')->where('name', 'Portnovo Seaside Hotels')->value('id');
        $hotelId4 = \DB::table('hotels')->where('name', 'Manuex Place Hotel')->value('id');
        $hotelId44 = \DB::table('hotels')->where('name', 'Belview Hotels')->value('id');
        $hotelId5 = \DB::table('hotels')->where('name', 'Golden Sky Hotels & Suites')->value('id');
        $hotelId55 = \DB::table('hotels')->where('name', 'Platinum Suites Hotel & Suites')->value('id');
        \DB::table('rooms')->insert([
        
            [
            'type' => "Executive King Room",
            'price' => 1194325,
            'availability' => true,
            'hotel_id' => $hotelId1,
            'created_at' => now(),
            'updated_at' =>  now(),
            ],

            [
                'type' => "Exortic Room",
                'price' => 1194325,
                'availability' => false,
                'hotel_id' => $hotelId1,
                'created_at' => now(),
                'updated_at' =>  now(),
                ],



            [
                'type' => "Deluxe Room",
                'price' => 1194325,
                'availability' => true,
                'hotel_id' => $hotelId11,
                'created_at' => now(),
                'updated_at' =>  now(),
                ],

                [
                    'type' => "Trophy Room",
                    'price' => 1194325,
                    'availability' => true,
                    'hotel_id' => $hotelId11,
                    'created_at' => now(),
                    'updated_at' =>  now(),
                    ],



            [
            'type' =>"Royal Executive Room",
                'price' => 1256406,
                'availability' => true,
                'hotel_id' => $hotelId2,
                'created_at' => now(),
                'updated_at' =>  now(),
                ],


                [
                    'type' =>"Semi Royal Room",
                        'price' => 1256406,
                        'availability' => true,
                        'hotel_id' => $hotelId2,
                        'created_at' => now(),
                        'updated_at' =>  now(),
                        ],

             [
                'type' =>"Studio Suite",
                'price' => 603170,
                 'availability' => true,
                 'hotel_id' => $hotelId22,
                 'created_at' => now(),
                 'updated_at' =>  now(),
                 ],

                 [
                    'type' =>"Safari Suite",
                    'price' => 603170,
                     'availability' => true,
                     'hotel_id' => $hotelId22,
                     'created_at' => now(),
                     'updated_at' =>  now(),
                     ],


         [
            'type' =>"Premium Suite",
            'price' => 1505537,
            'availability' => true,
            'hotel_id' => $hotelId3,
            'created_at' => now(),
            'updated_at' =>  now(),
            ],

            [
                'type' =>"Royal Room",
                'price' => 1505537,
                'availability' => false,
                'hotel_id' => $hotelId3,
                'created_at' => now(),
                'updated_at' =>  now(),
                ],


         [
          'type' =>"2 Bedroom Apartment",
           'price' => 122607,
            'availability' => true,
            'hotel_id' => $hotelId33,
            'created_at' => now(),
            'updated_at' =>  now(),

                ],



                [
                    'type' =>"4 Bedroom En-Suite",
                     'price' => 122607,
                      'availability' => true,
                      'hotel_id' => $hotelId33,
                      'created_at' => now(),
                      'updated_at' =>  now(),
          
                          ],



                [
                    'type' =>"1 Bedroom Apartment",
                     'price' => 158668,
                      'availability' => true,
                      'hotel_id' => $hotelId4,
                      'created_at' => now(),
                      'updated_at' =>  now(),
          
                     ],


                     [
                        'type' =>"Single Room Apartment",
                         'price' => 158668,
                          'availability' => true,
                          'hotel_id' => $hotelId4,
                          'created_at' => now(),
                          'updated_at' =>  now(),
              
                         ],
    


                     [
                        'type' =>"Master Suite",
                         'price' => 158668,
                          'availability' => true,
                          'hotel_id' => $hotelId44,
                          'created_at' => now(),
                          'updated_at' =>  now(),
              
                         ],

                         [
                            'type' =>"Double Room",
                             'price' => 158668,
                              'availability' => true,
                              'hotel_id' => $hotelId44,
                              'created_at' => now(),
                              'updated_at' =>  now(),
                  
                             ],




                     [
                        'type' =>"Family Suite",
                         'price' => 343160,
                          'availability' => true,
                          'hotel_id' => $hotelId5,
                          'created_at' => now(),
                          'updated_at' =>  now(),
              
                              ],

                              [
                                'type' =>"Sapphire Suite",
                                 'price' => 343160,
                                  'availability' => true,
                                  'hotel_id' => $hotelId5,
                                  'created_at' => now(),
                                  'updated_at' =>  now(),
                      
                                      ],
              
                              [
                                  'type' =>"Single Room",
                                   'price' => 200080,
                                    'availability' => true,
                                    'hotel_id' => $hotelId55,
                                    'created_at' => now(),
                                    'updated_at' =>  now(),
                        
                                   ],

                                   [
                                    'type' =>"Double Delight",
                                     'price' => 200080,
                                      'availability' => true,
                                      'hotel_id' => $hotelId55,
                                      'created_at' => now(),
                                      'updated_at' =>  now(),
                          
                                     ],

        
                          

        ]);
    }
}
