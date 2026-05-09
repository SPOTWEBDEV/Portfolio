<?php
// includes/header.php
// Usage: include this at the top of every page
// Variables expected: $page_title, $page_description (optional)
if (!isset($page_title)) $page_title = SITE_NAME . ' — ' . SITE_TAGLINE;
if (!isset($page_description)) $page_description = 'SPOTWEB TECH is a premium web & mobile development company in Enugu, Nigeria. Led by Ezea Ugochukwu Micheal, CEO and Fullstack Developer.';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <meta name="keywords" content="web development, mobile app, react native, PHP, SPOTWEB TECH, Ezea Ugochukwu, Enugu, Nigeria, fullstack developer">
    <meta name="author" content="Ezea Ugochukwu Micheal">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/images/logo.jpeg">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta name="twitter:image" content="<?= SITE_URL ?>/assets/images/logo.jpeg">

    <title><?= htmlspecialchars($page_title) ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="assets/images/logo.jpeg">

    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0ea5e9',
                        accent: '#38bdf8',
                    },
                    fontFamily: {
                        sans: ['DM Sans', 'system-ui', 'sans-serif'],
                        display: ['Syne', 'system-ui', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.6s ease forwards',
                        'fade-in': 'fadeIn 0.8s ease forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        glow: {
                            'from': { boxShadow: '0 0 10px #0ea5e9, 0 0 20px #0ea5e9' },
                            'to': { boxShadow: '0 0 20px #38bdf8, 0 0 40px #38bdf8' },
                        },
                        slideUp: {
                            'from': { opacity: 0, transform: 'translateY(30px)' },
                            'to': { opacity: 1, transform: 'translateY(0)' },
                        },
                        fadeIn: {
                            'from': { opacity: 0 },
                            'to': { opacity: 1 },
                        },
                    },
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Global Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gray-950 text-gray-100 font-sans antialiased overflow-x-hidden">

<!-- Page Transition Overlay -->
<div id="page-overlay" class="fixed inset-0 bg-gray-950 z-[999] pointer-events-none transition-opacity duration-500 opacity-0"></div>

<?php include 'includes/navbar.php'; ?>
