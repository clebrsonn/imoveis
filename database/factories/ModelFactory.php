<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Imoveis\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(123),
        'remember_token' => str_random(10),
    ];
});


$factory->define(\Imoveis\Models\State::class, function (Faker\Generator $faker) {
    return [
        'UF' => $faker->citySuffix,
        'state_name' => $faker->city,

    ];
});

$factory->define(\Imoveis\Models\City::class, function (Faker\Generator $faker) {
    return [
        'city_name' => $faker->city,
        'state_id' => function () {
            return factory(Imoveis\Models\State::class)->make()->id;
        },
    ];
});

$factory->define(\Imoveis\Models\Address::class, function (Faker\Generator $faker) {
    return [
        'CEP' => $faker->postcode,
        'street' => $faker->address,
        'district' => $faker->streetSuffix,
        'city_id' => function () {
            return factory(\Imoveis\Models\City::class)->make()->id;
        },
    ];
});


$factory->define(\Imoveis\Models\Property::class, function (Faker\Generator $faker) {
    return [
        'number_bedrooms' => 1,
        'number_suites' => 1,
        'area_util' => 1,
        'spaces_garage' => 1,
        'value' => 1.11,
        'number_wc' => 1,
        'iptu_year' => 1.01,
        'cond_month'=> 0,
        'access'=>$faker->streetSuffix,
        'property_description'=>$faker->text(10),
//         => function () {
//            return factory(\Imoveis\Models\Prop_Detail::class)->create()->id;
//        },
    ];
});

$factory->define(Imoveis\Models\Prop_Detail::class, function (Faker\Generator $faker) {
    return [
        'prop_detail' => $faker->firstNameMale,
    ];
});
