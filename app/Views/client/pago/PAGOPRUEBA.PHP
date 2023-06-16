<!DOCTYPE html>
<html>
<head>
    <title>Visualización de ID de Cita</title>
</head>
<body>
    <h1>Visualización de ID de Cita</h1>
    <?php
    if (isset($idCita)) {
        echo "El ID de la cita es: " . $idCita;
    } else {
        echo "No se encontró el ID de la cita.";
    }
    ?>
</body>
</html>
