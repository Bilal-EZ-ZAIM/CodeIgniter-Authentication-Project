<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur CodeIgniter 4 !</title>
    <meta name="description" content="Le petit framework avec des fonctionnalités puissantes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>
        <?php
        $this->renderSection("title");

        ?></title>
    <style>
        .landing {
            min-height: 55vh;
        }
    </style>
</head>

<body>

    <nav class="bg-gray-100">
        <div class="container mx-auto px-4 py-6 flex items-center justify-between">
            <a href="#" class="flex items-center space-x-2">
                <img src="https://via.placeholder.com/40" alt="Authentification Logo" class="h-8 w-auto">
                <span class="text-xl font-bold text-gray-800">Authentification</span>
            </a>
            <ul class="flex justify-end space-x-4">
                <li><a href="login.php" class="text-gray-800 hover:text-indigo-600">Connexion</a></li>
                <li><a href="register.php" class="text-gray-800 hover:text-indigo-600">Inscription</a></li>
            </ul>
        </div>
    </nav>


    <?php
    $this->renderSection("main");
    ?>



    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto text-center">
            <p>Droits d'auteur &copy; 2024 - Nom de votre projet</p>
        </div>
    </footer>

</body>

</html>