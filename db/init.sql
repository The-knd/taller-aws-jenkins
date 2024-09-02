CREATE TABLE IF NOT EXISTS clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  correo VARCHAR(100) NOT NULL,
  telefono VARCHAR(20)
);

INSERT INTO clientes (nombre, correo, telefono) VALUES
('Juan Perez', 'juan.perez@example.com', '123456789'),
('Ana Gomez', 'ana.gomez@example.com', '987654321'),
('Carlos Rodriguez', 'carlos.rodriguez@example.com', '555555555');
