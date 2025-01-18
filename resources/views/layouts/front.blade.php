<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @yield('seo')
    <link href="assets-user/img/favicon.png" rel="icon">
    <link href="assets-user/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="assets-user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets-user/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets-user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets-user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="assets-user/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    @yield('content')

    <!-- Preloader -->
    <div id="preloader"></div>

    <script>
        const navLinks = document.querySelectorAll("nav ul li a");

        function setActiveSection() {
            let currentSection = null;

            document.querySelectorAll("section").forEach((section) => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    currentSection = section.id;
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href") === `#${currentSection}`) {
                    link.classList.add("active");
                }
            });
        }

        window.addEventListener("scroll", setActiveSection);
    </script>


    <!-- Vendor JS Files -->
    <script src="assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets-user/vendor/php-email-form/validate.js"></script>
    <script src="assets-user/vendor/aos/aos.js"></script>
    <script src="assets-user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets-user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets-user/js/mapdata.js"></script>
    <script src="assets-user/js/worldmap.js"></script>


    <!-- Main JS File -->
    <script src="assets-user/js/main.js"></script>

</body>

</html>
