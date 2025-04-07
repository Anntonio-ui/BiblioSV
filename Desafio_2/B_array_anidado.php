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
            [25, 10, 8, 12, 30, 90],  // Básico
            [15, 10, 5, 2, 4, 1],     // Intermedio
            [8, 4, 15, 10, 25, 67]    // Avanzado
        ];

        $niveles = ["Básico", "Intermedio", "Avanzado"];
        $iconos_niveles = ["book", "book-open", "library"];
        $idiomas = ["Inglés", "Francés", "Mandarín", "Ruso", "Portugués", "Japonés"];
        $iconos_idiomas = ["flag", "flag", "globe", "globe", "flag", "globe"];

        for ($i = 0; $i < count($alumnos); $i++) {
            echo "<div class='bg-white shadow-2xl rounded-2xl p-6 border border-indigo-100 hover:scale-105 transition-all duration-300'>";
            echo "<h2 class='text-2xl font-semibold text-indigo-600 mb-4 flex items-center gap-2'>
                    <i data-lucide='{$iconos_niveles[$i]}' class='w-6 h-6 text-indigo-400'></i> Nivel {$niveles[$i]}
                  </h2><ul class='space-y-2'>";
            for ($j = 0; $j < count($alumnos[$i]); $j++) {
                echo "<li class='flex items-center justify-between px-3 py-2 bg-indigo-50 rounded-lg shadow-sm'>
                        <span class='flex items-center gap-2 text-gray-700'>
                            <i data-lucide='{$iconos_idiomas[$j]}' class='w-5 h-5 text-indigo-500'></i> {$idiomas[$j]}
                        </span>
                        <span class='text-sm text-gray-500 flex items-center gap-1'>
                            <i data-lucide='users' class='w-4 h-4'></i> {$alumnos[$i][$j]} alumnos
                        </span>
                      </li>";
            }
            echo "</ul></div>";
        }
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
