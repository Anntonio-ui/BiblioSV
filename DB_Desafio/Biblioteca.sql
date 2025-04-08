CREATE DATABASE Biblioteca;
USE Biblioteca;

CREATE TABLE Libros (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único para cada libro
    autor VARCHAR(100),                -- Autor del libro
    titulo VARCHAR(200),               -- Título del libro
    edicion INT,                       -- Número de edición
    lugar_publicacion VARCHAR(100),    -- Ciudad de publicación
    editorial VARCHAR(100),            -- Editorial
    ano_edicion INT,                   -- Año de la edición
    paginas INT,                       -- Número de páginas
    notas VARCHAR(255),                -- Notas sobre la edición
    isbn VARCHAR(20)                   -- Número ISBN
);