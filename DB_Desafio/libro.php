<?php
class Libro {
    public $autor, $titulo, $edicion, $lugar, $editorial, $ano, $paginas, $notas, $isbn;

    public function __construct($autor, $titulo, $edicion, $lugar, $editorial, $ano, $paginas, $notas, $isbn) {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->edicion = $edicion;
        $this->lugar = $lugar;
        $this->editorial = $editorial;
        $this->ano = $ano;
        $this->paginas = $paginas;
        $this->notas = $notas;
        $this->isbn = $isbn;
    }

    public function guardar($conn) {
        $sql = "INSERT INTO Libros (autor, titulo, edicion, lugar_publicacion, editorial, ano_edicion, paginas, notas, isbn)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $this->autor, $this->titulo, $this->edicion,
            $this->lugar, $this->editorial, $this->ano,
            $this->paginas, $this->notas, $this->isbn
        ]);
    }
}
?>