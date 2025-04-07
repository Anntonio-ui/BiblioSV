<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Academia de Idiomas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-white to-teal-50 min-h-screen p-8 font-sans">
    <h1 class="text-4xl font-bold text-center text-indigo-700 mb-10 flex justify-center items-center gap-3">
        <i data-lucide="graduation-cap" class="w-8 h-8 text-indigo-500"></i>
        Academia de Idiomas
    </h1>

    <div class="grid md:grid-cols-3 gap-8">
        <?php
        $alumnos = [
            'Básico' => ['Inglés' => 25, 'Francés' => 10, 'Mandarín' => 8, 'Ruso' => 12, 'Portugués' => 30, 'Japonés' => 90],
            'Intermedio' => ['Inglés' => 15, 'Francés' => 10, 'Mandarín' => 5, 'Ruso' => 2, 'Portugués' => 4, 'Japonés' => 1],
            'Avanzado' => ['Inglés' => 8, 'Francés' => 4, 'Mandarín' => 15, 'Ruso' => 10, 'Portugués' => 25, 'Japonés' => 67],
        ];

        $iconos_niveles = [
            "Básico" => "book",
            "Intermedio" => "book-open",
            "Avanzado" => "library"
        ];

        $iconos_idiomas = [
            "Inglés" => "flag",
            "Francés" => "flag",
            "Mandarín" => "globe",
            "Ruso" => "globe",
            "Portugués" => "flag",
            "Japonés" => "globe"
        ];

        function mostrarAlumnos($datos, $niveles, $idiomas) {
            foreach ($datos as $nivel => $idiomas_nivel) {
                $iconNivel = $niveles[$nivel];
                echo "<div class='bg-white shadow-2xl rounded-2xl p-6 border border-indigo-100 hover:scale-105 transition-all duration-300'>";
                echo "<h2 class='text-2xl font-semibold text-indigo-600 mb-4 flex items-center gap-2'>
                        <i data-lucide='$iconNivel' class='w-6 h-6 text-indigo-400'></i> Nivel $nivel
                      </h2><ul class='space-y-2'>";
                foreach ($idiomas_nivel as $idioma => $cantidad) {
                    $iconIdioma = $idiomas[$idioma];
                    echo "<li class='flex items-center justify-between px-3 py-2 bg-indigo-50 rounded-lg shadow-sm'>
                            <span class='flex items-center gap-2 text-gray-700'>
                                <i data-lucide='$iconIdioma' class='w-5 h-5 text-indigo-500'></i> $idioma
                            </span>
                            <span class='text-sm text-gray-500 flex items-center gap-1'>
                                <i data-lucide='users' class='w-4 h-4'></i> $cantidad alumnos
                            </span>
                          </li>";
                }
                echo "</ul></div>";
            }
        }

        mostrarAlumnos($alumnos, $iconos_niveles, $iconos_idiomas);
        ?>
    </div>

    <footer class="mt-16 text-center text-sm text-gray-400 flex items-center justify-center gap-2">
        <i data-lucide="heart" class="w-4 h-4 text-pink-400"></i>
        Hecho con PHP, Tailwind y Lucide Icons
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
