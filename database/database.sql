CREATE TABLE IF NOT EXISTS t_usuarios(
    id_usuarios     int(11) auto_increment     NOT NULL,
    nombre          varchar(100)                NOT NULL,
    apellidos       varchar(100)                NOT NULL,
    email           varchar(200)                NOT NULL,
    Password        varchar(255)                NOT NULL,
    rol             varchar(20),
    imagen          varchar(255),
    CONSTRAINT      pk_usuario                  PRIMARY KEY(id_usuarios),
    CONSTRAINT      uq_email                    UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO t_usuarios VALUES(NULL,"admin", "admin", "admin@admin.com", "123", "admin", "imagen");