<?php

use Illuminate\Database\Seeder;
Use App\VisitorEntry;

class VisitorEntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visitors=
            [
              [
                'auth_user_num'=>'01777777777',
                'visitor_num'=>'01888888888',
                'status'=>'0'
              ]
            ];
        foreach ($visitors as $key=>$value)
        {
            VisitorEntry::create($value);
        }
    }
}
