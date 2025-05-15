<script>
    // Afficher la flèche seulement après un certain scroll
    window.onscroll = function() { toggleBackToTop() };

    function toggleBackToTop() {
        let button = document.getElementById("backToTop");
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            button.style.display = "flex"; // Affiche le bouton
        } else {
            button.style.display = "none"; // Cache le bouton
        }
    }

    // Fonction pour remonter en haut en douceur
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>
