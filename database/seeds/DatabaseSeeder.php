<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $this->truncateTables(array(
                'users',
                'rols',
                'password_resets'
            ));



        $this->call(RolTableSeeder::class);
        $this->call(UserTableSeeder::class);

        Model::reguard();
    }

    private function truncateTables(array $tables)
    {
        
        $this->checkForeingKeys(false);

        foreach ($tables as $table) 
        {
           DB::table($table)->truncate();
        }

        $this->checkForeingKeys(true);
    }

    private function checkForeingKeys($check)
    {
        $op = $check ? '1' : '0';
        DB::statement('SET FOREIGN_KEY_CHECKS = '.$op.';');

    }
}
