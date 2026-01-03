<?php
include "conexion.php";

// 1. Obtener el ID
$id = $_GET['id'];

// 2. Si el formulario fue enviado, actualizar
if ($_POST) {
    $sql = "UPDATE pedidos SET
        cliente = '{$_POST['cliente']}',
        estado = '{$_POST['estado']}',
        pastel_basico = {$_POST['basico']},
        pastel_mediano = {$_POST['mediano']},
        pastel_grande = {$_POST['grande']}
        WHERE id = $id";

    $conn->query($sql);
    header("Location: index.php");
}

// 3. Consultar datos actuales
$result = $conn->query("SELECT * FROM pedidos WHERE id = $id");
$pedido = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Pedido</title>

<style>
body {
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
    font-family: 'Segoe UI', sans-serif;
    padding: 40px;
}

.form {
    background: white;
    padding: 30px;
    max-width: 420px;
    margin: auto;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

h2 {
    text-align: center;
}

input, select, button {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 10px;
    border: 1px solid #ccc;
}

button {
    background: #ff758c;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background: #ff5f7e;
}
</style>
</head>

<body>

<div class="form">
<h2>✏️ Editar Pedido</h2>

<form method="POST">
<input type="text" name="cliente" value="<?= $pedido['cliente'] ?>" required>

<select name="estado">
    <option <?= $pedido['estado']=="Recepcionado" ? "selected" : "" ?>>Recepcionado</option>
    <option <?= $pedido['estado']=="Despachado" ? "selected" : "" ?>>Despachado</option>
</select>

<input type="number" name="basico" value="<?= $pedido['pastel_basico'] ?>">
<input type="number" name="mediano" value="<?= $pedido['pastel_mediano'] ?>">
<input type="number" name="grande" value="<?= $pedido['pastel_grande'] ?>">

<button>Actualizar Pedido</button>
</form>
</div>

</body>
</html>
