<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $user = User::create([

            'username'      => "AhmedKhalifa1",
            'name'          => "Ahmed Khalifa",
            'profile_pic'   => "/assets/images/users/profile-picture.jpeg",
            'cover_pic'     => "/assets/images/users/cover-1.jpg",
            'phone_no'      => "+201112554996",
            'biography'     => "graduated from AAST as BIS student",
            'dob'           => "04/08/1996",
            'gender'        => "male",
            'user_type'     => "admin",
            'address'       => "5th settlement",
            'email'         => "mido.iphone4@gmail.com",
            'password'      => '$2y$10$FkP6DQyOkkiPKdwb2VuWfu37M0UmaaMxHRadJfb6Qm8tHnmEZXv9W' //password is: 1234567890
        ]);

        $user = User::create([

            'username'      => "Kareemtareek1",
            'name'          => "Kareem Tareek",
            'dob'           => "31/05/1999",
            'biography'     => "graduated from AAST as BIS student on 2022",
            'user_type'     => "moderator",
            'address'       => "Nasr City",
            'phone_no'      => "+531351351",
            'gender'        => "male",
            'email'         => "kareem@gmail.com",
            'password'      => '$2y$10$FkP6DQyOkkiPKdwb2VuWfu37M0UmaaMxHRadJfb6Qm8tHnmEZXv9W' //password is: 1234567890
        ]);

        $user = User::create([

            'username'      => "Nadaahmed1",
            'name'          => "Nada Ahmed",
            'dob'           => "26/09/1999",
            'biography'     => "graduated from Azhar as web developer",
            'user_type'     => "supplier",
            'address'       => "26th mayo",
            'phone_no'      => "+35131351",
            'gender'        => "female",
            'email'         => "nada@gmail.com",
            'password'      => '$2y$10$FkP6DQyOkkiPKdwb2VuWfu37M0UmaaMxHRadJfb6Qm8tHnmEZXv9W' //password is: 1234567890
        ]);

        $user = User::create([

            'username'      => "NouranAli1",
            'name'          => "Nouran Ali",
            'dob'           => "04/08/2002",
            'biography'     => "xxxxxxxxxxxx",
            'user_type'     => "customer",
            'address'       => "6th october",
            'phone_no'      => "+6511535135",
            'gender'        => "female",
            'email'         => "customer@gmail.com",
            'password'      => '$2y$10$FkP6DQyOkkiPKdwb2VuWfu37M0UmaaMxHRadJfb6Qm8tHnmEZXv9W' //password is: 1234567890
        ]);
    }
}
