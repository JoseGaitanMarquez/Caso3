<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar habitaciones</title>
    <link rel="stylesheet" href="icon/css/fontello.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="formStyle.css">
</head>
<body>
<main>
    <div class="content-all">
        <header></header>
        <input type="checkbox" id="check">
        <label for="check" class="icon-menu">Menu</label>
        <h2>Hoteles GM</h2>
        <nav class="menu">
            <ul>
                <li><a href="index.html">Inicio</a></li>
            </ul>
        </nav>
        <article>
            <form name="formulario" method="post" action="HabitacionCon.php" enctype="multipart/form-data" class="form">
                <h3 class="form_titulo">Ingresa los siguientes datos</h3>
                <div class="inputs-container">
                    <input type="number" name="habitacion" placeholder="Numero de habitacion" class="inputs">
                    <input type="number" name="piso" placeholder="Piso de ubicacion" class="inputs">
                    <input type="number" name="precio" placeholder="Precio por noche de la habitacion" class="inputs">
                    <input type="text" name="Des" placeholder="Descripcion de la habitacion" class="inputs">
                    <input type="file" name="Foto" class="inputs">
                    <input type="submit" value="Aceptar">
                </div>
            </form>
        </article>
    </div>
</main>
</body>
</html>






