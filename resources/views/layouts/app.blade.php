<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic page setup -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UCC IT App')</title>

    {{-- PWA meta tags and manifest configuration --}}
    @PwaHead

    {{-- Bootstrap Icons CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Main global stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Section for page-specific styles --}}
    @yield('extra-css')
</head>
<body>

    <!-- Top navigation banner with menu toggle and logo -->
    <header class="top-banner">
        <button class="menu-toggle" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </button>

        <div class="banner-logo-card">
            <img src="{{ asset('images/logo.png') }}" alt="UCC IT Department" class="banner-logo">
        </div>
    </header>

    <!-- Sidebar navigation menu -->
    <aside id="sidebar" class="sidebar collapsed">
        <div class="sidebar-nav">

            <!-- Navigation links -->
            <a href="{{ url('/') }}" class="nav-item">
                <i class="bi bi-house-door-fill nav-icon"></i>
                <span class="nav-label">Home</span>
            </a>

            <a href="{{ url('/directory') }}" class="nav-item">
                <i class="bi bi-people-fill nav-icon"></i>
                <span class="nav-label">Faculty</span>
            </a>

            <a href="{{ url('/courses') }}" class="nav-item">
                <i class="bi bi-book-fill nav-icon"></i>
                <span class="nav-label">Courses</span>
            </a>

            <a href="{{ url('/admissions') }}" class="nav-item">
                <i class="bi bi-mortarboard-fill nav-icon"></i>
                <span class="nav-label">Admissions</span>
            </a>

            <a href="{{ url('/socials') }}" class="nav-item">
                <i class="bi bi-globe-americas nav-icon"></i>
                <span class="nav-label">Socials</span>
            </a>

        </div>

        <!-- Sidebar footer with quick email action -->
        <div class="sidebar-footer">
            <a href="mailto:ithod@ucc.edu.jm?subject=UCC%20IT%20Department%20Inquiry" class="email-fab">
                <i class="bi bi-envelope-fill email-fab-icon"></i>
                <span class="email-fab-label">Email HOD</span>
            </a>
        </div>
    </aside>

    <!-- Main content area where pages are rendered -->
    <main id="main-content" class="main-content collapsed">
        @yield('content')
    </main>

    <!-- Custom PWA install button (shown when install is available) -->
    <button id="customInstallBtn" class="pwa-install-btn" type="button">
        <i class="bi bi-download"></i>
        <span>Install App</span>
    </button>

    <!-- Application scripts -->
    <script>
        // Toggle sidebar collapse/expand state
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const main = document.getElementById('main-content');

            sidebar.classList.toggle('collapsed');
            main.classList.toggle('collapsed');
        }

        // PWA install prompt handling
        let deferredPrompt;
        const installBtn = document.getElementById('customInstallBtn');

        // Capture install event and show custom button
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            installBtn.style.display = 'inline-flex';
        });

        // Trigger install prompt when button is clicked
        installBtn.addEventListener('click', async () => {
            if (!deferredPrompt) return;

            deferredPrompt.prompt();
            await deferredPrompt.userChoice;
            deferredPrompt = null;
            installBtn.style.display = 'none';
        });

        // Hide button after app is installed
        window.addEventListener('appinstalled', () => {
            installBtn.style.display = 'none';
            deferredPrompt = null;
        });
    </script>

    {{-- Registers the service worker for offline functionality --}}
    @RegisterServiceWorkerScript

</body>
</html>