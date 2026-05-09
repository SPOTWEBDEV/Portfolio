<?php
require_once 'includes/config.php';
$page_title = 'SPOTWEB TECH — Premium Web & Mobile Development | Enugu, Nigeria';
$page_description = 'Ezea Ugochukwu Micheal, CEO of SPOTWEB TECH. Expert Fullstack Web Developer & React Native Mobile Developer based in Enugu, Nigeria.';
include 'includes/header.php';
?>

<!-- ============================================================ -->
<!-- HERO SECTION -->
<!-- ============================================================ -->
<section class="relative min-h-screen flex items-center hero-grid pt-20 overflow-hidden">
    <!-- Glow Orbs -->
    <div class="glow-orb w-96 h-96 bg-sky-500/20 top-0 -right-20"></div>
    <div class="glow-orb w-80 h-80 bg-blue-600/15 bottom-10 -left-20"></div>
    <div class="glow-orb w-64 h-64 bg-indigo-500/10 top-40 left-1/3"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Left: Text -->
            <div>
                <div class="section-label reveal">
                    <span class="w-2 h-2 bg-sky-400 rounded-full animate-pulse"></span>
                    Available for Projects
                </div>

                <h1 class="text-5xl lg:text-7xl font-bold font-display leading-tight mb-6 reveal delay-100">
                    Hi, I'm <br>
                    <span class="gradient-text">Ezea Ugochukwu</span><br>
                    <span class="text-white">Micheal</span>
                </h1>

                <div class="text-lg lg:text-xl text-gray-300 mb-3 reveal delay-200">
                    <span id="typewriter" class="text-sky-400 font-semibold typewriter font-mono"></span>
                </div>

                <div class="flex items-center gap-2 mb-8 reveal delay-300">
                    <div class="w-8 h-8 rounded-lg overflow-hidden ring-1 ring-sky-500/30">
                        <img src="assets/images/logo.jpeg" alt="SPOTWEB TECH" class="w-full h-full object-cover">
                    </div>
                    <p class="text-gray-400 text-sm">CEO & Founder of <span class="text-sky-400 font-semibold">SPOTWEB TECH</span></p>
                </div>

                <p class="text-gray-400 leading-relaxed max-w-lg mb-10 reveal delay-300">
                    I build fast, scalable, and beautiful web & mobile applications. From corporate websites to complex fintech platforms — SPOTWEB TECH delivers premium digital products tailored for your vision.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 reveal delay-400">
                    <a href="assets/uploads/cv.pdf" download class="btn-primary">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Download CV
                    </a>
                    <a href="contact.php" class="btn-outline">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        Contact Me
                    </a>
                    <a href="services.php" class="btn-outline">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        View Services
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 mt-14 pt-10 border-t border-white/5 reveal delay-500">
                    <div>
                        <div class="text-3xl font-bold font-display text-white counter" data-target="50" data-suffix="+">0+</div>
                        <div class="text-gray-500 text-xs mt-1 uppercase tracking-wide">Projects Done</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold font-display text-white counter" data-target="3" data-suffix="+">0+</div>
                        <div class="text-gray-500 text-xs mt-1 uppercase tracking-wide">Years Exp.</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold font-display text-white counter" data-target="20" data-suffix="+">0+</div>
                        <div class="text-gray-500 text-xs mt-1 uppercase tracking-wide">Clients</div>
                    </div>
                </div>
            </div>

            <!-- Right: Visual -->
            <div class="relative reveal-right delay-200 hidden lg:block">
                <!-- Central avatar/logo display -->
                <div class="relative flex items-center justify-center">
                    <div class="w-72 h-72 xl:w-80 xl:h-80 rounded-full bg-gradient-to-br from-sky-500/20 to-blue-600/10 border border-sky-500/20 flex items-center justify-center animate-[float_6s_ease-in-out_infinite]">
                        <div class="w-56 h-56 xl:w-64 xl:h-64 rounded-full overflow-hidden ring-4 ring-sky-500/30 bg-gray-800">
                            <img src="assets/images/logo.jpeg" alt="SPOTWEB TECH" class="w-full h-full object-contain p-4 rounded-full">
                        </div>
                    </div>

                    <!-- Floating tech chips -->
                    <div class="absolute -top-4 -left-8 glass-card rounded-xl px-4 py-3 floating-card flex items-center gap-2">
                        <div class="w-8 h-8 bg-sky-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-sky-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                        </div>
                        <div>
                            <div class="text-white text-xs font-semibold">React Native</div>
                            <div class="text-gray-400 text-xs">Mobile Dev</div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -right-8 glass-card rounded-xl px-4 py-3 floating-card flex items-center gap-2">
                        <div class="w-8 h-8 bg-emerald-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <div>
                            <div class="text-white text-xs font-semibold">Full Stack</div>
                            <div class="text-gray-400 text-xs">Web Dev</div>
                        </div>
                    </div>

                    <div class="absolute top-1/2 -right-16 -translate-y-1/2 glass-card rounded-xl px-4 py-3 floating-card flex items-center gap-2">
                        <div class="w-8 h-8 bg-violet-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
                        </div>
                        <div>
                            <div class="text-white text-xs font-semibold">Node.js</div>
                            <div class="text-gray-400 text-xs">Backend</div>
                        </div>
                    </div>

                    <div class="absolute top-1/2 -left-16 -translate-y-1/2 glass-card rounded-xl px-3 py-2 floating-card">
                        <div class="flex gap-1.5">
                            <span class="w-2 h-2 bg-red-400 rounded-full"></span>
                            <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                            <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        </div>
                        <div class="text-sky-400 text-xs font-mono mt-1">npm run build</div>
                        <div class="text-green-400 text-xs font-mono">✓ compiled</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
        <span class="text-gray-500 text-xs uppercase tracking-widest">Scroll</span>
        <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
    </div>
</section>

<!-- ============================================================ -->
<!-- ABOUT PREVIEW SECTION -->
<!-- ============================================================ -->
<section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <div class="section-label">About Us</div>
                <h2 class="text-4xl lg:text-5xl font-bold font-display mb-6">
                    Building the Future,<br>
                    <span class="gradient-text">One Line at a Time</span>
                </h2>
                <p class="text-gray-400 leading-relaxed mb-6">
                    I'm <strong class="text-white">Ezea Ugochukwu Micheal</strong>, a passionate fullstack developer and the CEO of <strong class="text-sky-400">SPOTWEB TECH</strong>. With years of experience crafting scalable web and mobile applications, I turn complex challenges into elegant digital solutions.
                </p>
                <p class="text-gray-400 leading-relaxed mb-8">
                    SPOTWEB TECH was founded in 2022 with a mission to deliver world-class digital experiences to businesses across Nigeria and beyond — combining technical excellence with beautiful design.
                </p>
                <a href="about.php" class="btn-primary">
                    Learn More About Me
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Feature Grid -->
            <div class="grid grid-cols-2 gap-4 reveal-right">
                <?php
                $features = [
                    ['icon' => '⚡', 'title' => 'Fast Delivery', 'desc' => 'On-time project delivery without compromise'],
                    ['icon' => '🔒', 'title' => 'Secure Code', 'desc' => 'Security-first development practices'],
                    ['icon' => '📱', 'title' => 'Mobile First', 'desc' => 'Responsive designs for all devices'],
                    ['icon' => '🌍', 'title' => 'Global Reach', 'desc' => 'Serving clients across Africa and beyond'],
                ];
                foreach ($features as $f): ?>
                    <div class="glass-card rounded-2xl p-6">
                        <div class="text-3xl mb-3"><?= $f['icon'] ?></div>
                        <h3 class="text-white font-semibold font-display mb-2"><?= $f['title'] ?></h3>
                        <p class="text-gray-500 text-sm"><?= $f['desc'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- SERVICES SECTION -->
<!-- ============================================================ -->
<section class="py-24 bg-gray-900/30 relative overflow-hidden">
    <div class="glow-orb w-96 h-96 bg-sky-500/10 top-0 right-0"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">What We Do</div>
            <h2 class="text-4xl lg:text-5xl font-bold font-display mt-4">
                Our <span class="gradient-text">Services</span>
            </h2>
            <p class="text-gray-400 mt-4 max-w-xl mx-auto">From concept to deployment — we build, design and scale your digital presence.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $services = [
                [
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
                    'color' => 'sky',
                    'title' => 'Web Development',
                    'desc'  => 'Corporate sites, e-commerce platforms, school portals, and custom web systems built with modern technologies.',
                    'items' => ['Corporate Websites', 'E-Commerce Stores', 'Admin Dashboards', 'School Portals'],
                ],
                [
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>',
                    'color' => 'violet',
                    'title' => 'Mobile App Development',
                    'desc'  => 'Cross-platform mobile apps using React Native. From MVP to Play Store & App Store deployment.',
                    'items' => ['React Native Apps', 'Android Apps', 'iOS Applications', 'Business Apps'],
                ],
                [
                    'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>',
                    'color' => 'emerald',
                    'title' => 'Graphic Design',
                    'desc'  => 'Creative visual solutions — logos, brand identity, flyers, and marketing materials that make you stand out.',
                    'items' => ['Logo Design', 'Brand Identity', 'Marketing Flyers', 'Social Media Graphics'],
                ],
            ];
            $colors = ['sky' => 'sky', 'violet' => 'violet', 'emerald' => 'emerald'];
            foreach ($services as $i => $svc):
                $c = $svc['color'];
            ?>
                <div class="glass-card rounded-2xl p-8 reveal delay-<?= ($i+1)*100 ?> group">
                    <div class="w-16 h-16 rounded-2xl bg-<?= $c ?>-500/10 border border-<?= $c ?>-500/20 flex items-center justify-center text-<?= $c ?>-400 mb-6 group-hover:bg-<?= $c ?>-500/20 transition-all">
                        <?= $svc['icon'] ?>
                    </div>
                    <h3 class="text-xl font-bold font-display text-white mb-3"><?= $svc['title'] ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-5"><?= $svc['desc'] ?></p>
                    <ul class="space-y-2 mb-6">
                        <?php foreach ($svc['items'] as $item): ?>
                            <li class="flex items-center gap-2 text-sm text-gray-300">
                                <svg class="w-4 h-4 text-<?= $c ?>-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <?= $item ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="services.php" class="text-<?= $c ?>-400 text-sm font-medium flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- PORTFOLIO PREVIEW -->
<!-- ============================================================ -->
<section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-16 gap-6">
            <div class="reveal">
                <div class="section-label">Portfolio</div>
                <h2 class="text-4xl lg:text-5xl font-bold font-display mt-4">
                    Featured <span class="gradient-text">Projects</span>
                </h2>
            </div>
            <a href="gallery.php" class="btn-outline reveal">View All Projects</a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-6">
            <?php
            $featured = array_filter($projects, fn($p) => $p['featured']);
            $count = 0;
            foreach ($featured as $proj):
                if ($count >= 4) break;
                $count++;
            ?>
                <div class="glass-card rounded-2xl overflow-hidden group reveal delay-<?= $count * 100 ?>">
                    <!-- Project image placeholder -->
                    <div class="h-48 bg-gradient-to-br from-gray-800 to-gray-900 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center px-6">
                                <div class="text-sky-400 text-4xl font-bold font-display mb-1 opacity-20">
                                    <?= strtoupper(substr($proj['title'], 0, 2)) ?>
                                </div>
                            </div>
                        </div>
                        <!-- Gradient overlay with project name -->
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex flex-wrap gap-1">
                                <?php foreach (array_slice($proj['technologies'], 0, 3) as $tech): ?>
                                    <span class="tech-badge"><?= htmlspecialchars($tech) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Hover overlay -->
                        <div class="absolute inset-0 bg-sky-500/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <a href="<?= $proj['link'] ?>" target="_blank" rel="noopener noreferrer"
                               class="bg-white/10 backdrop-blur border border-white/20 text-white px-6 py-2.5 rounded-xl text-sm font-medium hover:bg-white/20 transition-all">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold font-display text-white mb-2"><?= htmlspecialchars($proj['title']) ?></h3>
                        <p class="text-gray-400 text-sm leading-relaxed"><?= htmlspecialchars($proj['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- TEAM SECTION -->
<!-- ============================================================ -->
<section class="py-24 bg-gray-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">The People</div>
            <h2 class="text-4xl lg:text-5xl font-bold font-display mt-4">
                Meet the <span class="gradient-text">Team</span>
            </h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <?php foreach ($team as $i => $member): ?>
                <div class="glass-card rounded-2xl p-8 text-center reveal delay-<?= ($i+1)*100 ?> group">
                    <div class="w-20 h-20 rounded-2xl mx-auto mb-5 flex items-center justify-center bg-gradient-to-br from-sky-500/20 to-blue-600/20 border border-sky-500/20 text-3xl group-hover:scale-110 transition-transform">
                        <?= ['👨‍💻', '🎨', '⚙️'][$i] ?>
                    </div>
                    <h3 class="text-white font-bold font-display text-lg mb-1"><?= htmlspecialchars($member['name']) ?></h3>
                    <p class="text-sky-400 text-sm font-medium mb-3"><?= htmlspecialchars($member['position']) ?></p>
                    <p class="text-gray-400 text-sm"><?= htmlspecialchars($member['bio']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- TESTIMONIALS SECTION -->
<!-- ============================================================ -->
<section class="py-24 relative overflow-hidden">
    <div class="glow-orb w-96 h-96 bg-blue-600/10 bottom-0 left-0"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">Testimonials</div>
            <h2 class="text-4xl lg:text-5xl font-bold font-display mt-4">
                What Clients <span class="gradient-text">Say</span>
            </h2>
        </div>

        <div class="relative overflow-hidden">
            <div id="testimonial-track" class="testimonial-track">
                <?php foreach ($testimonials as $i => $t): ?>
                    <div class="testimonial-slide glass-card rounded-2xl p-8 min-w-[320px] sm:min-w-[400px] flex-shrink-0">
                        <div class="flex items-center gap-1 mb-4">
                            <?php for ($s = 0; $s < 5; $s++): ?>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic">"<?= htmlspecialchars($t['content']) ?>"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-sky-500/30 to-blue-600/30 flex items-center justify-center text-sky-300 font-bold font-display">
                                <?= strtoupper(substr($t['name'], 0, 1)) ?>
                            </div>
                            <div>
                                <div class="text-white font-semibold text-sm"><?= htmlspecialchars($t['name']) ?></div>
                                <div class="text-gray-500 text-xs"><?= htmlspecialchars($t['role']) ?></div>
                            </div>
                            <span class="ml-auto text-xs px-2 py-1 rounded-lg <?= $t['type'] === 'company' ? 'bg-sky-500/10 text-sky-400' : 'bg-violet-500/10 text-violet-400' ?>">
                                <?= $t['type'] === 'company' ? 'Company' : 'Client' ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Controls -->
        <div class="flex items-center justify-center gap-4 mt-8">
            <button id="prev-testimonial" aria-label="Previous testimonial"
                class="w-10 h-10 glass-card rounded-xl flex items-center justify-center text-gray-400 hover:text-white transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <div class="flex gap-2 items-center">
                <?php foreach ($testimonials as $i => $t): ?>
                    <button class="testimonial-dot h-2 rounded-full transition-all duration-300 <?= $i === 0 ? 'bg-sky-400 w-6' : 'bg-gray-600 w-2' ?>" aria-label="Go to slide <?= $i+1 ?>"></button>
                <?php endforeach; ?>
            </div>
            <button id="next-testimonial" aria-label="Next testimonial"
                class="w-10 h-10 glass-card rounded-xl flex items-center justify-center text-gray-400 hover:text-white transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- CONTACT CTA -->
<!-- ============================================================ -->
<section class="py-24 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="glass-card rounded-3xl p-12 lg:p-16 relative overflow-hidden reveal">
            <!-- Background glow -->
            <div class="absolute inset-0 bg-gradient-to-br from-sky-500/5 to-blue-600/5"></div>
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-64 h-px bg-gradient-to-r from-transparent via-sky-500 to-transparent"></div>

            <div class="relative z-10">
                <div class="section-label mx-auto mb-6">Get In Touch</div>
                <h2 class="text-4xl lg:text-5xl font-bold font-display mb-6">
                    Ready to Build<br>
                    <span class="gradient-text">Something Great?</span>
                </h2>
                <p class="text-gray-400 leading-relaxed max-w-lg mx-auto mb-10">
                    Whether it's a new website, mobile app, or custom software — SPOTWEB TECH is ready to transform your idea into a powerful digital product.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="contact.php" class="btn-primary text-base px-8 py-4">
                        Start a Project
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="pricing.php" class="btn-outline text-base px-8 py-4">View Pricing</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
