<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;
class SeederPets extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Pet::create([
            'nome' => 'Luna',
            'especie' => 'cachorro',
            'raca' => 'vira-lata',
            'idade' => '10',
            'peso' => '9',
            'porte' => 'pequeno',
            'local' => 'Itanhaém',
            'sobre' => 'Muito fofa',
            'sexo' => 'Feminino',
            'status' => true,

            ]);
            Pet::create([
                'nome' => 'Joe',
                'especie' => 'cachorro',
                'raca' => 'Chiuaua',
                'idade' => '3',
                'peso' => '5',
                'porte' => 'pequeno',
                'local' => 'Rio de Janeiro',
                'sobre' => 'Adorável',
                'sexo' => 'Feminino',
                'status' => true,
            ]);
    
            Pet::create([
                'nome' => 'Max',
                'especie' => 'cachorro',
                'raca' => 'Bulldog',
                'idade' => '4',
                'peso' => '23',
                'porte' => 'médio',
                'local' => 'Fortaleza',
                'sobre' => 'Bulldog carinhoso e leal',
                'sexo' => 'Masculino',
                'status' => true,
            ]);
            
            Pet::create([
                'nome' => 'Mia',
                'especie' => 'gato',
                'raca' => 'Siamese',
                'idade' => '2',
                'peso' => '5',
                'porte' => 'pequeno',
                'local' => 'Salvador',
                'sobre' => 'Gata siamesa brincalhona',
                'sexo' => 'Feminino',
                'status' => true,
            ]);
    
            Pet::create([
                'nome' => 'Rocky',
                'especie' => 'cachorro',
                'raca' => 'Dálmata',
                'idade' => '1',
                'peso' => '20',
                'porte' => 'médio',
                'local' => 'Brasília',
                'sobre' => 'Dálmata energético e amigável',
                'sexo' => 'Masculino',
                'status' => true,
            ]);
    
            Pet::create([
                'nome' => 'Coco',
                'especie' => 'cachorro',
                'raca' => 'Chihuahua',
                'idade' => '3',
                'peso' => '2',
                'porte' => 'pequeno',
                'local' => 'Recife',
                'sobre' => 'Chihuahua pequeno e brincalhão',
                'sexo' => 'Masculino',
                'status' => true,
            ]);
    

    }
}
