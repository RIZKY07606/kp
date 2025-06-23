<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sticky Footer Layout')</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Flexbox Setup */
        html, body {
            height: 100%;
            margin: 0;
        }
        
        body {
            display: flex;
            flex-direction: column;
        }
        
        .main-content {
            flex: 1 0 auto;
        }
        
        .footer {
            flex-shrink: 0;
            background-color: #f8f9fa;
            padding: 2rem 0;
        }

        .btn-konsultasi {
        background-color: #8B7B69;
        color: white !important;
        border-radius: 64px;
        padding: 10px 25px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        font-weight: 500;
        white-space: nowrap;
        position: relative;
        overflow: hidden;
        }

        .btn-konsultasi:hover {
        background-color: #756857;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .btn-konsultasi::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: rgba(255,255,255,0.1);
        transform: rotate(45deg);
        transition: all 0.5s ease;
        }

        .btn-konsultasi:hover::after {
            left: 50%;
        }

        /* tampilan mobile */
        @media (max-width: 991px) {
        .btn-konsultasi {
            margin-top: 1rem;
            width: 100%;
            text-align: center;
            }
        }

        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 32px;
            right: 32px;
            z-index: 999;
            background: #8B7B69;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            font-size: 1.7rem;
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
            cursor: pointer;
            transition: background 0.2s;
        }
        #backToTopBtn:hover {
            background: #756857;
        }

        html, body, * {
            font-family: 'Nunito', Arial, sans-serif !important;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="main-content">
        <div class="container py-4">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Back to Top Button -->
    <button id="backToTopBtn" title="Kembali ke atas">&#8679;</button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')

    <script>
    // Back to Top Button
    const backToTopBtn = document.getElementById('backToTopBtn');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopBtn.style.display = 'block';
        } else {
            backToTopBtn.style.display = 'none';
        }
    });
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    </script>
</body>
</html>