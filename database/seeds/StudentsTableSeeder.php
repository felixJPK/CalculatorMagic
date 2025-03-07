<?php

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //namamodel:methodnya
        // Student::create([
        //     'nim' => '2602160776',
        //     'name' => 'Felix Juwono Purwoko',
        //     'gender' => 'L',
        //     'address' => 'JL. Semar 1A, Jakarta',
        //     'birth_date' => '2005-01-01',
        //     'phone' => '08968079822',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()

        // ]);

        Student::insert([
            'nim' => '2602160771',
            'name' => 'Felix Juwono Purwoko',
            'gender' => 'L',
            'address' => 'JL. Semar 1A, Jakarta',
            'birth_date' => '2005-01-01',
            'phone' => '08968079822',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        Student::insert([
            'nim' => '2602160778',
            'name' => 'Felicia Juwani',
            'gender' => 'P',
            'address' => 'JL. Semangka 1A, Jakarta',
            'birth_date' => '2006-01-01',
            'phone' => '08968079821',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);
        
        Student::insert([
            'nim' => '2602160770',
            'name' => 'Dewa Juwani',
            'gender' => 'P',
            'address' => 'JL. emangka 1A, Jakarta',
            'birth_date' => '2006-01-01',
            'phone' => '08968079821',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);
    }
}
