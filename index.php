<!DOCTYPE html>
<html lang="id">
<?php 
    // header
    include "komponen/header.php";
?>
<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">
    <?php 
        // navbar
        include "komponen/navbar.php";

        
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        if ($page == 'home') {
            include "komponen/bilbort.php";  
            include "page/home.php";          
        } 
        else if ($page == 'shopall') {
            include "page/shopall.php";      
        } 
        else if ($page == 'detail') {
    include "page/detail.php";
        }

      

        // footer
        include "komponen/footer.php";
    ?>

    <!-- JS -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
