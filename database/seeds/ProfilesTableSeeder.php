<?php
// namespace App\Models\sys;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 1; $i++) { 
            factory(App\Models\sys\Profile::class)->times(1)->create();
        }
        
    }
}
