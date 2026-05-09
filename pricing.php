<?php
require_once 'includes/config.php';
$page_title = 'Pricing — SPOTWEB TECH | Transparent Web & Mobile Development Pricing';
$page_description = 'Clear and transparent pricing for web development, mobile app development, and design services. Quality digital solutions at competitive rates.';
include 'includes/header.php';

// Extended pricing
$pricing_plans = [
    [
        'title'    => 'Starter Website',
        'price'    => '₦150,000',
        'duration' => '1-2 weeks',
        'popular'  => false,
        'color'    => 'gray',
        'features' => [
            ['text' => '5 Custom Pages',        'included' => true],
            ['text' => 'Responsive Design',      'included' => true],
            ['text' => 'Contact Form',           'included' => true],
            ['text' => 'Basic SEO Setup',        'included' => true],
            ['text' => 'Social Media Links',     'included' => true],
            ['text' => '1 Month Support',        'included' => true],
            ['text' => 'Admin Dashboard',        'included' => false],
            ['text' => 'Payment Integration',    'included' => false],
            ['text' => 'Custom Animations',      'included' => false],
        ],
    ],
    [
        'title'    => 'Business Website',
        'price'    => '₦300,000',
        'duration' => '2-4 weeks',
        'popular'  => true,
        'color'    => 'sky',
        'features' => [
            ['text' => '10 Custom Pages',        'included' => true],
            ['text' => 'Responsive Design',      'included' => true],
            ['text' => 'Contact Form',           'included' => true],
            ['text' => 'Full SEO Optimization',  'included' => true],
            ['text' => 'Admin Dashboard',        'included' => true],
            ['text' => 'Blog / News System',     'included' => true],
            ['text' => '3 Months Support',       'included' => true],
            ['text' => 'Payment Integration',    'included' => false],
            ['text' => 'Custom Animations',      'included' => true],
        ],
    ],
    [
        'title'    => 'E-Commerce Store',
        'price'    => '₦450,000',
        'duration' => '4-6 weeks',
        'popular'  => false,
        'color'    => 'violet',
        'features' => [
            ['text' => 'Unlimited Products',     'included' => true],
            ['text' => 'Responsive Design',      'included' => true],
            ['text' => 'Payment Gateway',        'included' => true],
            ['text' => 'Full SEO Optimization',  'included' => true],
            ['text' => 'Inventory System',       'included' => true],
            ['text' => 'Order Management',       'included' => true],
            ['text' => 'Customer Accounts',      'included' => true],
            ['text' => '6 Months Support',       'included' => true],
            ['text' => 'Custom Animations',      'included' => true],
        ],
    ],
    [
        'title'    => 'Mobile App',
        'price'    => '₦500,000',
        'duration' => '6-10 weeks',
        'popular'  => false,
        'color'    => 'emerald',
        'features' => [
            ['text' => 'React Native (iOS & Android)', 'included' => true],
            ['text' => 'API Integration',        'included' => true],
            ['text' => 'Push Notifications',     'included' => true],
            ['text' => 'Admin Dashboard',        'included' => true],
            ['text' => 'Play & App Store Upload','included' => true],
            ['text' => 'User Authentication',    'included' => true],
            ['text' => 'Firebase Integration',   'included' => true],
            ['text' => '6 Months Support',       'included' => true],
            ['text' => 'Custom Animations',      'included' => true],
        ],
    ],
];

$color_map = [
    'gray'    => ['border' => 'border-gray-700',   'btn' => 'from-gray-600 to-gray-700',     'badge' => 'bg-gray-600/20 text-gray-300'],
    'sky'     => ['border' => 'border-sky-500/50', 'btn' => 'from-sky-500 to-blue-600',      'badge' => 'bg-sky-500/20 text-sky-300'],
    'violet'  => ['border' => 'border-violet-500/40', 'btn' => 'from-violet-500 to-purple-600', 'badge' => 'bg-violet-500/20 text-violet-300'],
    'emerald' => ['border' => 'border-emerald-500/40', 'btn' => 'from-emerald-500 to-teal-600', 'badge' => 'bg-emerald-500/20 text-emerald-300'],
];
?>

<!-- Page Hero -->
<section class="pt-32 pb-16 relative hero-grid overflow-hidden">
    <div class="glow-orb w-96 h-96 bg-violet-500/10 -top-20 right-0"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="section-label mx-auto reveal">Pricing</div>
        <h1 class="text-5xl lg:text-6xl font-bold font-display mt-4 mb-6 reveal delay-100">
            Transparent <span class="gradient-text">Pricing</span>
        </h1>
        <p class="text-gray-400 text-lg max-w-2xl mx-auto reveal delay-200">Quality digital solutions with clear, upfront pricing. No hidden fees, no surprises.</p>
    </div>
</section>

<!-- ---- Pricing Cards ---- -->
<section class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
            <?php foreach ($pricing_plans as $i => $plan):
                $colors = $color_map[$plan['color']];
            ?>
                <div class="relative glass-card rounded-3xl p-8 flex flex-col reveal delay-<?= ($i+1)*100 ?> <?= $plan['popular'] ? 'border-sky-500/50 bg-sky-500/5' : '' ?>">
                    <?php if ($plan['popular']): ?>
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                            <span class="bg-gradient-to-r from-sky-500 to-blue-600 text-white text-xs font-bold px-4 py-1.5 rounded-full">Most Popular</span>
                        </div>
                    <?php endif; ?>

                    <div class="mb-6">
                        <h3 class="text-white font-bold font-display text-xl mb-2"><?= htmlspecialchars($plan['title']) ?></h3>
                        <div class="text-4xl font-bold font-display gradient-text mb-1"><?= htmlspecialchars($plan['price']) ?></div>
                        <div class="text-gray-500 text-sm flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <?= htmlspecialchars($plan['duration']) ?>
                        </div>
                    </div>

                    <ul class="space-y-3 flex-1 mb-8">
                        <?php foreach ($plan['features'] as $feat): ?>
                            <li class="flex items-start gap-3 text-sm">
                                <?php if ($feat['included']): ?>
                                    <svg class="w-4 h-4 text-emerald-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                    <span class="text-gray-300"><?= htmlspecialchars($feat['text']) ?></span>
                                <?php else: ?>
                                    <svg class="w-4 h-4 text-gray-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                    <span class="text-gray-600"><?= htmlspecialchars($feat['text']) ?></span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="contact.php?plan=<?= urlencode($plan['title']) ?>"
                       class="w-full text-center py-3 px-6 bg-gradient-to-r <?= $colors['btn'] ?> text-white font-semibold rounded-xl hover:opacity-90 transition-all hover:-translate-y-0.5 block text-sm shadow-lg">
                        Get Started
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ---- Add-ons ---- -->
<section class="py-20 bg-gray-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <div class="section-label mx-auto">Add-Ons</div>
            <h2 class="text-3xl font-bold font-display mt-4">Optional <span class="gradient-text">Extras</span></h2>
            <p class="text-gray-400 mt-3">Enhance your package with additional services</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php
            $addons = [
                ['name' => 'Domain & Hosting Setup', 'price' => '₦20,000/yr', 'icon' => '🌐'],
                ['name' => 'SSL Certificate', 'price' => '₦15,000/yr', 'icon' => '🔒'],
                ['name' => 'Logo Design', 'price' => '₦30,000', 'icon' => '✏️'],
                ['name' => 'SEO Optimization', 'price' => '₦50,000', 'icon' => '📈'],
                ['name' => 'Monthly Maintenance', 'price' => '₦25,000/mo', 'icon' => '🔧'],
                ['name' => 'Content Writing (10 pages)', 'price' => '₦40,000', 'icon' => '📝'],
            ];
            foreach ($addons as $i => $addon): ?>
                <div class="glass-card rounded-2xl p-6 flex items-center gap-4 reveal delay-<?= ($i % 3 + 1) * 100 ?>">
                    <div class="text-3xl shrink-0"><?= $addon['icon'] ?></div>
                    <div class="flex-1">
                        <div class="text-white font-medium text-sm"><?= htmlspecialchars($addon['name']) ?></div>
                        <div class="text-sky-400 font-bold font-mono text-sm mt-0.5"><?= htmlspecialchars($addon['price']) ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ---- FAQ ---- -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <div class="section-label mx-auto">FAQ</div>
            <h2 class="text-3xl font-bold font-display mt-4">Common <span class="gradient-text">Questions</span></h2>
        </div>
        <div class="space-y-4" id="faq-list">
            <?php
            $faqs = [
                ['q' => 'Do you require a deposit?', 'a' => 'Yes. We require a 50% deposit before work begins, with the balance due upon project completion and your approval.'],
                ['q' => 'Can I see a demo before paying?', 'a' => 'Absolutely! We provide a free consultation and can share relevant portfolio samples before you commit.'],
                ['q' => 'Do you provide hosting?', 'a' => 'Yes, we can set up and manage hosting for your website. Hosting costs are billed separately.'],
                ['q' => 'How long does development take?', 'a' => 'Timelines vary by project complexity. Starter sites take 1-2 weeks, while mobile apps can take 6-10 weeks. We\'ll provide a clear timeline in your proposal.'],
                ['q' => 'Do you offer revisions?', 'a' => 'Yes, all packages include revision rounds. The number of revisions depends on your package.'],
                ['q' => 'Can I upgrade my package later?', 'a' => 'Yes! You can always upgrade or add features to your project at any time.'],
            ];
            foreach ($faqs as $i => $faq): ?>
                <div class="glass-card rounded-2xl overflow-hidden reveal delay-<?= ($i % 3 + 1) * 100 ?>">
                    <button class="faq-btn w-full flex items-center justify-between p-6 text-left" onclick="toggleFaq(this)">
                        <span class="text-white font-medium"><?= htmlspecialchars($faq['q']) ?></span>
                        <svg class="w-5 h-5 text-sky-400 transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-400 text-sm leading-relaxed"><?= htmlspecialchars($faq['a']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
function toggleFaq(btn) {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector('.faq-icon');
    const isOpen = !content.classList.contains('hidden');
    // Close all
    document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
    document.querySelectorAll('.faq-icon').forEach(i => i.style.transform = '');
    if (!isOpen) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    }
}
</script>

<!-- CTA -->
<section class="py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <div class="glass-card rounded-3xl p-10">
            <h2 class="text-3xl font-bold font-display mb-4">Not Sure Which <span class="gradient-text">Plan?</span></h2>
            <p class="text-gray-400 mb-8">Contact us for a free consultation. We'll recommend the best solution for your specific needs and budget.</p>
            <a href="contact.php" class="btn-primary px-8 py-4">
                Book Free Consultation
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
