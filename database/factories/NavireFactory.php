<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NavireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'Nom_Navire' => $this->faker->text(7),
            'Engin_Interne' => $this->faker->text(7),
            
            'Dimension_Navire' => rand(5000,90000),
            'Num_IRCS' => $this->faker->text(7),
            'couleur_Navire' => $this->faker->colorName,
            'Etat_Pavillon' => $this->faker->country,
            'Port_Attache' => $this->faker->text(15),
            'Doc_Navire' => $this->faker->text(15),
            'Pays_originin_Navire' => $this->faker->country,
            'Pays_enregistre_Navire' =>  $this->faker->country,
            'Unique_Vessel_Identifier' => $this->faker->text(7),
            'Length_Overall' => rand(5000,90000),
            'Net_Registered_Tonnage' => rand(250000,600000),
            'Gross_Tonnage' =>rand(250000,600000),
            'Gross_Registered_Tonnage' => rand(25000,60000),
            'Power_of_Main_Engine' =>rand(15000,25000),
            'Power_unit' => $this->faker->text(10),
            'Hull_Material' => $this->faker->text(7),
            'Fish_Hold_Capacity' => rand(1000,60000),
            'Fish_Hold_Type' => $this->faker->text(10),
            'Net_tonnage' => rand(1000,60000),
            'Id_Certificat_Immat' => $this->faker->text(15),
            'Type_Navire' => $this->faker->text(15),
            'societe_id' => rand(1,15),
            'Omi' => $this->faker->text(10),
            'Id_Extern' => $this->faker->text(10),
            'ORGP' => $this->faker->text(10),
            
            
        ];
    }
}
