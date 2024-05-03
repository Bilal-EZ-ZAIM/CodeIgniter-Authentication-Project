<!-- STYLES -->



<?php $this->extend("layout/layout") ?>

<?php $this->section("title") ?>
home
<?php $this->endSection("title") ?>


<?php $this->section("main") ?>
<div class="bg-white h-80vh ">
    <header class="py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-gray-900">Bienvenue sur le projet d'authentification CodeIgniter 4</h1>
        </div>
    </header>

    <div class="relative px-4 py-20 bg-gray-100 from-indigo-400 to-purple-600 landing">
        <div class="container mx-auto">
            <main class="text-center text-gray-900">
                <p class="text-lg mb-8">Ceci est un projet d'authentification utilisant CodeIgniter 4.</p>
                <p class="text-lg">Veuillez cliquer sur les liens de connexion ou d'inscription ci-dessus pour continuer.</p>
            </main>
        </div>
    </div>
</div>

<?php $this->endSection("main") ?>

