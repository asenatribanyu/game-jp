<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Question::create([
            'Question'=>'1 bulan dalam bahasa jepang ?',
            'Options_1'=>'Sangkagetsu',
            'Options_2'=>'Yongkagetsu',
            'Options_3'=>'Ikkagetsu',
            'Options_4'=>'Futsuka',
            'Answer'=>'Ikkagetsu',
        ]);

        // Question::create([
        //     'Question'=>'1 bulan dalam bahasa jepang ?',
        //     'Options 1'=>'Sangkagetsu',
        //     'Options 2'=>'Yongkagetsu',
        //     'Options 3'=>'Ikkagetsu',
        //     'Options 4'=>'Futsuka',
        //     'Answer'=>'Ikkagetsu',
        // ]);
    }
}
