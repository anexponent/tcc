<?php

namespace Database\Seeders\Auth;

use App\Domains\Auth\Models\User;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;
use App\Domains\BioData\Models\Biodata;
/**
 * Class UserTableSeeder.
 */
class UserSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        User::create([
            'type' => User::TYPE_ADMIN,
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => 'secret',
            // 'email_verified_at' => now(),
            'active' => true,
        ]);

        if (app()->environment(['local', 'testing'])) {
            $u = User::create([
                'type' => User::TYPE_USER,
                'name' => 'Test User',
                'email' => 'user@user.com',
                'password' => 'secret',
                // 'email_verified_at' => now(),
                'active' => true,
            ]);
            Biodata::create([
                'age'                   => '18-25',
                'phone'                 => '08022330033',
                'marital_status'        => 'Single',
                'state'                 => 'Osun',
                'local_government'      => 'Irepodun',
                'gender'                => 'Male',
                'highest_education'     => 'Graduate',
                'field'                 => 'Electrical',
                'employement_status'    => 'Employed',
                'biz_coy_name'          => 'GlobalCom',
                'biz_type_job_title'    => 'Technical Support',
                'residential_address'   => 'Kubwa, Abuja',
                'membership_status'     => 'Worker',
                'worker_unit'           => 'Technical',
                'user_id'               => $u->id
            ]);
        }

        $this->enableForeignKeys();
    }
}
