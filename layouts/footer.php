<footer>
        <div class="container">
            <span>Kvalifikācijas darbs - Oļegs Pašins DP4-1</span>
        </div>
    </footer>
    
</body>

<script src="/js/javascript.js"></script>

<?php 

if (empty($_SESSION['login']) ) {
    echo '<script src="/js/registration.js"></script>';
    echo '<script src="/js/auth.js"></script>';
} else {
    echo '<script src="/js/edit_profile.js"></script>';
}

?>

</html>