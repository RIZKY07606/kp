<style>
    .navbar-nav .nav-link {
        transition: all 0.1s ease;
        font-size: 1.1rem; 
    }

    .navbar-nav .nav-link:hover {
        transform: scale(1.05);
        font-weight: 500;
        color: #000000 !important; /* Optional: biru saat hover */
    }

     .navbar-nav .nav-link.active {
        color: #000000 !important;
        font-weight: 500;
    }

    .navbar-brand {
        font-size: 1.2rem; 
    }

</style>


<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/logo.png" alt="Logo" height="30" class="d-inline-block align-text-top">
            Muqsith Living
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }}" href="/portfolio">Portfolio</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('service') ? 'active' : '' }}" href="/service">Service</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
</li>

            </ul>

        <div class="ms-lg-3">
            <a href="/konsultasi" class="btn-konsultasi">
                    Konsultasi Gratis
        </a>
        </div>
    </div>
</nav>