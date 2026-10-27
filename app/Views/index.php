<?php
$faker = Faker\Factory::create("id_ID");
echo $faker->name();
for ($i = 0; $i < 20; $i++) {
    echo $faker->name() . "<br>";
    echo $faker->email();
    echo "<br><br>";
}
?>