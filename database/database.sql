CREATE DATABASE IF NOT EXISTS tienda;

USE tienda;

CREATE TABLE
    IF NOT EXISTS t_usuarios (
        id_usuario INT (11) auto_increment NOT NULL,
        nombre varchar(100) NOT NULL,
        apellidos varchar(100) NOT NULL,
        email varchar(200) NOT NULL,
        password varchar(255) NOT NULL,
        rol varchar(20),
        imagen varchar(255),
        CONSTRAINT pk_usuario PRIMARY KEY (id_usuario),
        CONSTRAINT uq_email UNIQUE (email)
    ) ENGINE = InnoDb;

INSERT INTO
    t_usuarios
VALUES
    (
        NULL,
        'admin',
        'admin',
        'admin@admin.com',
        '1234',
        'admin',
        'imagen'
    );

CREATE TABLE
    IF NOT EXISTS t_categorias (
        id_categoria INT (11) auto_increment NOT NULL,
        nombre_categoria varchar(100) NOT NULL,
        CONSTRAINT pk_categoria PRIMARY KEY (id_categoria)
    ) ENGINE = InnoDb;

INSERT INTO
    t_categorias
VALUES
    (NULL, 'Construccion'),
    (NULL, 'Electricos'),
    (NULL, 'Pisos');

CREATE TABLE
    IF NOT EXISTS t_productos (
        id_producto INT (11) auto_increment NOT NULL,
        nombre_producto varchar(100) NOT NULL,
        descripcion VARCHAR(200) NOT NULL,
        precio float (10, 2) NOT NULL,
        stock int (11) NOT NULL,
        oferta varchar(50) NOT NULL,
        fecha DATE NOT NULL,
        imagen varchar(255),
        id_categoria INT (11) NOT NULL,
        CONSTRAINT pk_producto PRIMARY KEY (id_producto),
        CONSTRAINT fk_producto_categoria FOREIGN KEY (id_categoria) REFERENCES t_categorias (id_categoria)
    ) ENGINE = InnoDb;

CREATE TABLE
    IF NOT EXISTS t_pedidos (
        id_pedido INT (11) auto_increment NOT NULL,
        id_usuario INT (11) NOT NULL,
        ciudad VARCHAR(50) NOT NULL,
        direccion VARCHAR(50) NOT NULL,
        fecha DATE NOT NULL,
        costo FLOAT (10, 2) NOT NULL,
        estado VARCHAR(50) NOT NULL,
        CONSTRAINT pk_pedido PRIMARY KEY (id_pedido),
        CONSTRAINT fk_pedido_usuario FOREIGN KEY (id_usuario) REFERENCES t_usuarios (id_usuario)
    ) ENGINE = InnoDb;

CREATE TABLE
    IF NOT EXISTS t_detalle_pedido (
        id_detalle_pedido INT (11) auto_increment NOT NULL,
        id_pedido INT (11) NOT NULL,
        id_producto INT (11) NOT NULL,
        unidades INT (11) NOT NULL,
        CONSTRAINT pk_detalle_pedido PRIMARY KEY (id_detalle_pedido),
        CONSTRAINT fk_detalle_pedido FOREIGN KEY (id_pedido) REFERENCES t_pedidos (id_pedido),
        CONSTRAINT fk_detallep_producto FOREIGN KEY (id_producto) REFERENCES t_productos (id_producto)
    ) ENGINE = InnoDb;