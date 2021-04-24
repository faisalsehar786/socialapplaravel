<?php

use App\AdminUser;
use Illuminate\Database\Seeder;
use App\Role;
use App\Settings;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
           'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);




        $user_id = 1;
        Role::create([
           'role' => 'Seller',
            'status' => 1,
            'user_id' => $user_id,
        ]);

        $user_id = 1;
        Role::create([
           'role' => 'Buyer',
            'status' => 1,
            'user_id' => $user_id,
        ]);


         DB::update("ALTER TABLE users AUTO_INCREMENT =2;");



          Settings::create([
        'headerlogo'=>'none',
        'footerlogo'=>'none', 
        'optional_logo'=>'none',
        'backgroundcolor'=>'none',
        'buttoncolor'=>'none',
        'borderpanelcolor'=>'none',
        'sectioncolor'=>'none',
        'footrtext'=>'none',
        'copyright_text'=>'none',
        'fblink'=>'none',
        'mslink'=>'none',
        'login_page_meta'=>'none',
        'after_login_page_meta'=>'none',
        'mangelinks_page_meta'=>'none',
        'customize_page_meta'=>'none',
        'profile_page_meta'=>'none',
        'activation_page_meta'=>'none'
     

     ]);
    }

     
    
}