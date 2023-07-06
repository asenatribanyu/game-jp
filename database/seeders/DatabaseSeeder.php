<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Question;
use App\Models\Score;
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
            'Question'=>'地図 (peta)',
            'Options_1'=>'ちす',
            'Options_2'=>'ちず',
            'Options_3'=>'ちづ',
            'Options_4'=>'ちつ',
            'Answer'=>'ちず',
        ]);

        Question::create([
            'Question'=>'自動車 (mobil)',
            'Options_1'=>'じどさ',
            'Options_2'=>'じどうさ',
            'Options_3'=>'じどしゃ',
            'Options_4'=>'じどうしゃ',
            'Answer'=>'じどうしゃ',
        ]);

        Question::create([
            'Question'=>'1 bulan dalam bahasa jepang ?',
            'Options_1'=>'Sangkagetsu',
            'Options_2'=>'Yongkagetsu',
            'Options_3'=>'Ikkagetsu',
            'Options_4'=>'Futsuka',
            'Answer'=>'Ikkagetsu',
        ]);
        // Score::create([
        //     'ip_address'=>'127.0.0.1',
        //     'quiz_attempt'=> '1',
        //     'question_id' => '1',
        //     'is_correct' => '1'
        // ]);
        // Score::create([
        //     'ip_address'=>'127.0.0.1',
        //     'quiz_attempt'=> '1',
        //     'question_id' => '2',
        //     'is_correct' => '1'
        // ]);
        // Score::create([
        //     'ip_address'=>'127.0.0.1',
        //     'quiz_attempt'=> '1',
        //     'question_id' => '3',
        //     'is_correct' => '1'
        // ]);
        
    }
}
