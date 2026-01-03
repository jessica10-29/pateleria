<?php
include "conexion.php";

if ($_POST) {
    $sql = "INSERT INTO pedidos (cliente, estado, pastel_basico, pastel_mediano, pastel_grande)
            VALUES (
                '{$_POST['cliente']}',
                '{$_POST['estado']}',
                {$_POST['basico']},
                {$_POST['mediano']},
                {$_POST['grande']}
            )";
    $conn->query($sql);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nuevo Pedido</title>

<style>
body {
    background: linear-gradient(135deg, #ffecd2, #fcb69f);
    font-family: Arial;
    padding: 40px;
}

.form {
    background: white;
    padding: 30px;
    max-width: 400px;
    margin: auto;
    border-radius: 20px;
}

input, select, button {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 10px;
}

button {
    background: #ff758c;
    color: white;
    border: none;
}
</style>
</head>

<body>
<div class="form">
<h2>🍰 Nuevo Pedido</h2>

<form method="POST">
<input type="text" name="cliente" placeholder="Nombre del cliente" required>

<select name="estado">
    <option>Recepcionado</option>
    <option>Despachado</option>
</select>

<input type="number" name="basico" placeholder="Pastel básico" value="0">
<input type="number" name="mediano" placeholder="Pastel mediano" value="0">
<input type="number" name="grande" placeholder="Pastel grande" value="0">

<button>Guardar</button>
</form>
</div>
</body>
</html>
