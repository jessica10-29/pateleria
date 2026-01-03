CREATE DATABASE pasteleria;
USE pasteleria;
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100) NOT NULL,
    estado ENUM('Recepcionado', 'Despachado') NOT NULL,
    pastel_basico INT DEFAULT 0,
    pastel_mediano INT DEFAULT 0,
    pastel_grande INT DEFAULT 0,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
