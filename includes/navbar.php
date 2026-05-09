<?php
// includes/navbar.php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$nav_links = [
    'index'    => 'Home',
    'about'    => 'About',
    'services' => 'Services',
    'pricing'  => 'Pricing',
    'gallery'  => 'Gallery',
    'contact'  => 'Contact',
];
?>
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" role="navigation" aria-label="Main navigation">
    <div class="nav-inner backdrop-blur-md bg-gray-900/80 border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">

                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-3 group" aria-label="SPOTWEB TECH Home">
                    <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-xl overflow-hidden ring-2 ring-sky-500/30 group-hover:ring-sky-400 transition-all duration-300">
                        <img src="assets/images/logo.jpeg" alt="SPOTWEB TECH Logo" class="w-full h-full object-cover">
                    </div>
                    <div class="hidden sm:block">
                        <div class="text-base lg:text-lg font-bold tracking-tight">
                            <span class="text-sky-400">SPOT</span><span class="text-white">WEB</span>
                        </div>
                        <div class="text-xs text-gray-400 tracking-[0.2em] uppercase font-medium -mt-0.5">TECH</div>
                    </div>
                </a>

                <!-- Desktop Nav -->
                <ul class="hidden lg:flex items-center gap-1" role="list">
                    <?php foreach ($nav_links as $page => $label): ?>
                        <?php $is_active = ($current_page === $page || ($current_page === '' && $page === 'index')); ?>
                        <li>
                            <a href="<?= $page === 'index' ? 'index.php' : $page . '.php' ?>"
                               class="relative px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200 group
                               <?= $is_active
                                   ? 'text-sky-400 bg-sky-500/10'
                                   : 'text-gray-300 hover:text-white hover:bg-white/5' ?>">
                                <?= $label ?>
                                <?php if ($is_active): ?>
                                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 bg-sky-400 rounded-full"></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- CTA + Hamburger -->
                <div class="flex items-center gap-3">
                    <a href="contact.php" class="hidden lg:inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white text-sm font-semibold rounded-xl hover:from-sky-400 hover:to-blue-500 transition-all duration-200 shadow-lg shadow-sky-500/25 hover:shadow-sky-400/40 hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        Hire Me
                    </a>
                    <button id="hamburger" class="lg:hidden p-2 rounded-lg text-gray-300 hover:text-white hover:bg-white/10 transition-all" aria-label="Toggle menu" aria-expanded="false">
                        <svg id="ham-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        <svg id="ham-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden border-t border-white/5">
            <div class="px-4 py-4 space-y-1">
                <?php foreach ($nav_links as $page => $label): ?>
                    <?php $is_active = ($current_page === $page || ($current_page === '' && $page === 'index')); ?>
                    <a href="<?= $page === 'index' ? 'index.php' : $page . '.php' ?>"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-all duration-200
                       <?= $is_active ? 'text-sky-400 bg-sky-500/10' : 'text-gray-300 hover:text-white hover:bg-white/5' ?>">
                        <?= $label ?>
                        <?php if ($is_active): ?><span class="ml-auto w-2 h-2 bg-sky-400 rounded-full"></span><?php endif; ?>
                    </a>
                <?php endforeach; ?>
                <a href="contact.php" class="flex items-center justify-center gap-2 mt-3 px-4 py-3 bg-gradient-to-r from-sky-500 to-blue-600 text-white text-sm font-semibold rounded-xl">
                    Hire Me
                </a>
            </div>
        </div>
    </div>
</nav>
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamOpen = document.getElementById('ham-open');
    const hamClose = document.getElementById('ham-close');
    hamburger.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden', isOpen);
        hamOpen.classList.toggle('hidden', !isOpen);
        hamClose.classList.toggle('hidden', isOpen);
        hamburger.setAttribute('aria-expanded', String(!isOpen));
    });
    // Scroll effect
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
