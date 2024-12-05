<!-- footer.php -->
<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> GiveDirectly</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
</footer>
<?php wp_footer(); ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById("navbar-toggle");
        const navMenu = document.querySelector(".nav-menu");

        toggleButton.addEventListener("click", function() {
            navMenu.classList.toggle("active");
        });
    });
</script>
</body>
</html>
