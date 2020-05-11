<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion de habitaciones</title>
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
            <table border="1">
                <thead>
                    <tr>
                        <th>Habitacion</th>
                        <th>Piso</th>
                        <th>Foto</th>
                        <th>Estado</th>
                        <th>Huesped</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                     include "conexion.php";


                    $query = "Select * From habitacion";
                    $resultado= $conectar->query($query);


                    while($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>"; echo $row['Numero']; echo "</td>";
                            echo "<td>"; echo $row['Piso']; echo "</td>";
                            echo "<td>"; echo "<img src='".$row['Foto']."'>"; echo "</td>";
                            echo "<td>"; echo $row['Estado']; echo "</td>";
                            echo "<td>"; echo $row['Huesped']; echo "</td>";
                            echo "<td>"; echo $row['precio']; echo "</td>";
                            echo "<td>"; echo $row['Descripcion']; echo "</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        <article>
    </div>
</main>
</body>
</html>
