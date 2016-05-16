<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        factory(\Imoveis\User::class, 2)->create();
//        factory(\Imoveis\Models\State::class, 1)->create();
//        factory(\Imoveis\Models\City::class, 2)->create();

//        factory(\Imoveis\Models\Address::class, 2)->create();

        factory(\Imoveis\Models\Property::class, 2)->create()->each(function ($u) {
            $u->details()->save(factory(\Imoveis\Models\Prop_Detail::class)->create());
        });;
    }
}
