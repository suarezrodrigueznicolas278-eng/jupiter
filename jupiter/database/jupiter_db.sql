CREATE DATABASE IF NOT EXISTS jupiter_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE jupiter_db;

CREATE TABLE IF NOT EXISTS productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(80) NOT NULL,
  descripcion VARCHAR(255) NOT NULL,
  precio DECIMAL(10,2) NOT NULL,
  tipo VARCHAR(40) NOT NULL,
  imagen VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS articulos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(120) NOT NULL,
  resumen VARCHAR(255) NOT NULL,
  imagen VARCHAR(255) NOT NULL,
  fecha DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS testimonios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  autor VARCHAR(80) NOT NULL,
  comentario VARCHAR(255) NOT NULL,
  calificacion TINYINT NOT NULL DEFAULT 5
);

CREATE TABLE IF NOT EXISTS contactos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  mensaje TEXT NOT NULL,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO productos (nombre, descripcion, precio, tipo, imagen) VALUES
('Europa', 'Vino de hielo dulce, ideal para cerrar la cena. Se sirve frío.', 89000, 'Hielo', 'https://picsum.photos/seed/jupiter-europa/600/520'),
('Ío', 'Rosado volcánico, fresco y afrutado con final especiado.', 72000, 'Rosado', 'https://picsum.photos/seed/jupiter-io/600/520'),
('Ganímedes', 'Tinto de cuerpo profundo con notas de cereza negra.', 95000, 'Tinto', 'https://picsum.photos/seed/jupiter-ganimedes/600/520'),
('Calisto', 'Tinto reserva envejecido doce meses en barrica.', 110000, 'Tinto', 'https://picsum.photos/seed/jupiter-calisto/600/520'),
('Amaltea', 'Rosado ligero con aroma a fresa y pétalos.', 68000, 'Rosado', 'https://picsum.photos/seed/jupiter-amaltea/600/520'),
('Himalia', 'Vino de hielo de cosecha tardía, miel y durazno.', 98000, 'Hielo', 'https://picsum.photos/seed/jupiter-himalia/600/520');

INSERT INTO articulos (titulo, resumen, imagen, fecha) VALUES
('Cómo servir un vino de hielo', 'Temperatura, copa y maridajes para disfrutar Europa como se debe.', 'https://picsum.photos/seed/jupiter-blog1/600/420', '2026-10-20'),
('La cosecha de las noches frías', 'Así recogemos las uvas cuando la temperatura cae bajo cero.', 'https://picsum.photos/seed/jupiter-blog2/600/420', '2026-10-05'),
('Postres que combinan con Europa', 'Cinco ideas dulces y una salada para acompañar tu copa.', 'https://picsum.photos/seed/jupiter-blog3/600/420', '2026-09-18');

INSERT INTO testimonios (autor, comentario, calificacion) VALUES
('Camila R.', 'Europa fue el cierre perfecto de nuestra cena. Dulce, fresco y elegante.', 5),
('Andrés M.', 'El diseño de la botella es hermoso y el vino todavía mejor.', 5),
('Laura G.', 'Lo serví con helado de vainilla y fue un éxito total.', 4),
('Sebastián P.', 'Entrega rápida y atención excelente por WhatsApp.', 5),
('Valentina O.', 'Ganímedes tiene un cuerpo increíble. Volveré a pedir.', 5);

INSERT INTO contactos (nombre, email, mensaje) VALUES
('Ana Pérez', 'ana@example.com', 'Hola, quisiera información sobre catas privadas.');
