<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bakery UMKM</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="brand">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <span>Simply Bread</span>
    </div>

    <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

</nav>

<!-- HERO -->
<section class="hero" id="home">
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>Fresh Bakery.<br>Made With Love.</h1>

        <p>
            Roti dan pastry artisan yang dipanggang setiap hari
            dengan bahan berkualitas dan rasa yang jujur.
        </p>

        <div class="hero-buttons">
            <a href="#products" class="btn-primary">Shop Now</a>
            <a href="#about" class="btn-outline">Learn More</a>
        </div>
    </div>
</section>


<!-- VALUE PROPOSITION -->
<section class="values">
    <div class="value-item">
        <h3>Fresh Daily</h3>
        <p>Dipanggang setiap pagi tanpa stok lama.</p>
    </div>
    <div class="value-item">
        <h3>Premium Ingredients</h3>
        <p>Menggunakan bahan pilihan berkualitas tinggi.</p>
    </div>
    <div class="value-item">
        <h3>Handcrafted</h3>
        <p>Dibuat dengan tangan oleh baker berpengalaman.</p>
    </div>
</section>

<!-- BEST SELLER -->
<section class="best-seller" id="best-seller">
    <h2>Best Seller</h2>

    <div class="product-grid">
        <div class="product-card">
            <img src="{{ asset('images/croissant.jpg') }}" alt="Butter Croissant">
            <h4>Butter Croissant</h4>
            <span class="price">Rp 18.000</span>
            <p>Renya di luar, lembut di dalam</p>
            <a href="#" class="btn-detail">Detail</a>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/croissant.jpg') }}" alt="Chocolate Danish">
            <h4>Chocolate Danish</h4>
            <span class="price">Rp 22.000</span>
            <p>Coklat premium Belgia</p>
            <a href="#" class="btn-detail">Detail</a>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/croissant.jpg') }}" alt="Sourdough Bread">
            <h4>Sourdough Bread</h4>
            <span class="price">Rp 35.000</span>
            <p>Fermentasi alami 24 jam</p>
            <a href="#" class="btn-detail">Detail</a>
        </div>

        <!-- contoh tambahan biar penuh -->
        <div class="product-card">
            <img src="{{ asset('images/croissant.jpg') }}" alt="Brioche">
            <h4>Brioche</h4>
            <span class="price">Rp 25.000</span>
            <p>Lembut & buttery</p>
            <a href="#" class="btn-detail">Detail</a>
        </div>
    </div>
</section>


<section class="about about-bg" id="about">
    <div class="about-overlay"></div>

    <div class="about-container">
        <div class="about-text">
            <h2>About Our Bakery</h2>
            <p>
                Kami adalah bakery lokal yang berfokus pada kualitas,
                rasa, dan proses yang jujur. Setiap roti dan pastry
                dipanggang setiap hari dengan bahan pilihan dan tanpa
                kompromi.
            </p>
            <p>
                Dari dapur kecil hingga ke meja Anda,
                kami ingin menghadirkan kehangatan dalam setiap gigitan.
            </p>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section class="products" id="products">
    <h2>Our Products</h2>

    <div class="slider-wrapper">
        <!-- PANAH KIRI -->
        <button class="slider-btn left" onclick="slideLeft()">&#10094;</button>

        <!-- SLIDER -->
        <div class="product-slider" id="productSlider">
            <div class="product-card">
                <img src="{{ asset('images/croissant.jpg') }}">
                <h4>Butter Croissant</h4>
                <span class="price">Rp 18.000</span>
                <p>Renya dan buttery</p>
                <a href="#" class="btn-detail">Detail</a>
            </div>

            <!-- DUPLIKASI JADI 15 -->
            <!-- kamu bisa ganti nama & harga -->
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Chocolate Danish</h4><span class="price">Rp 22.000</span><p>Coklat premium</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Sourdough</h4><span class="price">Rp 35.000</span><p>Fermentasi alami</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Brioche</h4><span class="price">Rp 25.000</span><p>Lembut & kaya rasa</p><a href="#" class="btn-detail">Detail</a></div>

            <!-- copy sampai 15 -->
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Almond Croissant</h4><span class="price">Rp 24.000</span><p>Kacang almond</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Pain au Chocolat</h4><span class="price">Rp 23.000</span><p>Coklat lumer</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Milk Bun</h4><span class="price">Rp 15.000</span><p>Lembut manis</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Garlic Bread</h4><span class="price">Rp 18.000</span><p>Gurih harum</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Cheese Roll</h4><span class="price">Rp 20.000</span><p>Keju premium</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Whole Wheat</h4><span class="price">Rp 30.000</span><p>Sehat & padat</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Cinnamon Roll</h4><span class="price">Rp 22.000</span><p>Aroma kayu manis</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Bagel</h4><span class="price">Rp 17.000</span><p>Kenyal legit</p><a href="#" class="btn-detail">Detail</a></div>
            <div class="product-card"><img src="{{ asset('images/croissant.jpg') }}"><h4>Focaccia</h4><span class="price">Rp 28.000</span><p>Olive oil</p><a href="#" class="btn-detail">Detail</a></div>
        </div>

        <!-- arrow kanan -->
        <button class="slider-btn right" onclick="slideRight()">&#10095;</button>
    </div>
</section>


<!-- CONTACT -->
<!-- CONTACT / FOOTER -->
<section class="contact-footer" id="contact">
    <div class="contact-container">

        <!-- BRAND -->
        <div class="contact-col">
            <h3>Simply Bread</h3>
            <p>
                Menyediakan roti dan pastry segar setiap hari
                dengan bahan berkualitas dan proses terbaik.
            </p>
        </div>

        <!-- PAGE -->
        <div class="contact-col">
            <h4>Page</h4>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <!-- SOCIALS -->
        <div class="contact-col">
            <h4>Socials</h4>
            <ul>
                <li><a href="#">Instagram : @simply.bread</a></li>
                <li><a href="#">Facebook : Simply Bread</a></li>
                <li><a href="#">TikTok : @simplybread</a></li>
            </ul>
        </div>

        <!-- CONTACT INFO -->
        <div class="contact-col">
            <h4>Contact</h4>
            <p>info@simplybread.com</p>
            <p>+62 812-3456-7890</p>
        </div>

    </div>
</section>

<footer class="footer">
    <p>© 2026 Simply Bread. All Rights Reserved.</p>
</footer> 

<!-- FLOATING WHATSAPP -->
<a href="https://wa.me/623891617129" class="whatsapp-float" target="_blank">
    <img src="{{ asset('images/wa.png') }}" alt="WhatsApp">
</a>

<script>
    const slider = document.getElementById('productSlider');

    function slideLeft() {
        slider.scrollBy({
            left: -320,
            behavior: 'smooth'
        });
    }

    function slideRight() {
        slider.scrollBy({
            left: 320,
            behavior: 'smooth'
        });
    }
</script>

</body>
</html>
