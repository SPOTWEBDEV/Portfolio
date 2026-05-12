<?php
// ============================================================
// SPOTWEB TECH — Site Configuration
// ============================================================

define('SITE_NAME', 'SPOTWEB TECH');
define('SITE_OWNER', 'Ezea Ugochukwu Micheal');
define('SITE_TAGLINE', 'Fullstack Web Developer & React Native Mobile Developer');
define('SITE_EMAIL', 'support@spotwebtech.com');
define('SITE_PHONE', '+234 8160893720');
define('SITE_ADDRESS', 'Enugu, Enugu State, Nigeria');
define('SITE_URL', 'https://spotwebtech.com');
define('BASE_URL', '');

// Social Links
$social = [
    'github'   => 'https://github.com/SPOTWEBDEV',
    'linkedin' => 'https://linkedin.com/in/firstclass',
    'twitter'  => 'https://twitter.com/firstclass',
    'email'    => 'spotwebdev.com@gmail.com',
    'website'  => 'https://spotwebtech.com',
];

// Pricing Plans
$pricing = [
    [
        'title'    => 'Starter Website',
        'price'    => '₦150,000',
        'popular'  => false,
        'features' => [
            '5 Custom Pages',
            'Responsive Design',
            'Contact Form',
            'Basic SEO Setup',
            'Social Media Links',
            '1 Month Support',
        ],
    ],
    [
        'title'    => 'Business Website',
        'price'    => '₦300,000',
        'popular'  => true,
        'features' => [
            '10 Custom Pages',
            'Admin Dashboard',
            'SEO Optimization',
            'Blog / News System',
            'Payment Integration',
            '3 Months Support',
        ],
    ],
    [
        'title'    => 'E-Commerce',
        'price'    => '₦450,000',
        'popular'  => false,
        'features' => [
            'Unlimited Products',
            'Payment Gateway',
            'Inventory System',
            'Order Management',
            'Customer Accounts',
            '6 Months Support',
        ],
    ],
    [
        'title'    => 'Mobile App',
        'price'    => '₦500,000',
        'popular'  => false,
        'features' => [
            'React Native (iOS & Android)',
            'API Integration',
            'Push Notifications',
            'Admin Dashboard',
            'Play & App Store Upload',
            '6 Months Support',
        ],
    ],
];

// Projects
$projects = [
    [
        'id'           => 1,
        'title'        => 'TextOrbits — Billz Company',
        'description'  => 'A communication platform providing virtual phone numbers for calling, messaging, and verification across multiple regions.',
        'technologies' => ['Node.js', 'Sms-Man API', 'React.js', 'MySQL'],
        'link'         => 'https://app.textorbits.com',
        'featured'     => true,
    ],
    [
        'id'           => 2,
        'title'        => 'Boost Yard — Larry Digital Hub',
        'description'  => 'Helps users grow followers, views, and engagement across major social platforms — fast, reliable, and secure.',
        'technologies' => ['PHP', 'JavaScript', 'MySQL'],
        'link'         => 'https://boostyard.com',
        'featured'     => true,
    ],
    [
        'id'           => 3,
        'title'        => 'Josemaka — Car Parts & Machine Marketplace',
        'description'  => 'A modern platform for buying and selling car parts and industrial machines with secure payments and real-time inventory.',
        'technologies' => ['Next.js', 'Express', 'PostgreSQL', 'TailwindCSS'],
        'link'         => 'https://josemaka.com/',
        'featured'     => true,
    ],
    [
        'id'           => 4,
        'title'        => 'SWT-Documentation (NPM Package)',
        'description'  => 'A modern API documentation generator inspired by Swagger — minimal config, interactive and beautiful.',
        'technologies' => ['Node.js', 'Express', 'EJS', 'NPM'],
        'link'         => 'https://www.npmjs.com/package/swt-documentation',
        'featured'     => true,
    ],
    [
        'id'           => 5,
        'title'        => 'E-Commerce Platform',
        'description'  => 'Full-stack e-commerce solution with payment integration, inventory management, and admin dashboard.',
        'technologies' => ['Next.js', 'Node.js', 'Stripe', 'PostgreSQL'],
        'link'         => '#',
        'featured'     => false,
    ],
    [
        'id'           => 6,
        'title'        => 'Task Management System',
        'description'  => 'Collaborative project management tool with real-time updates and team collaboration features.',
        'technologies' => ['React', 'Express', 'Socket.io', 'MongoDB'],
        'link'         => '#',
        'featured'     => false,
    ],
];

// Team Members
$team = [
    [
        'name'     => 'Ezea Ugochukwu Micheal',
        'position' => 'CEO & Lead Developer',
        'bio'      => 'Fullstack developer & founder of SPOTWEB TECH with expertise in web and mobile app development.',
    ],
    [
        'name'     => 'Design Team',
        'position' => 'UI/UX Designers',
        'bio'      => 'Creative designers crafting beautiful, user-centered interfaces for web and mobile.',
    ],
    [
        'name'     => 'Backend Team',
        'position' => 'Backend Engineers',
        'bio'      => 'Specialists in building scalable, secure backend systems and APIs.',
    ],
];

// Testimonials (subset)
$testimonials = [
    [
        'name'    => 'JayHub',
        'role'    => 'CEO, JayHub',
        'content' => 'SPOTWEBTECH built our web and mobile trading dashboards with top-tier performance. The platform scales effortlessly, and their support team is always responsive.',
        'type'    => 'company',
    ],
    [
        'name'    => 'Chiamaka Okafor',
        'role'    => 'Entrepreneur, LuxeStyle Boutique',
        'content' => 'My online store looks amazing! SPOTWEBTECH made everything fast, mobile-friendly, and easy to manage.',
        'type'    => 'client',
    ],
    [
        'name'    => 'Digital Dreams ICT Academy',
        'role'    => 'Head of Development',
        'content' => 'SPOTWEBTECH transformed our student management system into a modern web solution. The speed and usability are beyond expectations.',
        'type'    => 'company',
    ],
    [
        'name'    => 'LogiTrack Solutions',
        'role'    => 'Operations Manager',
        'content' => 'The logistics tracking system from SPOTWEBTECH improved our efficiency by 60%. Exceptional development quality.',
        'type'    => 'company',
    ],
    [
        'name'    => 'Aisha Bello',
        'role'    => 'Freelance Graphic Designer, AB Designs',
        'content' => 'My portfolio website now looks sleek and loads fast. SPOTWEBTECH pays attention to every detail.',
        'type'    => 'client',
    ],
    [
        'name'    => 'PayFlow Systems',
        'role'    => 'Product Director',
        'content' => 'The payment gateway integration by SPOTWEBTECH is seamless and secure. Professional work from start to finish.',
        'type'    => 'company',
    ],
];

// Skills
$skills = [
    ['name' => 'PHP',            'level' => 92],
    ['name' => 'React / React Native', 'level' => 95],
    ['name' => 'JavaScript',    'level' => 93],
    ['name' => 'TailwindCSS',   'level' => 98],
    ['name' => 'Node.js',       'level' => 95],
    ['name' => 'MySQL / MongoDB', 'level' => 90],
    ['name' => 'Next.js',       'level' => 90],
    ['name' => 'API Integration', 'level' => 91],
];

// Education
$education = [
    [
        'degree'      => 'Mechanical Engineering',
        'institution' => 'Institute of Management and Technology (IMT)',
        'location'    => 'Enugu, Nigeria',
        'period'      => '2019 — 2020',
        'description' => 'Studied mechanical systems design, thermodynamics, and applied physics. Gained hands-on experience with engineering drawings and technical problem-solving.',
    ],
    [
        'degree'      => 'Full Stack Web Development',
        'institution' => 'Digital Dreams ICT Academy',
        'location'    => 'Enugu, Nigeria',
        'period'      => '2021 — 2022',
        'description' => 'Completed an intensive program on building dynamic web applications using HTML, CSS, JavaScript, React, Node.js, and PHP.',
    ],
    [
        'degree'      => 'Software Engineering',
        'institution' => 'Hux WebDev',
        'location'    => 'Online',
        'period'      => '2022 — 2023',
        'description' => 'Specialized in software design with emphasis on coding standards, system architecture, and agile methodologies.',
    ],
];

// Work Experience
$experience = [
    [
        'title'        => 'Senior Full Stack Developer',
        'company'      => 'Digital Dreams ICT Academy',
        'location'     => 'Full Time',
        'period'       => '2022 — 2024',
        'description'  => 'Led development of scalable web-based learning platforms. Built responsive UIs with React and maintained secure backends using PHP and MySQL. Mentored junior developers.',
        'technologies' => ['React', 'PHP', 'JavaScript', 'TypeScript', 'MySQL'],
    ],
    [
        'title'        => 'Senior Full Stack Developer',
        'company'      => 'JayHub',
        'location'     => 'Remote',
        'period'       => '2020 — Present',
        'description'  => 'Architected web and mobile applications focusing on seamless frontend-backend integration. Designed scalable APIs and optimized database performance.',
        'technologies' => ['React', 'React Native', 'Node.js', 'Redux', 'Firebase', 'REST APIs'],
    ],
    [
        'title'        => 'Senior Full Stack Developer',
        'company'      => 'Bily',
        'location'     => 'Onsite & Remote',
        'period'       => '2025 — Present',
        'description'  => 'Spearheading enterprise-level web application development focusing on performance, security, and scalability. Managing the full development cycle.',
        'technologies' => ['Next.js', 'React.js', 'Node.js', 'Express.js', 'MongoDB'],
    ],
];

// Awards
$awards = [
    [
        'title'        => 'Best Graduating Student Award',
        'organization' => 'Digital Dreams ICT Academy — Agbani Road Enugu',
        'year'         => '2021',
        'description'  => 'Recognized for outstanding academic performance and innovative project delivery.',
    ],
    [
        'title'        => 'Developer of the Year',
        'organization' => 'Local Tech Community',
        'year'         => '2022',
        'description'  => 'Awarded for contributions to open-source projects and community mentorship.',
    ],
    [
        'title'        => 'Best Mobile App Award',
        'organization' => 'Tech Innovation Summit — Enugu State',
        'year'         => '2025',
        'description'  => 'Recognized for outstanding mobile application design and user experience.',
    ],
    [
        'title'        => 'Hackathon Winner',
        'organization' => 'Global Hack Week — Lagos',
        'year'         => '2022',
        'description'  => 'First place for building an innovative solution to environmental challenges.',
    ],
];
