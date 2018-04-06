<?php
/**
 * Created by PhpStorm.
 * User: varnelle
 * Date: 4/5/18
 * Time: 9:41 PM
 */

use Faker\Generator as Faker;
$factory->define(App\Question::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});