<?php
// includes/header.php
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aarsh Institute | Transform Your Future</title>
    <meta name="description" content="Aarsh Institute provides premium offline classes and study material to transform your future.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/pandey/assets/css/style.css">

<?php if(isset($page_css)) { ?>
<link rel="stylesheet" href="<?php echo $page_css; ?>">
<?php } ?>
    
    
    <!-- Theme setup before render to prevent flash -->
    <script>
        const savedTheme = localStorage.getItem('theme') || 'dark';
        document.documentElement.setAttribute('data-theme', savedTheme);
    </script>
</head>
<body>
    <!-- Canvas for Particle Background -->
    <canvas id="bg-canvas"></canvas>
    
    <!-- Bubbly Particle Trail Cursor -->
    <div class="bubbly-particle-trail">
        <div class="particles"></div>
    </div>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader-logo">Aarsh Institute</div>
        <div class="loader-bar"></div>
    </div>
