<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DemandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'Ref' => $this->faker->text(3),
            'Libelle_demande' => $this->faker->text(7),
            'Date_demande' => $this->faker->dateTimeBetween("1980-01-01", "2023-04-30"),
            'Objet_Acces_Port' => $this->faker->text(7),
            'Statut_traitement' =>$this->faker->text(7),
            'Resultat' => rand(0,1),
            'Date_arrivee' => $this->faker->dateTimeBetween("1980-01-01", "2023-04-30"),
            'Date_escale' => $this->faker->dateTimeBetween("1980-01-01", "2023-04-30"),
            'Port' => $this->faker->text(7),
            'Objet_Acces_Port' => $this->faker->text(10),
            'page_demande' => $this->faker->text(10),
            

            'users_id' => rand(1,6),
            'navires_id' => rand(1,6),

        ];
    }
}
