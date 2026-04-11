<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UCC IT App')</title>

    {{-- PWA Manifest and Meta Tags --}}
    @PwaHead

    <link href="https://fonts.googleapis.com/css2?family=Amarante&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fa;
        }

        /* TOP BANNER */
        .top-banner {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 95px;
            background: #003366;
            color: white;
            display: flex;
            align-items: center;
            padding: 0 30px;
            border-bottom: 2px solid #FFD700;
            z-index: 1000;
        }

        .menu-toggle {
            background: none;
            border: none;
            color: white;
            font-size: 1.8rem;
            cursor: pointer;
            margin-right: 20px;
        }

        .app-title {
            font-family: 'Amarante', serif;
            font-size: 1.9rem;
            font-weight: 400;
            color: #FFD700;
            letter-spacing: 0.5px;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            top: 95px;
            left: 0;
            width: 220px;
            height: calc(100vh - 95px);
            background: #ffffff;
            border-right: 1px solid #ddd;
            transition: width 0.3s ease;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar-nav {
            flex: 1;
            padding-top: 10px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 20px;
            text-decoration: none;
            color: #003366;
            font-weight: 600;
        }

        .nav-item:hover {
            background: #eef4ff;
        }

        .nav-icon {
            font-size: 1.3rem;
            min-width: 24px;
            text-align: center;
        }

        .sidebar.collapsed .nav-label {
            display: none;
        }

        /* SIDEBAR FAB / FOOTER BUTTON */
        .sidebar-footer {
            padding: 16px 12px 20px;
        }

        .email-fab {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
            background: #003366;
            color: #ffffff;
            text-decoration: none;
            border-radius: 16px 16px 0 0;
            padding: 14px 16px;
            font-weight: 700;
            box-sizing: border-box;
            transition: background 0.25s ease, transform 0.25s ease;
        }

        .email-fab:hover {
            background: #00509e;
        }

        .email-fab-icon {
            font-size: 1.2rem;
            min-width: 24px;
            text-align: center;
        }

        .email-fab-label {
            white-space: nowrap;
        }

        .sidebar.collapsed .email-fab {
            padding: 14px 0;
            border-radius: 16px 16px 0 0;
        }

        .sidebar.collapsed .email-fab-label {
            display: none;
        }

        /* MAIN CONTENT */
        .main-content {
            margin-top: 95px;
            margin-left: 220px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .main-content.collapsed {
            margin-left: 70px;
        }
    </style>

    @yield('extra-css')
</head>
<body>

    <header class="top-banner">
        <button class="menu-toggle" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </button>
        <div class="app-title">UCC IT Department</div>
    </header>

    <aside id="sidebar" class="sidebar collapsed">
        <div class="sidebar-nav">
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

        <div class="sidebar-footer">
            <a
                href="mailto:ithod@ucc.edu.jm?subject=UCC%20IT%20Department%20Inquiry"
                class="email-fab"
            >
                <i class="bi bi-envelope-fill email-fab-icon"></i>
                <span class="email-fab-label">Email HOD</span>
            </a>
        </div>
    </aside>

    <main id="main-content" class="main-content collapsed">
        @yield('content')
    </main>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const main = document.getElementById('main-content');

            sidebar.classList.toggle('collapsed');
            main.classList.toggle('collapsed');
        }
    </script>

    {{-- PWA Service Worker Registration --}}
    @RegisterServiceWorkerScript
</body>
</html>