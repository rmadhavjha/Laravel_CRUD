<?php

namespace Database\Seeders;

use App\Models\student;
use Faker\Core\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $students = collect(
//            [
//                [
//                    'name'=>  'sHUBHU',
//                    'city' => 'Nagpur'
//                ],
//                [
//                    'name'=>  'pRANAY',
//                    'city' => 'Nagpur'
//                ],
//                [
//                    'name'=>  'Krutia',
//                    'city' => 'Nagpur'
//                ]
//            ]
//        );
       $json = File::get(path:'database/json/student.json');
       $students = collect(json_decode($json));
        student::create([
        'name'=>  $students->name,
        'city' => $students->city
       ]);

//        $students->each(function ($student){
//           student::insert($student);
//        });

//        student::create([
//          'name'=>  'Madhav',
//        'city' => 'Nagpur'
//        ]);
    }
}
