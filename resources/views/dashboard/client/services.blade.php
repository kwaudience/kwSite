<?php
// Inclure le fichier de configuration
$chemin = __DIR__ . '/config.php';

if (!file_exists($chemin)) {
    die("<div class='alert alert-danger'>⚠ Erreur : Le fichier de configuration est introuvable.</div>");
}

require_once $chemin;

// Liste des services
$services = [
    "Gestion des accès et sécurité",
    "Surveillance des Menaces",
    "Formation en Cybersécurité",
    "Infogérance",
    "Développement de site web et solutions informatiques",
    "Intégration web et mobile performante",
    "Architecture réseau",
    "Gestion de projet informatique",
    "Conseil et droit numérique"
];
?>

<?php include('header.php'); ?>

<div class="container">
    <h2 class="text-center mt-5">Nos Services</h2>

    <div class="row">
        <?php foreach ($services as $service): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($service); ?></h5>
                        <p class="card-text">Description du service à ajouter ici...</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
   

        <?php endforeach; ?>
    </div>
</div>

<?php include('footer.php'); ?>
