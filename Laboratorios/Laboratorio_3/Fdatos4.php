<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <form action="insertar.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>Fotografía</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>CU</th>
                    <th>Sexo</th>
                    <th>Carrera</th>
                </tr>
                <tr>
                    <td><input type="file" name="fotografia[]"></td>
                    <td><input type="text" name="nombres[]"></td>
                    <td><input type="text" name="apellidos[]"></td>
                    <td><input type="number" name="cu[]"></td>
                    <td>
                        <label><input type="radio" name="sexo[0]" value="M"> Masculino</label>
                        <label><input type="radio" name="sexo[0]" value="F"> Femenino</label>
                    </td>
                    <td>
                        <select name="carrera[]">
                            <option value="1">Ing. Sistemas</option>
                            <option value="2">Ing. Civil</option>
                            <option value="3">Ing. Eléctrica</option>
                            <option value="4">Ing. Telecomunicaciones</option>
                            <option value="5">Ing. Gas y Petroleo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="file" name="fotografia[]"></td>
                    <td><input type="text" name="nombres[]"></td>
                    <td><input type="text" name="apellidos[]"></td>
                    <td><input type="number" name="cu[]"></td>
                    <td>
                        <label><input type="radio" name="sexo[1]" value="M"> Masculino</label>
                        <label><input type="radio" name="sexo[1]" value="F"> Femenino</label>
                    </td>
                    <td>
                        <select name="carrera[]">
                            <option value="1">Ing. Sistemas</option>
                            <option value="2">Ing. Civil</option>
                            <option value="3">Ing. Eléctrica</option>
                            <option value="4">Ing. Telecomunicaciones</option>
                            <option value="5">Ing. Gas y Petroleo</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="file" name="fotografia[]"></td>
                    <td><input type="text" name="nombres[]"></td>
                    <td><input type="text" name="apellidos[]"></td>
                    <td><input type="number" name="cu[]"></td>
                    <td>
                        <label><input type="radio" name="sexo[2]" value="M"> Masculino</label>
                        <label><input type="radio" name="sexo[2]" value="F"> Femenino</label>
                    </td>
                    <td>
                        <select name="carrera[]">
                        <option value="1">Ing. Sistemas</option>
                            <option value="2">Ing. Civil</option>
                            <option value="3">Ing. Eléctrica</option>
                            <option value="4">Ing. Telecomunicaciones</option>
                            <option value="5">Ing. Gas y Petroleo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="file" name="fotografia[]"></td>
                    <td><input type="text" name="nombres[]"></td>
                    <td><input type="text" name="apellidos[]"></td>
                    <td><input type="number" name="cu[]"></td>
                    <td>
                        <label><input type="radio" name="sexo[3]" value="M"> Masculino</label>
                        <label><input type="radio" name="sexo[3]" value="F"> Femenino</label>
                    </td>
                    <td>
                        <select name="carrera[]">
                            <option value="1">Ing. Sistemas</option>
                            <option value="2">Ing. Civil</option>
                            <option value="3">Ing. Eléctrica</option>
                            <option value="4">Ing. Telecomunicaciones</option>
                            <option value="5">Ing. Gas y Petroleo</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="buttons">
                <button type="submit">Insertar</button>
                <button type="reset">Borrar</button><br>
                <a href="mostrar_alumnos.php">Motrar Alumnos</a> <br>
                <a href="consulta_sexo.php">Motrar por generos</a>
            </div>
        </form>
    </div>
</body>
</html>
 <style>
    * {
    font-family: Arial, sans-serif;
}
.container {
    padding: 20px;
    border: 1px solid;
    width: 80%;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    padding: 8px;
    text-align: center;
}
input[type="text"] {
    width: 120px;
    height: 50px;
}

button {
    background-color: #a0a0a0;
    width: 150px;
    height: 50px;
    border-radius: 5px;
    cursor: pointer;
}
 </style>