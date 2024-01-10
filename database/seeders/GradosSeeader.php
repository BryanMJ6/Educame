<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradosSeeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grado = [
            'Primero',
            'Primero',
            'Primero',
            'Segundo',
            'Segundo',
            'Segundo',
            'Primero',
            'Primero',
            'Primero',
            'Segundo',
            'Segundo',
            'Segundo',
        ];
        
        
        $seccion = [
            'A',
            'B',
            'C',
            'A',
            'B',
            'C',
            'A',
            'B',
            'C',
            'A',
            'B',
            'C',
        ];

        $modalidad = [
            'General',
            'General',
            'General',
            'General',
            'General',
            'General',
            'General',
            'General',
            'General',
            'General',
            'General',
            'General',
        ];

        $ano = [
            '2022',
            '2022',
            '2022',
            '2022',
            '2022',
            '2022',
            '2023',
            '2023',
            '2023',
            '2023',
            '2023',
            '2023',
        ];

        $dapartamento = [
            'Usulután',
            'San Miguel',
            'La Unión',
            'San Miguel',
            'Usulután',
            'San Miguel',
            'La Unión',
            'San Miguel',
            'La Unión',
            'San Miguel',
            'Usulután',
            'La Unión',
        ];
        
        for ($i = 0; $i < count($grado); $i++) {
            DB::table('grados')->insert([
                
                'grado' => $grado[$i],
                'seccion' => $seccion[$i],
                'Modalidad' => $modalidad[$i],
                'ano' => $ano[$i],
                'departamento' => $dapartamento[$i],

            ]);
        }

    
    
    }
}
