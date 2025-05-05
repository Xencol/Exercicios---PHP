<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessibilidade</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />

    <script>
        document.addEventListener("DOMContentLoaded", function(){
        const toggle = document.getElementById('menu-toggle');
        const navList = document.getElementById('nav-list');
 
        toggle.addEventListener('click', () => {
            navList.classList.toggle('active');
        });
 
        // Fecha o menu ao clicar em um item
        const navLinks = navList.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navList.classList.remove('active');
            });
        });
    });
</script>
</head>

<body>
       
<div id="flexhead">
    <div id="logodiv">
        <a href="index.php"><img src="IMG/Aska.png" alt="" id="logob"></a>
    </div>

    <nav class="navbar">
            <div class="menu-toggle" id="menu-toggle"><span class="material-symbols-outlined">menu</span></div>
            <ul class="nav-list" id="nav-list">
            <li><a href="hostgratuita.php">Host Gratuita</a></li>
            <li><a href="hostpaga.php">Host Paga</a></li>
            <li><a href="seo-chaves.php">SEO</a></li>
            </ul>
        </nav>  

    <div id="navb">
        <button onclick="document.location='hostgratuita.php'">HOST GRATUITA</button>
        <button onclick="document.location='hostpaga.php'">HOST PAGA</button>
        <button onclick="document.location='seo-chaves.php'">SEO</button>
    </div>
</div>

<div id="corpo">

    
