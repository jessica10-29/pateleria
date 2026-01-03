<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Pastelería - Pedidos</title>

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
    padding: 40px;
}

.container {
    background: white;
    padding: 30px;
    border-radius: 20px;
    max-width: 1000px;
    margin: auto;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

h1 {
    text-align: center;
}

a {
    text-decoration: none;
    background: #ff758c;
    color: white;
    padding: 8px 14px;
    border-radius: 10px;
    font-size: 14px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background: #ff758c;
    color: white;
}

tr:nth-child(even) {
    background: #f9f9f9;
}

.btn-delete {
    background: #ff4d4d;
}
</style>
</head>

<body>
<div class="container">
<h1>🍰 Pedidos de la Pastelería</h1>

<a href="crear.php">➕ Nuevo Pedido</a>

<table>
<tr>
    <th>Cliente</th>
    <th>Estado</th>
    <th>Básico</th>
    <th>Mediano</th>
    <th>Grande</th>
    <th>Acciones</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM pedidos");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['cliente']}</td>
        <td>{$row['estado']}</td>
        <td>{$row['pastel_basico']}</td>
        <td>{$row['pastel_mediano']}</td>
        <td>{$row['pastel_grande']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>✏️</a>
            <a class='btn-delete' href='eliminar.php?id={$row['id']}'>🗑️</a>
        </td>
    </tr>";
}
?>
</table>
</div>
</body>
</html>
