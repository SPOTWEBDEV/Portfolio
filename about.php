<?php
require_once 'includes/config.php';
$page_title = 'About — Ezea Ugochukwu Micheal | SPOTWEB TECH';
$page_description = 'Learn about Ezea Ugochukwu Micheal, CEO of SPOTWEB TECH. Fullstack developer with expertise in web and mobile app development based in Enugu, Nigeria.';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="pt-32 pb-16 relative hero-grid overflow-hidden">
    <div class="glow-orb w-96 h-96 bg-sky-500/15 -top-20 -right-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="section-label reveal">About</div>
        <h1 class="text-5xl lg:text-6xl font-bold font-display mt-4 mb-6 reveal delay-100">
            The Person Behind<br>
            <span class="gradient-text">SPOTWEB TECH</span>
        </h1>
        <p class="text-gray-400 text-lg max-w-2xl reveal delay-200">Passionate developer, entrepreneur, and innovator building digital solutions that matter.</p>
    </div>
</section>

<!-- ---- Biography ---- -->
<section class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Image / Visual -->
            <div class="reveal-left">
                <div class="relative">
                    <div class="w-full aspect-square max-w-md mx-auto lg:mx-0 rounded-3xl bg-gradient-to-br from-sky-500/10 to-blue-600/10 border border-sky-500/10 flex items-center justify-center p-8">
                        <div class="w-full h-full rounded-2xl overflow-hidden bg-gray-800 flex items-center justify-center">
                            <img src="assets/images/me.jpg" alt="Ezea Ugochukwu Micheal" class="w-full h-fullobject-contain">
                        </div>
                    </div>
                    <!-- Award badge -->
                    <div class="absolute -bottom-6 -right-6 glass-card rounded-2xl p-4 max-w-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-yellow-500/20 rounded-xl flex items-center justify-center text-xl">🏆</div>
                            <div>
                                <div class="text-white text-sm font-semibold">4 Awards Won</div>
                                <div class="text-gray-400 text-xs">2021 — 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact links -->
                <div class="mt-12 flex flex-wrap gap-3">
                    <a href="mailto:<?= SITE_EMAIL ?>" class="btn-outline text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Email Me
                    </a>
                    <a href="assets/uploads/cv.pdf" download class="btn-primary text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Download CV
                    </a>
                </div>
            </div>

            <!-- Bio Text -->
            <div class="reveal-right">
                <h2 class="text-3xl font-bold font-display text-white mb-2">Ezea Ugochukwu Micheal</h2>
                <p class="text-sky-400 font-medium mb-6">aka "Firstclass" · CEO & Founder, SPOTWEB TECH</p>
                <div class="space-y-4 text-gray-400 leading-relaxed">
                    <p>I'm a passionate fullstack developer specializing in creating accessible, high-performance web and mobile applications. With expertise in fullstack development, React Native, and software architecture, I bring innovative solutions to complex challenges.</p>
                    <p>My journey into tech began at <strong class="text-white">Digital Dreams ICT Academy</strong> in Enugu, where I completed an intensive fullstack development program in 2021-2022. Since then, I've worked with startups and established companies across Nigeria and globally, building everything from trading dashboards to e-commerce platforms.</p>
                    <p>In 2022, I founded <strong class="text-sky-400">SPOTWEB TECH</strong> — a premium software company dedicated to delivering world-class digital products. We combine technical excellence with beautiful design to help businesses grow their digital presence.</p>
                    <p>When I'm not coding, I'm mentoring aspiring developers, contributing to open-source projects, and exploring new technologies to stay at the cutting edge of the industry.</p>
                </div>

                <!-- Info Grid -->
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <?php
                    $infos = [
                        ['label' => 'Name', 'value' => 'Ezea Ugochukwu Micheal'],
                        ['label' => 'Location', 'value' => 'Enugu, Nigeria'],
                        ['label' => 'Company', 'value' => 'SPOTWEB TECH'],
                        ['label' => 'Role', 'value' => 'CEO & Lead Developer'],
                        ['label' => 'Founded', 'value' => '2022'],
                        ['label' => 'Available', 'value' => 'For Projects'],
                    ];
                    foreach ($infos as $info): ?>
                        <div class="glass-card rounded-xl p-4">
                            <div class="text-gray-500 text-xs uppercase tracking-wide mb-1"><?= $info['label'] ?></div>
                            <div class="text-white text-sm font-medium"><?= $info['value'] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ---- Skills Section ---- -->
<section class="py-20 bg-gray-900/30" id="skills-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <div class="section-label mx-auto">Skills</div>
            <h2 class="text-4xl font-bold font-display mt-4">Technical <span class="gradient-text">Expertise</span></h2>
        </div>
        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <?php foreach ($skills as $i => $skill): ?>
                <div class="glass-card rounded-2xl p-6 reveal delay-<?= ($i % 4) * 100 ?>">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-white font-medium"><?= htmlspecialchars($skill['name']) ?></span>
                        <span class="text-sky-400 font-mono text-sm"><?= $skill['level'] ?>%</span>
                    </div>
                    <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                        <div class="skill-bar-fill h-full rounded-full" data-level="<?= $skill['level'] ?>"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Technology Cloud -->
        <div class="mt-12 text-center reveal">
            <h3 class="text-white font-display font-semibold mb-6">All Technologies</h3>
            <div class="flex flex-wrap justify-center gap-2 max-w-4xl mx-auto">
                <?php
                $all_techs = ['React.js','Next.js','TypeScript','TailwindCSS','HTML5','CSS3','JavaScript','Redux','Node.js','Express','PHP','Python','PostgreSQL','MongoDB','MySQL','Firebase','REST APIs','GraphQL','React Native','Expo','iOS','Android','Git','Docker','AWS','Figma','VS Code','Prisma','Supabase','Socket.io'];
                foreach ($all_techs as $tech): ?>
                    <span class="tech-badge text-sm py-1.5 px-3"><?= $tech ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ---- Company Info ---- -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Mission & Vision -->
            <div class="reveal-left">
                <div class="section-label">Company</div>
                <h2 class="text-4xl font-bold font-display mt-4 mb-8">SPOTWEB TECH</h2>

                <div class="space-y-6">
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-sky-500/20 rounded-xl flex items-center justify-center text-xl">🎯</div>
                            <h3 class="text-white font-bold font-display">Our Mission</h3>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">To deliver world-class digital experiences that empower businesses in Nigeria and beyond, combining cutting-edge technology with exceptional design to help clients grow and succeed in the digital world.</p>
                    </div>
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-violet-500/20 rounded-xl flex items-center justify-center text-xl">🔭</div>
                            <h3 class="text-white font-bold font-display">Our Vision</h3>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">To become the leading software development company in Africa, known for building innovative, scalable, and impactful digital solutions that transform industries and improve lives.</p>
                    </div>
                    <div class="glass-card rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-emerald-500/20 rounded-xl flex items-center justify-center text-xl">💡</div>
                            <h3 class="text-white font-bold font-display">Our Values</h3>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach (['Excellence', 'Innovation', 'Integrity', 'Speed', 'Collaboration'] as $v): ?>
                                <span class="tech-badge"><?= $v ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience Timeline -->
            <div class="reveal-right">
                <div class="section-label">Experience</div>
                <h2 class="text-4xl font-bold font-display mt-4 mb-8">Work <span class="gradient-text">History</span></h2>

                <div class="relative pl-10">
                    <div class="timeline-line"></div>
                    <?php foreach ($experience as $i => $exp): ?>
                        <div class="relative mb-8 last:mb-0">
                            <div class="absolute left-[-2.125rem] w-6 h-6 bg-sky-500/20 border-2 border-sky-500 rounded-full flex items-center justify-center">
                                <div class="w-2 h-2 bg-sky-400 rounded-full"></div>
                            </div>
                            <div class="glass-card rounded-2xl p-6">
                                <div class="flex flex-wrap items-start justify-between gap-2 mb-2">
                                    <div>
                                        <h3 class="text-white font-bold font-display"><?= htmlspecialchars($exp['title']) ?></h3>
                                        <p class="text-sky-400 text-sm"><?= htmlspecialchars($exp['company']) ?> · <?= htmlspecialchars($exp['location']) ?></p>
                                    </div>
                                    <span class="text-xs text-gray-500 bg-gray-800 px-3 py-1 rounded-full whitespace-nowrap"><?= $exp['period'] ?></span>
                                </div>
                                <p class="text-gray-400 text-sm leading-relaxed mb-3"><?= htmlspecialchars($exp['description']) ?></p>
                                <div class="flex flex-wrap gap-1">
                                    <?php foreach ($exp['technologies'] as $tech): ?>
                                        <span class="tech-badge text-xs"><?= $tech ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ---- Education & Awards ---- -->
<section class="py-20 bg-gray-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Education -->
            <div class="reveal-left">
                <div class="section-label">Education</div>
                <h2 class="text-4xl font-bold font-display mt-4 mb-8">Academic <span class="gradient-text">Background</span></h2>
                <div class="space-y-5">
                    <?php foreach ($education as $edu): ?>
                        <div class="glass-card rounded-2xl p-6">
                            <div class="flex flex-wrap justify-between gap-2 mb-2">
                                <h3 class="text-white font-bold font-display"><?= htmlspecialchars($edu['degree']) ?></h3>
                                <span class="text-xs text-sky-400 bg-sky-500/10 px-3 py-1 rounded-full"><?= $edu['period'] ?></span>
                            </div>
                            <p class="text-sky-400 text-sm mb-2"><?= htmlspecialchars($edu['institution']) ?> · <?= htmlspecialchars($edu['location']) ?></p>
                            <p class="text-gray-400 text-sm leading-relaxed"><?= htmlspecialchars($edu['description']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Awards -->
            <div class="reveal-right">
                <div class="section-label">Recognition</div>
                <h2 class="text-4xl font-bold font-display mt-4 mb-8">Awards & <span class="gradient-text">Achievements</span></h2>
                <div class="space-y-5">
                    <?php foreach ($awards as $award): ?>
                        <div class="glass-card rounded-2xl p-6 flex items-start gap-4">
                            <div class="w-12 h-12 bg-yellow-500/10 border border-yellow-500/20 rounded-xl flex items-center justify-center text-2xl shrink-0">🏆</div>
                            <div>
                                <div class="flex flex-wrap items-start justify-between gap-2 mb-1">
                                    <h3 class="text-white font-bold font-display text-sm"><?= htmlspecialchars($award['title']) ?></h3>
                                    <span class="text-xs text-yellow-400 bg-yellow-500/10 px-2 py-0.5 rounded-full"><?= $award['year'] ?></span>
                                </div>
                                <p class="text-sky-400 text-xs mb-1"><?= htmlspecialchars($award['organization']) ?></p>
                                <p class="text-gray-400 text-xs leading-relaxed"><?= htmlspecialchars($award['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
