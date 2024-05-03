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

        #nav-toggle {
            color: #fff;
            background-color: #000;
        }

        #nav-toggle .fill-current {
            color: #fff;
        }
    </style>
</head>

<body>

    <nav class="bg-gray-100">
        <div class="container mx-auto px-4 py-6 flex flex-wrap items-center justify-between">
            <div class="flex items-center flex-shrink-0 mr-6">
                <a href="<?= site_url('/'); ?>" class="flex items-center space-x-2">
                    <img src="https://via.placeholder.com/40" alt="Authentification Logo" class="h-8 w-auto">
                    <span class="text-xl font-bold text-gray-800">Authentification</span>
                </a>
            </div>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-500 hover:text-gray-900 hover:border-gray-900">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <div id="nav-content" class="w-full hidden lg:flex lg:items-center lg:w-auto">
                <ul class="lg:flex lg:justify-end space-x-4">
                    <li><a href="<?= site_url('/login'); ?>" class="block px-4 py-2 text-gray-800 hover:text-indigo-600">Connexion</a></li>
                    <li><a href="<?= site_url('/register'); ?>" class="block px-4 py-2 text-gray-800 hover:text-indigo-600">Inscription</a></li>
                </ul>
            </div>
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

    <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            var navContent = document.getElementById('nav-content');
            navContent.classList.toggle('hidden');
        });
    </script>

</body>

</html>