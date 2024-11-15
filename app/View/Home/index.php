<?php

$categories = [
    [
        "name" => "Pizza",
        "icon" => "pizza.png"
    ],
    [
        "name" => "Pasta",
        "icon" => "pasta.png"
    ],
    [
        "name" => "Risotto",
        "icon" => "risotto.png"
    ],
    [
        "name" => "Gelato",
        "icon" => "gelato.png"
    ],
    [
        "name" => "Tiramisu",
        "icon" => "tiramisu.png"
    ],
    [
        "name" => "Buratta",
        "icon" => "buratta.png"
    ],
    [
        "name" => "Bruschetta",
        "icon" => "bruschetta.png"
    ]
];

?>

<!-- navbar -->
<?php
include_once __DIR__ . "/../Components/navbar.php";
?>

<!-- Hero Section Start -->
<div class="hero-homepage-container">
    <div class="hero-homepage">
        <div class="hero-homepage-content">
            <h1 class="title-font-size">
                Selamat Datang di <span class="">ResepoItaliano</span>
            </h1>
            <h2 class="subtitle-font-size">Rasakan Keajaiban Masakan Italia!</h2>
            <p>
                Temukan resep autentik yang akan membawa cita rasa Italia ke dapur
                Anda. Dari pasta yang menggugah selera hingga pizza yang sempurna,
                kami memiliki semua yang Anda butuhkan untuk menciptakan hidangan
                yang lezat dan memukau.
            </p>
            <a href="#" class="normal-font-size">Jelajahi Sekarang</a>
        </div>
    </div>
</div>
<!-- Hero Section End -->
<!-- Categories Section Start -->
<div class="categories-container">
    <div class="categories">
        <h2 class="title-font-size">Kategori</h2>
        <div class="categories-list">
            <div class="category-item">
                <img src="./images/icons/italy.png" alt="Pasta"/>
                <h3 class="subtitle-font-size">Semua</h3>
            </div>
            <?php foreach ($categories as $category): ?>
                <div class="category-item">
                    <img src="./images/icons/<?= $category["icon"] ?>" alt="icon <?= $category["name"] ?>"/>
                    <h3 class="subtitle-font-size"><?= $category["name"] ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Categories Section End -->
<!-- Recipe Section Start -->
<div class="recipes-container">
    <div class="recipes">
        <h2 class="title-font-size">Resep Terbaru</h2>
        <div class="recipes-list">
            <div class="recipe-item">
                <a href="#">
                    <img src="./images/recipes/spaghetti-carbonara.jpeg"
                         alt="Spaghetti Carbonara"/>
                </a>
                <div class="user-recipe">
                    <img src="./images/profiles/zaki-dzulfikar.png" alt="Zaki Dzulfikar Foto Profil"/>
                    <p>Zaki Dzulfikar</p>
                </div>
                <div class="recipe-item-content">
                    <a href="#">
                        <h3 class="subtitle-font-size">Spaghetti Carbonara</h3>
                    </a>
                    <p>
                        Spaghetti | Daging Asap | Telur | Keju Parmesan | Garam | Lada
                    </p>
                </div>
                <div class="recipe-time-past small-font-size">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                    </svg>
                    <span>3 hari yang lalu</span>
                </div>
            </div>
            <div class="recipe-item">
                <a href="#">
                    <img src="./images/recipes/margherita-pizza.jpg"
                         alt="Margherita Pizza"/>
                </a>
                <div class="user-recipe">
                    <img src="./images/profiles/nadia-putri.png" alt="Nadia Putri Foto Profil"/>
                    <p>Nadia Putri</p>
                </div>
                <div class="recipe-item-content">
                    <a href="#">
                        <h3 class="subtitle-font-size">Margherita Pizza</h3>
                    </a>
                    <p>
                        Adonan Pizza | Saus Tomat | Mozzarella | Daun Basil | Garam |
                        Minyak Zaitun
                    </p>
                </div>
                <div class="recipe-time-past small-font-size">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                    </svg>
                    <span>3 hari yang lalu</span>
                </div>
            </div>
            <div class="recipe-item">
                <a href="#">
                    <img src="./images/recipes/tiramisu.jpg" alt="Tiramisu"/>
                </a>
                <div class="user-recipe">
                    <img src="./images/profiles/rizky-pratama.png" alt="Rizky Pratama Foto Profil"/>
                    <p>Rizky Pratama</p>
                </div>
                <div class="recipe-item-content">
                    <a href="#"><h3 class="subtitle-font-size">Tiramisu</h3></a>
                    <p>Mascarpone | Gula | Telur | Kopi | Cokelat Bubuk</p>
                </div>
                <div class="recipe-time-past small-font-size">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                    </svg>
                    <span>3 hari yang lalu</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recipe Section End -->
