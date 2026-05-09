<?php
require_once 'includes/config.php';
$page_title = 'Gallery — SPOTWEB TECH | Portfolio Projects';
$page_description = 'Explore SPOTWEB TECH\'s portfolio of web and mobile projects. View our gallery of completed work across various industries.';
include 'includes/header.php';

// Gallery items (using placeholder images for demo)
$gallery_items = [
    ['title' => 'TextOrbits Platform', 'category' => 'web', 'description' => 'Communication platform - Billz Company'],
    ['title' => 'Boost Yard Dashboard', 'category' => 'web', 'description' => 'Social media growth platform'],
    ['title' => 'Josemaka Marketplace', 'category' => 'web', 'description' => 'Car parts & machine marketplace'],
    ['title' => 'SWT Documentation', 'category' => 'web', 'description' => 'NPM package documentation generator'],
    ['title' => 'E-Commerce Platform', 'category' => 'web', 'description' => 'Full-stack shopping solution'],
    ['title' => 'Task Manager App', 'category' => 'web', 'description' => 'Real-time collaboration tool'],
    ['title' => 'Fitness Tracking App', 'category' => 'mobile', 'description' => 'React Native fitness app'],
    ['title' => 'Business Dashboard', 'category' => 'mobile', 'description' => 'Mobile business analytics'],
    ['title' => 'Brand Identity Design', 'category' => 'design', 'description' => 'Corporate branding project'],
    ['title' => 'Logo Collection', 'category' => 'design', 'description' => 'Multiple logo design projects'],
    ['title' => 'Social Media Kit', 'category' => 'design', 'description' => 'Complete social media graphics package'],
    ['title' => 'Restaurant App UI', 'category' => 'mobile', 'description' => 'Food ordering app design & development'],
];

// Video gallery items
$videos = [
    ['title' => 'Web Development Showcase', 'desc' => 'A tour of SPOTWEB TECH\'s recent web projects'],
    ['title' => 'Mobile App Demo', 'desc' => 'React Native app demonstration'],
    ['title' => 'Design Process', 'desc' => 'Behind the scenes of our design workflow'],
];

// Category colors
$cat_colors = [
    'web'    => ['text-sky-400', 'bg-sky-500/10'],
    'mobile' => ['text-violet-400', 'bg-violet-500/10'],
    'design' => ['text-emerald-400', 'bg-emerald-500/10'],
];

// Gradient backgrounds for gallery cards (since we have placeholder images)
$gradients = [
    'from-sky-500/20 to-blue-600/20',
    'from-violet-500/20 to-purple-600/20',
    'from-emerald-500/20 to-teal-600/20',
    'from-orange-500/20 to-red-600/20',
    'from-pink-500/20 to-rose-600/20',
    'from-indigo-500/20 to-blue-600/20',
    'from-cyan-500/20 to-sky-600/20',
    'from-fuchsia-500/20 to-violet-600/20',
    'from-lime-500/20 to-emerald-600/20',
    'from-amber-500/20 to-orange-600/20',
    'from-teal-500/20 to-cyan-600/20',
    'from-rose-500/20 to-pink-600/20',
];
?>

<!-- Page Hero -->
<section class="pt-32 pb-16 relative hero-grid overflow-hidden">
    <div class="glow-orb w-80 h-80 bg-violet-500/10 top-0 right-0"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="section-label reveal">Portfolio</div>
        <h1 class="text-5xl lg:text-6xl font-bold font-display mt-4 mb-6 reveal delay-100">
            Our <span class="gradient-text">Work</span>
        </h1>
        <p class="text-gray-400 text-lg max-w-2xl reveal delay-200">A showcase of projects we've built with passion and precision.</p>
    </div>
</section>

<!-- ---- Filter Tabs ---- -->
<section class="py-8 sticky top-16 lg:top-20 z-30 bg-gray-950/90 backdrop-blur-md border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-3 justify-center">
            <?php foreach (['all' => 'All Projects', 'web' => 'Web', 'mobile' => 'Mobile', 'design' => 'Design'] as $key => $label): ?>
                <button onclick="filterGallery('<?= $key ?>')"
                    class="filter-btn px-5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 <?= $key === 'all' ? 'bg-sky-500/20 text-sky-400 border border-sky-500/30' : 'text-gray-400 bg-white/5 border border-white/5 hover:text-white hover:bg-white/10' ?>"
                    data-filter="<?= $key ?>">
                    <?= $label ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ---- Image Gallery ---- -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-5 space-y-5" id="gallery-grid">
            <?php foreach ($gallery_items as $i => $item):
                $cats = $cat_colors[$item['category']] ?? ['text-gray-400', 'bg-gray-500/10'];
                $grad = $gradients[$i % count($gradients)];
            ?>
                <div class="gallery-card break-inside-avoid reveal delay-<?= ($i % 6 + 1) * 50 ?>" data-category="<?= $item['category'] ?>">
                    <div class="glass-card rounded-2xl overflow-hidden group cursor-pointer gallery-item"
                         data-src="assets/images/project-<?= $i+1 ?>.jpg"
                         data-title="<?= htmlspecialchars($item['title']) ?>">
                        <!-- Placeholder image area -->
                        <div class="bg-gradient-to-br <?= $grad ?> relative overflow-hidden"
                             style="height: <?= [180, 220, 200, 240, 180, 210, 190, 230, 200, 175, 215, 195][$i] ?>px">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center px-4">
                                    <div class="text-6xl font-bold font-display text-white/10 mb-2"><?= strtoupper(substr($item['title'], 0, 2)) ?></div>
                                    <div class="text-white/40 text-xs font-mono"><?= strtolower(str_replace(' ', '_', $item['title'])) ?></div>
                                </div>
                            </div>
                            <!-- Hover overlay -->
                            <div class="absolute inset-0 bg-gray-900/80 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-10 h-10 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    <span class="text-white text-sm font-medium">View Project</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-start justify-between gap-3 mb-2">
                                <h3 class="text-white font-bold font-display text-sm"><?= htmlspecialchars($item['title']) ?></h3>
                                <span class="text-xs px-2 py-1 rounded-lg <?= $cats[0] ?> <?= $cats[1] ?> shrink-0 capitalize"><?= $item['category'] ?></span>
                            </div>
                            <p class="text-gray-500 text-xs"><?= htmlspecialchars($item['description']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ---- Video Gallery ---- -->
<section class="py-20 bg-gray-900/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <div class="section-label mx-auto">Video Gallery</div>
            <h2 class="text-3xl font-bold font-display mt-4">Watch Our <span class="gradient-text">Work in Action</span></h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($videos as $i => $video): ?>
                <div class="glass-card rounded-2xl overflow-hidden reveal delay-<?= ($i+1)*100 ?>">
                    <!-- Video placeholder (in production, use actual video files) -->
                    <div class="relative bg-gray-800 aspect-video flex items-center justify-center group cursor-pointer"
                         onclick="this.nextElementSibling.classList.toggle('hidden'); this.classList.toggle('hidden')">
                        <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900"></div>
                        <div class="relative z-10 text-center">
                            <div class="w-16 h-16 bg-sky-500/20 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-sky-500/40 transition-all border border-sky-500/30">
                                <svg class="w-7 h-7 text-sky-400 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                            <div class="text-white/60 text-sm">Click to play demo</div>
                        </div>
                    </div>
                    <!-- Actual video element (hidden by default) -->
                    <video class="hidden w-full aspect-video bg-black" controls preload="none">
                        <source src="assets/videos/demo-<?= $i+1 ?>.mp4" type="video/mp4">
                        Your browser does not support video.
                    </video>
                    <div class="p-5">
                        <h3 class="text-white font-bold font-display mb-1"><?= htmlspecialchars($video['title']) ?></h3>
                        <p class="text-gray-400 text-sm"><?= htmlspecialchars($video['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-card rounded-3xl p-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <?php
                $stats = [
                    ['num' => 50, 'suffix' => '+', 'label' => 'Projects Delivered'],
                    ['num' => 20, 'suffix' => '+', 'label' => 'Happy Clients'],
                    ['num' => 3,  'suffix' => '+', 'label' => 'Years Experience'],
                    ['num' => 4,  'suffix' => '',  'label' => 'Industry Awards'],
                ];
                foreach ($stats as $s): ?>
                    <div class="reveal">
                        <div class="text-4xl font-bold font-display gradient-text counter" data-target="<?= $s['num'] ?>" data-suffix="<?= $s['suffix'] ?>">0<?= $s['suffix'] ?></div>
                        <div class="text-gray-400 text-sm mt-2"><?= $s['label'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="lightbox-overlay" role="dialog" aria-modal="true" aria-label="Image preview">
    <button id="lightbox-close" class="absolute top-6 right-6 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-xl flex items-center justify-center text-white transition-all" aria-label="Close">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
    <img id="lightbox-img" src="" alt="Gallery preview" class="max-w-4xl w-full max-h-[85vh] object-contain rounded-2xl">
</div>

<script>
function filterGallery(cat) {
    // Update button states
    document.querySelectorAll('.filter-btn').forEach(btn => {
        const isActive = btn.dataset.filter === cat;
        btn.className = `filter-btn px-5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 ${
            isActive
                ? 'bg-sky-500/20 text-sky-400 border border-sky-500/30'
                : 'text-gray-400 bg-white/5 border border-white/5 hover:text-white hover:bg-white/10'
        }`;
    });

    // Filter items
    document.querySelectorAll('.gallery-card').forEach(card => {
        const match = cat === 'all' || card.dataset.category === cat;
        card.style.display = match ? '' : 'none';
    });
}
</script>

<?php include 'includes/footer.php'; ?>
