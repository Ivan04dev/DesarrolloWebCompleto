<?php
    # Arreglo asociativo
    $productos = [
        [
            'nombre' => 'Tablet',
            'precio' => 200,
            'disponible' => true
        ],
        [
            'nombre' => 'Television 24"',
            'precio' => 300,
            'disponible' => true
        ],
        [
            'nombre' => 'Monitor Curvo',
            'precio' => 400,
            'disponible' => false
        ]
    ];

    # Ejemplo para recorrer un arreglo asociativo
    foreach($productos as $producto){ ?>
        <ul>
            <li>
                <p>Producto: <?php echo $producto['nombre']; ?></p>
            </li>
            <li>
                <p>Precio: <?php echo $producto['precio']; ?></p>
            </li>
            <li>
                <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No Disponible'; ?></p>
            </li>
        </ul>
    <?php }

    echo "<pre>";
    var_dump($productos);

    # Convierte un arreglo asociativo en una String
    $json = json_encode($productos, JSON_UNESCAPED_UNICODE);

    var_dump($json);

    # Convierte una String en un arreglo asociativo
    $json_array = json_decode($json);

    var_dump($json_array);

    echo "</pre>";
    
?>
