<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga Baloncesto</title>
</head>

<body>
    <?php
    require_once('./clases/Equipo.php');
    require_once('./clases/Jugador.php');
    require_once('./clases/Base.php');
    require_once('./clases/Escolta.php');
    require_once('./clases/Alero.php');
    require_once('./clases/AlaPivot.php');
    require_once('./clases/Pivot.php');



    $base = new Base(1, 'Pepito', 1.98, 192);
    $escolta = new Escolta(2, "Pepe", 1.88, 12);
    $alero = new Alero(3, "Juan", 1.88, 12);
    $alaPivot = new AlaPivot(4, "Manuel", 1.89, 22);
    $pivot  = new Pivot(3, "Geronimo", 2, 75);


    $equipo1 = new Equipo("Los Angeles", $base, $escolta, $alero, $alaPivot, $pivot);



    var_dump($base);
    var_dump($escolta);
    var_dump($alero);
    var_dump($alaPivot);
    var_dump($pivot);
    var_dump($equipo1);


    ?>
</body>

</html>