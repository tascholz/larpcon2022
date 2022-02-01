<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Tjark',
            'email' => 'tjark@admin.de',
            'password' => Hash::make('testtest'),
            'orga_id' => '1'
        ]);

        DB::table('orgas')->insert([
            'name' => 'Test Orga',
            'description' => 'Beschreibung der Testorga'
        ]);

        DB::table('events')->insert([
            'name' => 'Test Con',
            'orga_id' => '1',
            'description' => 'Beschreibung der Testcon',
            'date_start' => '22-01-21',
            'date_end' => '24-01-21',
            'has_registration' => '1',
            'sc_count' => '50',
            'nsc_count' => '20',
            'sc_price' => '70.00',
            'nsc_price' => '30.00',
            'food_price' => '24.99',

            'reg_first_name' => '1',
            'reg_last_name' => '1',
            'reg_adress' => '1',
            'reg_birthdate' => '1',
            'reg_mail' => '1',
            'reg_supervisor' => '1',

            'reg_char_name' => '1',
            'reg_char_profession' => '1',
            'reg_char_race' => '1',
            'reg_char_group' => '1',
            'reg_known_nsc' => '1',
            'reg_char_history' => '1',
            'reg_char_magic' => '1',

            'reg_allergies' => '1',
            'reg_tents' => '1',
            'reg_pkw' => '1',
            'reg_newsletter' => '1',
            'reg_first_time' => '1',
            'reg_plot_wishes' => '1',
            'reg_con_wishes' => '1',

            'reg_corona' => '1',
            'reg_corona_text' => 'Corona Regeln',
            'reg_agb' => '1',
            'reg_agb_text' => "AGB Text",
            'image_path' => 'public/images/PghGlE9VMQeBwgWi7eYtpE84TrBNWapAjwrEakKA.png',
        ]);

        DB::table('registrations')->insert([
            'event_id' => "1",
            'reg_first_name' => "Timo",
            'reg_last_name' => 'Mustermann',
            'reg_adress_street' => "Musterstrasse 4",
            'reg_adress_pcode' => "25335",
            'reg_adress_city' => "Elmshorn",
            'reg_birthdate' => "1988-03-14",
            'reg_mail' => 'test@test.de',
            'reg_supervisor' => 'keiner',
            'reg_food' => "1",
            'reg_char_name' => "Tjark",
            'reg_char_profession' => 'Streuner',
            'reg_char_race' => 'Mensch',
            'reg_char_group' => 'Rattenpack',
            'reg_known_nsc' => 'keine',
            'reg_char_history' => 'War ein toller Hecht',
            'reg_char_magic' => 'keine',
            'reg_allergies' => 'keine',
            'reg_tents' => '3m Sahara',
            'reg_pkw' => 'WL-DE-21',
            'reg_newsletter' => '1',
            'reg_first_time' => '1',
            'reg_plot_wishes' => 'keine',
            'reg_con_wishes' => 'keine',
            'reg_corona' => '1',
            'reg_agb' => '1'
        ]);


    }
}
