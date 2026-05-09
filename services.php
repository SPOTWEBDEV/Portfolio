<?php
require_once 'includes/config.php';
$page_title = 'Services — SPOTWEB TECH | Web Development, Mobile Apps & Design';
$page_description = 'Explore SPOTWEB TECH\'s premium services: web development, mobile app development, and graphic design. Professional solutions for businesses in Nigeria.';
include 'includes/header.php';

$services_full = [
    [
        'icon' => '🌐',
        'color' => 'sky',
        'title' => 'Web Development',
        'desc' => 'We create powerful, scalable web applications tailored to your business needs — from landing pages to complex enterprise systems.',
        'sub_services' => [
            ['name' => 'Corporate Websites', 'desc' => 'Professional, branded websites that represent your business online with elegance.', 'icon' => '🏢'],
            ['name' => 'E-Commerce Platforms', 'desc' => 'Full-featured online stores with payment integration, inventory management, and admin dashboards.', 'icon' => '🛒'],
            ['name' => 'School Portals', 'desc' => 'Student management, course portals, and e-learning systems for educational institutions.', 'icon' => '🎓'],
            ['name' => 'Custom Web Systems', 'desc' => 'Bespoke web applications designed to solve your specific business challenges.', 'icon' => '⚙️'],
            ['name' => 'Admin Dashboards', 'desc' => 'Powerful backend dashboards for managing users, data, and operations efficiently.', 'icon' => '📊'],
            ['name' => 'API Development', 'desc' => 'Robust REST and GraphQL APIs that power your apps and integrate with third-party services.', 'icon' => '🔌'],
        ],
        'techs' => ['PHP', 'Next.js', 'React.js', 'Node.js', 'MySQL', 'PostgreSQL', 'TailwindCSS', 'TypeScript'],
    ],
    [
        'icon' => '📱',
        'color' => 'violet',
        'title' => 'Mobile App Development',
        'desc' => 'Cross-platform mobile applications using React Native — delivering native-quality experiences on both iOS and Android.',
        'sub_services' => [
            ['name' => 'React Native Apps', 'desc' => 'Cross-platform apps that run natively on iOS and Android from a single codebase.', 'icon' => '⚛️'],
            ['name' => 'Android Apps', 'desc' => 'Native Android applications optimized for performance and the Google Play Store.', 'icon' => '🤖'],
            ['name' => 'iOS Applications', 'desc' => 'Beautiful iOS apps built for iPhone and iPad with App Store deployment.', 'icon' => '🍎'],
            ['name' => 'Business Apps', 'desc' => 'Custom business apps for internal operations, team management, and productivity.', 'icon' => '💼'],
            ['name' => 'Push Notifications', 'desc' => 'Real-time push notification systems to keep users engaged and informed.', 'icon' => '🔔'],
            ['name' => 'API Integration', 'desc' => 'Seamless integration with payment gateways, social platforms, and third-party services.', 'icon' => '🔗'],
        ],
        'techs' => ['React Native', 'Expo', 'Firebase', 'Redux', 'REST APIs', 'Socket.io', 'OneSignal'],
    ],
    [
        'icon' => '🎨',
        'color' => 'emerald',
        'title' => 'Graphic Design',
        'desc' => 'Creative visual solutions that communicate your brand identity with impact — from logos to full brand identities.',
        'sub_services' => [
            ['name' => 'Logo Design', 'desc' => 'Unique, memorable logos that define and strengthen your brand identity.', 'icon' => '✏️'],
            ['name' => 'Brand Identity', 'desc' => 'Complete brand packages including color palettes, typography, and brand guidelines.', 'icon' => '🎯'],
            ['name' => 'Marketing Flyers', 'desc' => 'Eye-catching print and digital flyers for events, promotions, and campaigns.', 'icon' => '📋'],
            ['name' => 'Social Media Graphics', 'desc' => 'Professional graphics optimized for Instagram, Facebook, Twitter, and LinkedIn.', 'icon' => '📲'],
            ['name' => 'UI/UX Design', 'desc' => 'User-centered interface designs in Figma before development begins.', 'icon' => '🖥️'],
            ['name' => 'Business Cards', 'desc' => 'Professional business card designs for print and digital use.', 'icon' => '💳'],
        ],
        'techs' => ['Figma', 'Adobe XD', 'Photoshop', 'Illustrator', 'Canva Pro'],
    ],
];
?>

<!-- Page Hero -->
<section class="pt-32 pb-16 relative hero-grid overflow-hidden">
    <div class="glow-orb w-96 h-96 bg-sky-500/15 -top-20 left-0"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="section-label reveal">Services</div>
        <h1 class="text-5xl lg:text-6xl font-bold font-display mt-4 mb-6 reveal delay-100">
            What We <span class="gradient-text">Build</span>
        </h1>
        <p class="text-gray-400 text-lg max-w-2xl reveal delay-200">From idea to deployment — we craft premium digital products that drive results and delight users.</p>
    </div>
</section>

<!-- ---- Process Section ---- -->
<section class="py-16 bg-gray-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <div class="section-label mx-auto">How We Work</div>
            <h2 class="text-3xl font-bold font-display mt-4">Our <span class="gradient-text">Process</span></h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $process = [
                ['step' => '01', 'title' => 'Discovery', 'desc' => 'We understand your goals, audience, and requirements through in-depth consultation.', 'icon' => '🔍'],
                ['step' => '02', 'title' => 'Design', 'desc' => 'We create wireframes and UI mockups in Figma for your review and approval.', 'icon' => '✏️'],
                ['step' => '03', 'title' => 'Development', 'desc' => 'We build your product using modern, scalable technologies with daily updates.', 'icon' => '⚡'],
                ['step' => '04', 'title' => 'Launch & Support', 'desc' => 'We deploy your product and provide ongoing maintenance and support.', 'icon' => '🚀'],
            ];
            foreach ($process as $i => $p): ?>
                <div class="glass-card rounded-2xl p-6 text-center reveal delay-<?= ($i+1)*100 ?> relative">
                    <div class="absolute top-4 right-4 text-gray-800 font-mono font-bold text-3xl leading-none"><?= $p['step'] ?></div>
                    <div class="text-4xl mb-4"><?= $p['icon'] ?></div>
                    <h3 class="text-white font-bold font-display mb-2"><?= $p['title'] ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><?= $p['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ---- Services Detail ---- -->
<?php foreach ($services_full as $si => $svc):
    $c = $svc['color'];
?>
<section class="py-24 <?= $si % 2 !== 0 ? 'bg-gray-900/20' : '' ?> relative overflow-hidden">
    <?php if ($si === 0): ?><div class="glow-orb w-80 h-80 bg-sky-500/10 top-0 right-0"></div><?php endif; ?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="reveal-left">
                <div class="text-5xl mb-4"><?= $svc['icon'] ?></div>
                <h2 class="text-4xl lg:text-5xl font-bold font-display text-white mb-4"><?= htmlspecialchars($svc['title']) ?></h2>
                <p class="text-gray-400 leading-relaxed mb-6"><?= htmlspecialchars($svc['desc']) ?></p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <?php foreach ($svc['techs'] as $tech): ?>
                        <span class="tech-badge"><?= htmlspecialchars($tech) ?></span>
                    <?php endforeach; ?>
                </div>
                <a href="contact.php" class="btn-primary">
                    Get a Quote
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="glass-card rounded-3xl p-8 reveal-right">
                <div class="h-48 flex items-center justify-center text-8xl"><?= $svc['icon'] ?></div>
                <div class="text-center mt-4">
                    <div class="text-white font-display font-bold text-lg"><?= $svc['title'] ?></div>
                    <div class="text-gray-400 text-sm mt-1"><?= count($svc['sub_services']) ?> specialized services</div>
                </div>
            </div>
        </div>

        <!-- Sub Services Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php foreach ($svc['sub_services'] as $i => $sub): ?>
                <div class="glass-card rounded-2xl p-6 reveal delay-<?= ($i % 3 + 1) * 100 ?> group">
                    <div class="text-3xl mb-3"><?= $sub['icon'] ?></div>
                    <h3 class="text-white font-bold font-display mb-2"><?= htmlspecialchars($sub['name']) ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><?= htmlspecialchars($sub['desc']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- CTA -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <div class="glass-card rounded-3xl p-12 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-sky-500/5 to-blue-600/5"></div>
            <div class="relative z-10">
                <h2 class="text-4xl font-bold font-display mb-4">Ready to Get <span class="gradient-text">Started?</span></h2>
                <p class="text-gray-400 mb-8 max-w-lg mx-auto">Tell us about your project and we'll provide a free consultation and quote within 24 hours.</p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="contact.php" class="btn-primary px-8 py-4">Start a Project</a>
                    <a href="pricing.php" class="btn-outline px-8 py-4">View Pricing</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
