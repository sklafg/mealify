<?php

use Illuminate\Database\Seeder;

use App\Ingredient;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create( [
            'name'     => 'Sugar',
            'unit'     => 'g',
            'price'    => 0.5,
            'count_by' => 100
        ] );

        Ingredient::create( [
            'name'     => 'Flour',
            'unit'     => 'g',
            'price'    => 0.5,
            'count_by' => 100
        ] );

        Ingredient::create( [
            'name'     => 'Eggs',
            'unit'     => 'Egg',
            'price'    => 0.32,
            'count_by' => 1
        ] );

        Ingredient::create( [
            'name'     => 'Butter',
            'unit'     => 'g',
            'price'    => 0.8,
            'count_by' => 100
        ] );

        Ingredient::create( [
            'name'     => 'Chocolate',
            'unit'     => 'g',
            'price'    => 1.2,
            'count_by' => 100
        ] );

        Ingredient::create( [
            'name'     => 'Milk',
            'unit'     => 'l',
            'price'    => 0.6,
            'count_by' => 1
        ] );

        Ingredient::create( [
            'name'     => 'Noodles',
            'unit'     => 'g',
            'price'    => 0.8,
            'count_by' => 500
        ] );

        Ingredient::create( [
            'name'     => 'Tomatoes',
            'unit'     => 'g',
            'price'    => 0.8,
            'count_by' => 100
        ] );

        Ingredient::create( [
            'name'     => 'Garlic',
            'unit'     => 'g',
            'price'    => 0.8,
            'count_by' => 100
        ] );

        Ingredient::create( [
            'name'     => 'Cheese',
            'unit'     => 'g',
            'price'    => 0.8,
            'count_by' => 100
        ] );
    }
}
