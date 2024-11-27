USE suscripciones_bebidas;

-- Crear la tabla de 'suscriptores' para almacenar los datos de las personas suscritas
CREATE TABLE IF NOT EXISTS suscriptores (
    id_suscriptor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(15) NOT NULL,
    fecha_suscripcion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);