<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->seedACL();
        $this->seedUsers();
    }

    private function seedACL()
    {
        Artisan::call('app:acl:sync');
    }

    private function seedUsers()
    {
        factory(App\Models\User::class, rand(10, 100))->create();
    }
}
