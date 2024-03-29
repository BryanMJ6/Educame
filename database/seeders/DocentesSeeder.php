<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $departamento = [
            'Usulután',
            'San Miguel',
            'La Unión',
            'Usulután',
            'San Miguel',
            'La Unión',
            'San Miguel',
            'Usulután',
            'La Unión',
            'Usulután',
            'San Miguel',
            'La Unión',
            'San Miguel',
            'Usulután',
            'La Unión',
            'Usulután',
            'San Miguel',
            'La Unión',
            'San Miguel',
            'Usulután',
        ];


        $nombre1 = [
            'Ana',
            'Luis',
            'María',
            'Juan',
            'Elena',
            'Pedro',
            'Luisa',
            'Andrés',
            'Laura',
            'Diego',
            'Sofía',
            'Carlos',
            'Valeria',
            'Javier',
            'Carolina',
            'Mario',
            'Valentina',
            'Felipe',
            'Camila',
            'Jose',
        ];

        $nombre2 = [
            'Sofia',
            'Antonio',
            'Isabel',
            'Carlos',
            'Valentina',
            'Alejandro',
            'Fernanda',
            'Esteban',
            'Beatriz',
            'Arturo',
            'Gabriela',
            'Manuel',
            'Lorena',
            'Mauricio',
            'Patricia',
            'Ernesto',
            'Mariana',
            'Ignacio',
            'Renata',
            'Luis',
        ];

        $apellido1 = [
            'Rodriguez',
            'Gonzalez',
            'Ramirez',
            'Hernandez',
            'Lopez',
            'Mendoza',
            'Martinez',
            'Cruz',
            'Castillo',
            'Perez',
            'Soto',
            'Fernandez',
            'Torres',
            'Ramos',
            'Mora',
            'Guzman',
            'Silva',
            'Morales',
            'Rivera',
            'Ortiz',
        ];

        $apellido2 = [
            'Perez',
            'Martinez',
            'Castro',
            'Lopez',
            'Soto',
            'Rios',
            'Flores',
            'Torres',
            'Rivera',
            'Estrada',
            'Garcia',
            'Herrera',
            'Diaz',
            'Silva',
            'Vargas',
            'Jimenez',
            'Munoz',
            'Chavez',
            'Sandoval',
            'Nunez',
        ];

        $edades = [
            '1992-02-14',
            '1980-11-27',
            '1995-08-09',
            '1973-03-22',
            '1988-10-30',
            '1970-06-12',
            '1984-05-01',
            '1996-12-18',
            '1977-06-24',
            '1993-04-03',
            '1972-10-17',
            '1991-02-14',
            '1979-08-02',
            '1970-10-12',
            '1989-07-08',
            '1982-06-19',
            '1995-04-21',
            '1971-09-28',
            '1989-01-31',
            '1976-03-26',
        ];


        $generos = [
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
            'Femenino',
            'Masculino',
        ];

        $titulacion = [
            'Matemáticas',
            'Lengua y Literatura',
            'Ciencias Naturales',
            'Historia',
            'Geografía',
            'Educación Física',
            'Educación Artística',
            'Tecnología',
            'Inglés',
            'Música',
            'Ética y Ciudadanía',
            'Religión',
            'Ciencias Sociales',
            'Educación Cívica',
            'Formación Cívica y Ética',
            'Ciencias',
            'Física',
            'Química',
            'Biología',
            'Historia Universal'
        ];


        $especialidad = [
            'Matemáticas',
            'Lengua y Literatura',
            'Ciencias Naturales',
            'Historia',
            'Geografía',
            'Educación Física',
            'Educación Artística',
            'Tecnología',
            'Inglés',
            'Música',
            'Ética y Ciudadanía',
            'Religión',
            'Ciencias Sociales',
            'Educación Cívica',
            'Formación Cívica y Ética',
            'Ciencias',
            'Física',
            'Química',
            'Biología',
            'Historia Universal'
        ];


        $dui = [
            '98765432-0',
            '76543210-2',
            '87654321-3',
            '23456781-4',
            '54321678-5',
            '65432187-6',
            '34567812-7',
            '45678123-8',
            '56781234-9',
            '67812345-0',
            '78912345-1',
            '12345678-2',
            '43210987-3',
            '32109876-4',
            '87654321-5',
            '98765432-6',
            '23456781-7',
            '34567812-8',
            '45678123-9',
            '56781234-0',
        ];

        $nup = [
            '98765432',
            '76543210',
            '87654321',
            '23456781',
            '54321678',
            '65432187',
            '34567812',
            '45678123',
            '56781234',
            '67812345',
            '78912345',
            '12345678',
            '43210987',
            '32109876',
            '87654321',
            '98765432',
            '23456781',
            '34567812',
            '45678123',
            '56781234',
        ];

        $acreditado = [
            'Sí',
            'No',
            'Sí',
            'Sí',
            'No',
            'Sí',
            'No',
            'Sí',
            'No',
            'No',
            'Sí',
            'Sí',
            'No',
            'Sí',
            'No',
            'Sí',
            'No',
            'No',
            'Sí',
            'No',
        ];

        $fecha_acreditado = [
            '15/5/2003',
            '27/11/1998',
            '9/8/2015',
            '22/3/2001',
            '30/9/2008',
            '12/7/1995',
            '5/1/2019',
            '18/12/1992',
            '24/6/2017',
            '3/4/2006',
            '17/10/2012',
            '14/2/2005',
            '2/8/1993',
            '10/12/2010',
            '8/7/2009',
            '19/6/1996',
            '21/4/2018',
            '28/9/1997',
            '31/1/2004',
            '26/3/2021',
        ];

        $direccion = [
            'Especialidad Impartida Genérica 1',
            'Especialidad Impartida Genérica 2',
            'Especialidad Impartida Genérica 3',
            'Especialidad Impartida Genérica 4',
            'Especialidad Impartida Genérica 5',
            'Especialidad Impartida Genérica 6',
            'Especialidad Impartida Genérica 7',
            'Especialidad Impartida Genérica 8',
            'Especialidad Impartida Genérica 9',
            'Especialidad Impartida Genérica 10',
            'Especialidad Impartida Genérica 11',
            'Especialidad Impartida Genérica 12',
            'Especialidad Impartida Genérica 13',
            'Especialidad Impartida Genérica 14',
            'Especialidad Impartida Genérica 15',
            'Especialidad Impartida Genérica 16',
            'Especialidad Impartida Genérica 17',
            'Especialidad Impartida Genérica 18',
            'Especialidad Impartida Genérica 19',
            'Especialidad Impartida Genérica 20',
        ];


        $telefonos = [
            '4321-8765',
            '5678-1234',
            '9876-4321',
            '2143-7658',
            '8765-3412',
            '5432-9876',
            '3456-7890',
            '6789-4567',
            '2345-8761',
            '7890-1234',
            '6543-8765',
            '4321-5678',
            '9876-2143',
            '1234-6789',
            '8765-3412',
            '3456-8910',
            '6789-4576',
            '2345-8617',
            '7890-1345',
            '6543-7658',
        ];

        $correo = [
            'ana@gmail.com',
            'luis@gmail.com',
            'maria@gmail.com',
            'juan@gmail.com',
            'elena@gmail.com',
            'pedro@gmail.com',
            'luisa@gmail.com',
            'andres@gmail.com',
            'laura@gmail.com',
            'diego@gmail.com',
            'sofia@gmail.com',
            'carlos@gmail.com',
            'valeria@gmail.com',
            'javier@gmail.com',
            'carolina@gmail.com',
            'mario@gmail.com',
            'valentina@gmail.com',
            'felipe@gmail.com',
            'camila@gmail.com',
            'jose@gmail.com',
        ];

        $correo_inst = [
            'ana@institucion.org',
            'luis@institucion.org',
            'maria@institucion.org',
            'juan@institucion.org',
            'elena@institucion.org',
            'pedro@institucion.org',
            'luisa@institucion.org',
            'andres@institucion.org',
            'laura@institucion.org',
            'diego@institucion.org',
            'sofia@institucion.org',
            'carlos@institucion.org',
            'valeria@institucion.org',
            'javier@institucion.org',
            'carolina@institucion.org',
            'mario@institucion.org',
            'valentina@institucion.org',
            'felipe@institucion.org',
            'camila@institucion.org',
            'jose@institucion.org',
        ];



        for ($i = 0; $i < count($nombre1); $i++) {
            DB::table('docentes')->insert([
                'departamento' => $departamento[$i],
                'PrimerNombre' => $nombre1[$i],
                'SegundoNombre' => $nombre2[$i],
                'PrimerApellido' => $apellido1[$i],
                'SegundoApellido' => $apellido2[$i],
                'Edad' => $edades[$i],
                'Genero' => $generos[$i],
                'EspecialidadTitulacion' => $titulacion[$i],
                'EspecialidadImparte' => $especialidad[$i],
                'DUI' => $dui[$i],
                'NUP' => $nup[$i],
                'Acreditado' => $acreditado[$i],
                'FechaAcreditado' => $fecha_acreditado[$i],
                'Dirreccion' => $direccion[$i],
                'Telefono' => $telefonos[$i],
                'CorreoPersonal' => $correo[$i],
                'CorreoMINED' => $correo_inst[$i],
            ]);
        }
    }
}
