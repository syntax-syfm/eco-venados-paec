<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Compromiso - Eco-Venados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h1>¡Gracias por tu compromiso, Eco-Venado!</h1>

    <?php
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $grupo = $_POST['grupo'];
        $residuo = $_POST['residuo_frecuente'];
        $separas = $_POST['separas'];
        $accion = $_POST['accion_ambiente'];
        $compromiso = $_POST['compromiso'];
        $comentario = $_POST['comentario'];

        echo "<h2>Resumen de tu registro</h2>";
        echo "<p>Hola <strong>" . $nombre . "</strong> (" . $edad . " años, grupo <strong>" . $grupo . "</strong>), hemos registrado tu participación en el proyecto <strong>PAEC: Eco-Venados Transformando el Entorno</strong>.</p>";

        echo "<p><strong>Residuo que más generas:</strong> " . $residuo . "<br>";
        echo "<strong>Acción que ya realizas:</strong> " . $accion . "<br>";
        echo "<strong>Tu comentario o propuesta:</strong> <em>" . $comentario . "</em></p>";

        echo "<h2>Diagnóstico de tus hábitos</h2>";
        if ($separas == "Si") {
            echo "<p><strong>¡Excelente trabajo!</strong> Ya separas tus residuos en casa. Eres un ejemplo para tu grupo y tu comunidad en Ciudad Juárez.</p>";
            $nivel = "Guardián Eco-Venado (Nivel Oro)";
        } elseif ($separas == "Algunas veces") {
            echo "<p><strong>¡Vas por muy buen camino!</strong> Ya tienes la iniciativa de separar tus desechos; con un poco más de constancia lograrás hacerlo un hábito diario.</p>";
            $nivel = "Explorador Eco-Venado (Nivel Plata)";
        } else {
            echo "<p><strong>¡Hoy es un gran día para empezar!</strong> Aunque todavía no separas tus residuos, dar este primer paso ayudará muchísimo a reducir la basura en nuestra escuela.</p>";
            $nivel = "Iniciado Eco-Venado (Nivel Bronce)";
        }

        echo "<h2>Reto Especial: Calculadora de Impacto Ambiental</h2>";
        echo "<p><strong>Tu rango asignado es:</strong> " . $nivel . "</p>";
        echo "<p>Elegiste el compromiso de: <strong>" . $compromiso . "</strong>. Si cumples este reto durante todo un año (52 semanas), este será tu impacto real:</p>";

        if ($compromiso == "Reducir el uso de plastico") {
            $botellas_anio = 3 * 52;
            echo "<p>Si evitas tan solo 3 envases desechables a la semana, dejarás de generar <strong>" . $botellas_anio . " botellas de plástico al año</strong>, evitando que terminen en los arroyos o diques de nuestra ciudad.</p>";
        } elseif ($compromiso == "Separar residuos") {
            $kilos_anio = 2 * 52;
            echo "<p>Separando apenas 2 kilogramos de basura reciclable por semana, rescatarás <strong>" . $kilos_anio . " kilogramos de materiales al año</strong> para que vuelvan a aprovecharse en lugar de ir al relleno sanitario.</p>";
        } elseif ($compromiso == "Reutilizar materiales") {
            $objetos_anio = 4 * 12;
            echo "<p>Al darle una segunda vida a 4 objetos cada mes (frascos, hojas, ropa o envases), evitarás la fabricación de <strong>" . $objetos_anio . " productos nuevos al año</strong>, ahorrando agua y energía.</p>";
        } elseif ($compromiso == "Participar en campanas") {
            $metros_limpios = 50 * 4;
            echo "<p>Participando en 1 campaña por trimestre (4 al año), ayudarás a limpiar y recuperar aproximadamente <strong>" . $metros_limpios . " metros cuadrados</strong> de áreas verdes en nuestra preparatoria y comunidad.</p>";
        } elseif ($compromiso == "Reciclar aparatos electronicos") {
            $litros_agua = 3000 * 2;
            echo "<p>Al llevar al menos 2 aparatos o pilas viejas a un centro de acopio en el año, evitarás que sus metales pesados contaminen hasta <strong>" . $litros_agua . " litros de agua</strong> del subsuelo.</p>";
        } else {
            echo "<p>Recuerda seleccionar una opción de compromiso en el formulario para calcular tu impacto anual.</p>";
        }

    } else {
        echo "<p>No se recibieron datos. Por favor llena primero el formulario en la portada.</p>";
    }
    ?>

    <p>
        <a href="index.html">Volver a la Portada</a>
    </p>

</body>
</html>
