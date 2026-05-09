<?php
// includes/footer.php
global $social;
?>
<!-- Back to Top -->
<button id="back-to-top" aria-label="Back to top"
    class="fixed bottom-6 right-6 z-40 w-12 h-12 bg-gradient-to-br from-sky-500 to-blue-600 text-white rounded-xl shadow-lg shadow-sky-500/30 flex items-center justify-center opacity-0 translate-y-4 pointer-events-none transition-all duration-300 hover:scale-110 hover:shadow-sky-400/50">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
</button>

<!-- Footer -->
<footer class="bg-gray-900/50 border-t border-white/5 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

            <!-- Brand Column -->
            <div class="lg:col-span-2">
                <a href="index.php" class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl overflow-hidden ring-2 ring-sky-500/30">
                        <img src="assets/images/logo.jpeg" alt="SPOTWEB TECH" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="text-xl font-bold font-display"><span class="text-sky-400">SPOT</span><span class="text-white">WEB</span></div>
                        <div class="text-xs text-gray-400 tracking-[0.25em] uppercase font-medium">TECH</div>
                    </div>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed max-w-sm mb-6">
                    Premium web & mobile development company based in Enugu, Nigeria.
                    We build fast, beautiful, and scalable digital products.
                </p>
                <!-- Newsletter -->
                <div class="flex gap-2">
                    <input type="email" placeholder="Your email address" aria-label="Newsletter email"
                        class="flex-1 px-4 py-2.5 bg-white/5 border border-white/10 rounded-xl text-sm text-white placeholder-gray-500 focus:outline-none focus:border-sky-500 focus:bg-white/8 transition-all">
                    <button class="px-4 py-2.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white text-sm font-medium rounded-xl hover:from-sky-400 hover:to-blue-500 transition-all whitespace-nowrap">
                        Subscribe
                    </button>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-semibold font-display mb-4 text-sm tracking-wide uppercase">Quick Links</h3>
                <ul class="space-y-2">
                    <?php
                    $links = ['Home' => 'index.php', 'About' => 'about.php', 'Services' => 'services.php', 'Pricing' => 'pricing.php', 'Gallery' => 'gallery.php', 'Contact' => 'contact.php'];
                    foreach ($links as $label => $href): ?>
                        <li>
                            <a href="<?= $href ?>" class="text-gray-400 hover:text-sky-400 text-sm transition-colors flex items-center gap-2 group">
                                <span class="w-1 h-1 bg-sky-500/0 group-hover:bg-sky-400 rounded-full transition-all"></span>
                                <?= $label ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-white font-semibold font-display mb-4 text-sm tracking-wide uppercase">Contact</h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-sky-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:<?= SITE_EMAIL ?>" class="text-gray-400 hover:text-sky-400 text-sm transition-colors"><?= SITE_EMAIL ?></a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-sky-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span class="text-gray-400 text-sm"><?= SITE_PHONE ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-sky-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-gray-400 text-sm"><?= SITE_ADDRESS ?></span>
                    </li>
                </ul>

                <!-- Social Icons -->
                <div class="flex items-center gap-3 mt-6">
                    <?php
                    $social_icons = [
                        'github' => ['href' => $social['github'], 'label' => 'GitHub', 'path' => 'M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22'],
                        'twitter' => ['href' => $social['twitter'], 'label' => 'Twitter', 'path' => 'M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z'],
                        'linkedin' => ['href' => $social['linkedin'], 'label' => 'LinkedIn', 'path' => 'M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z M4 6a2 2 0 100-4 2 2 0 000 4z'],
                    ];
                    foreach ($social_icons as $key => $icon): ?>
                        <a href="<?= $icon['href'] ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= $icon['label'] ?>"
                           class="w-9 h-9 bg-white/5 hover:bg-sky-500/20 border border-white/10 hover:border-sky-500/30 rounded-lg flex items-center justify-center text-gray-400 hover:text-sky-400 transition-all duration-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="<?= $icon['path'] ?>"/></svg>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/5 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-gray-500 text-sm">
                &copy; <?= date('Y') ?> <span class="text-sky-400">SPOTWEB TECH</span>. All rights reserved.
            </p>
            <p class="text-gray-500 text-sm">
                Built with ❤️ by <a href="about.php" class="text-sky-400 hover:text-sky-300 transition-colors">Ezea Ugochukwu Micheal</a>
            </p>
        </div>
    </div>
</footer>

<!-- Global JS -->
<script src="assets/js/main.js"></script>
</body>
</html>
