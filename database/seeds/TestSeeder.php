<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Division;
use App\Grade;
use App\ClassDivision;
use App\Teacher;
use App\Student;
use App\Address;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Grade::create([
        //     'id' => '1',
        //     'numeric' => '9',
        // ]);
        // Grade::create([
        //     'id' => '2',
        //     'numeric' => '10',
        // ]);
        // Grade::create([
        //     'id' => '3',
        //     'numeric' => '11',
        // ]);
        // Division::create([
        //     'id' => '1',
        //     'name' => 'A'
        // ]);
        // Division::create([
        //     'id' => '2',
        //     'name' => 'B'
        // ]);
        // Division::create([
        //     'id' => '3',
        //     'name' => 'C'
        // ]);
        // ClassDivision::create([
        //     'id' => '1',
        //     'grade_id' => '1',
        //     'division_id' => '1'
        // ]);
        // ClassDivision::create([
        //     'id' => '2',
        //     'grade_id' => '2',
        //     'division_id' => '1'
        // ]);
        // ClassDivision::create([
        //     'id' => '3',
        //     'grade_id' => '3',
        //     'division_id' => '2'
        // ]);
        // Role::create([
        //     'id' => 1,
        //     'name' => 'admin',
        // ]);
        // Role::create([
        //     'id' => 2,
        //     'name' => 'teacher',
        // ]);
        // Role::create([
        //     'id' => 3,
        //     'name' => 'student',
        // ]);
        
        // User::create([
        //     'id' => '1',
        //     'name' => 'admin',
        //     'email' => 'admin@sms.edu',
        //     'password' => Hash::make('password'),
        //     'role_id' => '1'
        // ]);
        // User::create([
        //     'id' => '2',
        //     'name' => 'teacher1',
        //     'email' => 'teacher1@sms.edu',
        //     'password' => Hash::make('password'),
        //     'role_id' => '1'
        // ]);
        // User::create([
        //     'id' => '3',
        //     'name' => 'teacher2',
        //     'email' => 'teacher2@sms.edu',
        //     'password' => Hash::make('password'),
        //     'role_id' => '1'
        // ]);
        // User::create([
        //     'id' => '4',
        //     'name' => 'teacher3',
        //     'email' => 'teacher3@sms.edu',
        //     'password' => Hash::make('password'),
        //     'role_id' => '1'
        // ]);
        // User::create([
        //     'id' => '5',
        //     'name' => 'Rinzin Dorji',
        //     'email' => 'rinzin@sms.edu',
        //     'password' => Hash::make('password'),
        //     'role_id' => '3',
        // ]);
        // Student::create([
        //     'id' => '1',
        //     'code' => '12180038',
        //     'name' => 'Rinzin Dorji',
        //     'dob' => '2021-03-02',
        //     'age' => '21',
        //     'cid' => '11505000945',
        //     'name_of_previous_school' => 'Bajo Higher Seconday School',
        //     'fathers_name' => 'Ngawang Dorji',
        //     'fathers_contact' => '17262894',
        //     'fathers_address' => '123, MTC Street, Wangdue',
        //     'mothers_name' => 'singay wangmo',
        //     'mothers_contact' => '17332378',
        //     'mothers_address' => '123, MTC Street, Wangdue',
        //     'gurdian_name' => 'Ngawang Dorji',
        //     'gurdian_contact' => '17262894',
        //     'user_id' => '1',
        //     'class_division_id' => '1'
        // ]);
        // Address::create([
        //     'id' => '1',
        //     'student_id' => '1',
        //     'thram_number' => 'MA-50',
        //     'house_number' => 'HOUSE-12',
        //     'village' => 'khaling',
        //     'gewog' => 'bayphug',
        //     'dzongkhag' => 'trashiggang'
        // ]);
        // Teacher::create([
        //     'id' => '1',
        //     'user_id' => '2',
        //     'name' => 'Choki Wangchuk',
        //     'class_division_id' => '1',
        // ]);
        Teacher::create([
            'id' => '2',
            'user_id' => '3',
            'name' => 'Jarna',
            'class_division_id' => '2',
        ]);
        
    }
}