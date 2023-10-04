<?php
$parqueVehicular = array(
    'UBN6338' => array(
        'Auto' => array(
            'marca' => 'HONDA',
            'modelo' => 2020,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Alfonzo Esparza',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => 'C.U., Jardines de San Manuel'
        )
    ),
    'UBN6339' => array(
        'Auto' => array(
            'marca' => 'MAZDA',
            'modelo' => 2019,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Ma. del Consuelo Molina',
            'ciudad' => 'Puebla, Pue.',
            'direccion' => '97 oriente'
        )
    ),
    //ggg
    'XYZ1234' => array(
        'Auto' => array(
            'marca' => 'TOYOTA',
            'modelo' => 2022,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'María López',
            'ciudad' => 'Ciudad de México, CDMX',
            'direccion' => 'Colonia Reforma, Calle 123'
        )
        ),
    
    'ABC5678' => array(
        'Auto' => array(
            'marca' => 'FORD',
            'modelo' => 2021,
            'tipo' => 'hatchback'
        ),
        'Propietario' => array(
            'nombre' => 'Juan Pérez',
            'ciudad' => 'Guadalajara, Jalisco',
            'direccion' => 'Avenida Revolución, 456'
        )
        ),
    
    'DEF9012' => array(
        'Auto' => array(
            'marca' => 'NISSAN',
            'modelo' => 2021,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Laura García',
            'ciudad' => 'Monterrey, Nuevo León',
            'direccion' => 'Calle Monterrey, 123'
        )
        ),
    
    'GHI3456' => array(
        'Auto' => array(
            'marca' => 'CHEVROLET',
            'modelo' => 2020,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Carlos Rodríguez',
            'ciudad' => 'Mérida, Yucatán',
            'direccion' => 'Avenida Mérida, 456'
        )
        ),
    
    'JKL7890' => array(
        'Auto' => array(
            'marca' => 'KIA',
            'modelo' => 2019,
            'tipo' => 'hatchback'
        ),
        'Propietario' => array(
            'nombre' => 'Ana Martínez',
            'ciudad' => 'Tijuana, Baja California',
            'direccion' => 'Colonia Playas, Calle 789'
        )
        ),
    
    'MNO1234' => array(
        'Auto' => array(
            'marca' => 'HYUNDAI',
            'modelo' => 2022,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'David Sánchez',
            'ciudad' => 'Cancún, Quintana Roo',
            'direccion' => 'Calle Cancún, 567'
        )
        ),
    
    'PQR5678' => array(
        'Auto' => array(
            'marca' => 'VOLKSWAGEN',
            'modelo' => 2020,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Laura Pérez',
            'ciudad' => 'Toluca, Estado de México',
            'direccion' => 'Avenida Toluca, 890'
        )
        ),
    
    'STU9012' => array(
        'Auto' => array(
            'marca' => 'FORD',
            'modelo' => 2021,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Jorge González',
            'ciudad' => 'Querétaro, Querétaro',
            'direccion' => 'Colonia Centro, Calle 901'
        )
        ),
    
    'VWX3456' => array(
        'Auto' => array(
            'marca' => 'TOYOTA',
            'modelo' => 2019,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'María Rodríguez',
            'ciudad' => 'Guadalajara, Jalisco',
            'direccion' => 'Avenida Guadalajara, 1234'
        )
        ),
    
   'YZA7890'=> array(
        'Auto' => array(
            'marca' => 'MAZDA',
            'modelo' => 2022,
            'tipo' => 'hatchback'
        ),
        'Propietario' => array(
            'nombre' => 'Luis Pérez',
            'ciudad' => 'Ciudad de México, CDMX',
            'direccion' => 'Colonia Roma, Calle 7890'
        )
        ),
    
   'BCD1234' => array(
        'Auto' => array(
            'marca' => 'NISSAN',
            'modelo' => 2021,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Sofía Martínez',
            'ciudad' => 'Monterrey, Nuevo León',
            'direccion' => 'Calle Monterrey, 5678'
        )
        ),
    
    'EFG5678' => array(
        'Auto' => array(
            'marca' => 'HONDA',
            'modelo' => 2020,
            'tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'nombre' => 'Carlos Rodríguez',
            'ciudad' => 'Mérida, Yucatán',
            'direccion' => 'Avenida Mérida, 12345'
        )
        ),
    
    'HIJ9012' => array(
        'Auto' => array(
            'marca' => 'CHEVROLET',
            'modelo' => 2019,
            'tipo' => 'sedan'
        ),
        'Propietario' => array(
            'nombre' => 'Ana Martínez',
            'ciudad' => 'Tijuana, Baja California',
            'direccion' => 'Colonia Playas, Calle 6789'
        )
        ),
    
   
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["matricula"])) {
        $matriculaConsulta = strtoupper($_POST["matricula"]); // Convertir a mayúsculas para que coincida con las claves del arreglo

        if (array_key_exists($matriculaConsulta, $parqueVehicular)) {
            // Si la matrícula existe en el arreglo, mostrar información del auto
            $infoAuto = $parqueVehicular[$matriculaConsulta];
            echo '<h2>Información del Auto:</h2>';
            echo '<pre>';
            print_r($infoAuto);
            echo '</pre>';
        } else {
            echo '<p>No se encontró ningún auto con la matrícula ingresada.</p>';
        }
    } elseif (isset($_POST["mostrar_todos"])) {
        // Si se hace clic en "Mostrar Todos los Autos", mostrar información de todos los autos
        echo '<h2>Información de Todos los Autos:</h2>';
        echo '<pre>';
        print_r($parqueVehicular);
        echo '</pre>';
    }
}
?>
