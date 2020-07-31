<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    $gender=rand(1,3);
    switch($gender){
        case 1 :$gender= 'male';break;
        case 2 :$gender= 'female';break;
        case 3 :$gender= 'other';break;
    };
    $hobby1=rand(1,10);
    switch ($hobby1){
        case 1: $hobby1='football';break;
        case 2: $hobby1='travel';break;
        case 3: $hobby1='music';break;
        case 4: $hobby1='food';break;
        case 5: $hobby1='billiard';break;
        case 6: $hobby1='pingpong';break;
        case 7: $hobby1='videogames';break;
        case 8: $hobby1='movies';break;
        case 9: $hobby1='writing';break;
        case 10: $hobby1='motorbikes';break;
    }
    $hobby2=rand(1,10);
    switch ($hobby2){
        case 1: $hobby2='pottery';break;
        case 2: $hobby2='hiking';break;
        case 3: $hobby2='running';break;
        case 4: $hobby2='basketball';break;
        case 5: $hobby2='cooking';break;
        case 6: $hobby2='tennis';break;
        case 7: $hobby2='mobilegames';break;
        case 8: $hobby2='television';break;
        case 9: $hobby2='boxing';break;
        case 10: $hobby2='makeup';break;
    }
    $hobby3=rand(1,10);
    switch ($hobby3){
        case 1: $hobby3='manicure';break;
        case 2: $hobby3='drawing';break;
        case 3: $hobby3='bath';break;
        case 4: $hobby3='tea';break;
        case 5: $hobby3='drink';break;
        case 6: $hobby3='smokepot';break;
        case 7: $hobby3='texting';break;
        case 8: $hobby3='rock and roll';break;
        case 9: $hobby3='piano';break;
        case 10: $hobby3='guitar';break;
    }
    $hobbies=implode(', ',[$hobby1,$hobby2,$hobby3]);

    $dob=$faker->date("dS-F-Y",'2000-1-1');
    $zodiac = ucwords( (string) (new Intervention\Zodiac\Calculator)->make($dob));

    //calculate age
    $tz  = new DateTimeZone('Europe/Brussels');
    $age = DateTime::createFromFormat("dS-F-Y", $dob, $tz)
        ->diff(new DateTime('now', $tz))
        ->y;
    return [

        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'gender'=>$gender,
        'about_me'=>$faker->realText(),
        'avatar'=>$faker->image('public/img/profile',480,640,'people',false),
        'dob'=>$dob,
        'age'=>$age,
        'starSign'=>$zodiac,
        'hobbies'=>$hobbies,
        'email'=>$faker->safeEmail,
        'phone'=>$faker->phoneNumber,
        'city'=>$faker->address,
    ];
});
