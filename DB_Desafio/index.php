<?php
include 'conexion.php';
include 'Libro.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $libro = new Libro(
        $_POST['autor'], $_POST['titulo'], $_POST['edicion'],
        $_POST['lugar'], $_POST['editorial'], $_POST['ano'],
        $_POST['paginas'], $_POST['notas'], $_POST['isbn']
    );
    $libro->guardar($conn);
}

$libros = $conn->query("SELECT * FROM Libros")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-50 p-8">
    <h1 class="text-4xl font-bold text-center text-indigo-700 mb-10 flex justify-center gap-3">
        <i data-lucide="library" class="w-8 h-8"></i> Inventario de Biblioteca
    </h1>

    <form method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-white p-6 rounded-xl shadow-lg mb-10">
        <?php
        $campos = [
            'autor' => 'Autor [APELLIDOS, Nombre]',
            'titulo' => 'Título del libro (sin comillas)',
            'edicion' => 'Número de edición',
            'lugar' => 'Lugar de publicación',
            'editorial' => 'Editorial',
            'ano' => 'Año de edición (YYYY)',
            'paginas' => 'Número de páginas',
            'notas' => 'Notas',
            'isbn' => 'ISBN'
        ];
        foreach ($campos as $name => $label) {
            echo "<div>
                    <label class='block text-sm font-medium text-gray-700 mb-1'>$label</label>
                    <input name='$name' required class='w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400' />
                  </div>";
        }
        ?>
        <div class="md:col-span-2 text-right">
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-6 py-2 rounded-lg">
                <i data-lucide="plus-circle" class="inline w-5 h-5 mr-1"></i> Agregar libro
            </button>
        </div>
    </form>

    <div class="grid md:grid-cols-3 gap-6">
        <?php foreach ($libros as $libro): ?>
            <div class="bg-white border border-gray-200 shadow-md rounded-xl p-5">
                <h2 class="text-lg font-bold text-indigo-600 mb-2 flex items-center gap-2">
                    <i data-lucide="book-open" class="w-5 h-5 text-indigo-500"></i> <?= $libro['titulo'] ?>
                </h2>
                <p><strong>Autor:</strong> <?= $libro['autor'] ?></p>
                <p><strong>Edición:</strong> <?= $libro['edicion'] ?>ª</p>
                <p><strong>Lugar:</strong> <?= $libro['lugar_publicacion'] ?></p>
                <p><strong>Editorial:</strong> <?= $libro['editorial'] ?></p>
                <p><strong>Año:</strong> (<?= $libro['ano_edicion'] ?>)</p>
                <p><strong>Páginas:</strong> <?= $libro['paginas'] ?></p>
                <p><strong>Notas:</strong> <?= $libro['notas'] ?></p>
                <p><strong>ISBN:</strong> <?= $libro['isbn'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>