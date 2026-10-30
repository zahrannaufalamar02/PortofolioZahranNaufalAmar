<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Zahran Portfolio</title>

    <meta name="description"
          content="Portofolio mahasiswa Pendidikan Teknologi Informasi yang menampilkan profil, keahlian, dan proyek digital.">

    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --navy: #0f172a;
            --text: #334155;
            --muted: #64748b;
            --background: #f8fafc;
            --white: #ffffff;
            --border: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.97);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            width: min(1120px, 90%);
            margin: auto;
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .logo {
            color: var(--navy);
            font-size: 21px;
            font-weight: 800;
            letter-spacing: -0.7px;
        }

        .logo span {
            color: var(--primary);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
            flex-wrap: wrap;
        }

        .nav-menu a {
            color: var(--muted);
            font-size: 14px;
            font-weight: 600;
            transition: color 0.2s;
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        .container {
            width: min(1120px, 90%);
            margin: 0 auto;
            padding: 55px 0 75px;
            min-height: 65vh;
        }

        .hero {
            position: relative;
            overflow: hidden;
            background: var(--navy);
            color: var(--white);
            border-radius: 24px;
            padding: 65px 55px;
            margin-bottom: 35px;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            right: -90px;
            top: -110px;
            border: 45px solid rgba(96, 165, 250, 0.15);
            border-radius: 50%;
            pointer-events: none;
        }

        .eyebrow {
            display: inline-block;
            color: #93c5fd;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .hero h1 {
            max-width: 700px;
            font-size: clamp(32px, 5vw, 52px);
            line-height: 1.2;
            letter-spacing: -1.5px;
            margin-bottom: 22px;
        }

        .hero h1 span {
            color: #60a5fa;
        }

        .hero p {
            max-width: 650px;
            color: #cbd5e1;
            margin-bottom: 16px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border-radius: 9px;
            background: var(--primary);
            color: var(--white);
            font-size: 14px;
            font-weight: 700;
            border: 1px solid var(--primary);
            transition: 0.2s;
        }

        .button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .button-outline {
            background: transparent;
            border-color: #475569;
            color: var(--white);
        }

        .button-outline:hover {
            background: #1e293b;
        }

        .section-heading {
            margin-bottom: 24px;
        }

        .section-heading h2 {
            color: var(--navy);
            font-size: 28px;
            letter-spacing: -0.6px;
            margin-bottom: 7px;
        }

        .section-heading p {
            color: var(--muted);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
            margin-top: 25px;
        }

        .card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 27px;
            box-shadow: 0 5px 20px rgba(15, 23, 42, 0.035);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
        }

        .card h2,
        .card h3 {
            color: var(--navy);
            margin-bottom: 12px;
        }

        .card p {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 10px;
        }

        .project-number {
            display: inline-block;
            color: var(--primary);
            background: #eff6ff;
            border-radius: 8px;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 17px;
        }

        .tag {
            display: inline-block;
            color: #1d4ed8;
            background: #eff6ff;
            padding: 5px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
            margin: 5px 4px 5px 0;
        }

        .page-title {
            margin-bottom: 30px;
        }

        .page-title .eyebrow {
            color: var(--primary);
            margin-bottom: 8px;
        }

        .page-title h1 {
            color: var(--navy);
            font-size: clamp(30px, 4vw, 40px);
            line-height: 1.25;
            margin-bottom: 12px;
        }

        .page-title p {
            color: var(--muted);
            max-width: 700px;
        }

        .info-list {
            list-style: none;
        }

        .info-list li {
            padding: 13px 0;
            border-bottom: 1px solid var(--border);
        }

        .info-list li:last-child {
            border-bottom: none;
        }

        .info-list strong {
            color: var(--navy);
        }

        .back {
            display: inline-block;
            margin-top: 24px;
            color: var(--primary);
            font-weight: 700;
            font-size: 14px;
        }

        .back:hover {
            color: var(--primary-dark);
        }

        .footer {
            background: var(--navy);
            color: #cbd5e1;
            padding: 30px 5%;
            text-align: center;
        }

        .footer strong {
            color: var(--white);
        }

        .footer p {
            font-size: 13px;
            margin: 4px 0;
        }

        @media (max-width: 850px) {
            .grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .hero {
                padding: 45px 35px;
            }
        }

        @media (max-width: 600px) {
            .nav-container {
                padding: 15px 0;
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
            }

            .nav-menu {
                gap: 12px 18px;
            }

            .nav-menu a {
                font-size: 13px;
            }

            .container {
                padding: 30px 0 50px;
            }

            .hero {
                padding: 35px 24px;
                border-radius: 17px;
            }

            .hero h1 {
                letter-spacing: -0.7px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 23px;
            }

            .section-heading h2 {
                font-size: 24px;
            }
        }

        /* Foto profil pada beranda */
.hero-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 280px;
    align-items: center;
    gap: 40px;
}

.hero-photo {
    width: 250px;
    height: 300px;
    object-fit: cover;
    object-position: center top;
    border: 5px solid rgba(255, 255, 255, 0.2);
    border-radius: 22px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.25);
}

/* Foto pada halaman profil */
.profile-layout {
    display: grid;
    grid-template-columns: 280px minmax(0, 1fr);
    gap: 28px;
    align-items: start;
}

.profile-photo {
    display: block;
    width: 100%;
    max-width: 250px;
    aspect-ratio: 4 / 5;
    object-fit: cover;
    object-position: center top;
    border-radius: 18px;
    border: 1px solid #e2e8f0;
}

@media (max-width: 700px) {
    .hero-layout,
    .profile-layout {
        grid-template-columns: 1fr;
    }

    .hero-photo {
        width: 190px;
        height: 230px;
    }

    .profile-photo {
        width: 200px;
    }
}
    </style>
</head>

<body>

    <header class="navbar">
        <div class="nav-container">

            <a href="{{ route('beranda') }}" class="logo">
                ZAHRAN<span> || </span>PORTFOLIO
            </a>

            <nav class="nav-menu">
                <a href="{{ route('beranda') }}">Beranda</a>
                <a href="{{ route('profil') }}">Profil</a>
                <a href="{{ route('keahlian') }}">Keahlian</a>
                <a href="{{ route('proyek') }}">Proyek</a>
            </nav>

        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <p><strong>Zahran Portfolio</strong></p>
        <p>Mahasiswa Pendidikan Teknologi Informasi</p>
        <p>&copy; {{ date('Y') }} Zahran Portfolio. Dibuat dengan Laravel.</p>
    </footer>

</body>
</html>