<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Torralbodavid\DuckFunkCore\Models\Arcturus\Bans;
use Torralbodavid\DuckFunkCore\Models\Arcturus\User;
use Torralbodavid\DuckFunkCore\Models\Arcturus\UserSettings;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'rank' => 1,
        'mail' => $faker->email,
        'password' => $faker->password(6, 64),
        'account_created' => $faker->unixTime,
        'ip_register' => $faker->ipv4,
        'ip_current' => $faker->ipv4,
        'last_login' => \Carbon\Carbon::now()->getTimestamp(),
    ];
});

$factory->define(UserSettings::class, function () {
    return [
        'welcome_flow_enabled' => true,
        'welcome_flow_step' => 1,
        'allow_name_change' => true,
        'can_change_name' => true,
    ];
});

$factory->define(Bans::class, function () {
    return [
    ];
});
