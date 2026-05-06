<?php
require_once __DIR__ . '/config.php';
$current_page = isset($current_page) ? $current_page : '';
$nav_class = 'hover:text-brand-primary transition-colors';
$nav_active = 'text-brand-primary';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5ZRDVR9K');</script>
    <!-- End Google Tag Manager -->
    <?php include __DIR__ . '/head.php'; ?>
</head>
<body class="bg-white text-brand-secondary font-sans antialiased overflow-x-hidden">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZRDVR9K"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header -->
    <header id="header" class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 md:px-8 lg:px-12 h-16 md:h-20 flex items-center justify-between">
            <a href="<?php echo htmlspecialchars($base_path); ?>/" class="flex items-center gap-2 no-underline text-inherit hover:opacity-90 transition-opacity">
                <img src="<?php echo htmlspecialchars($base_path); ?>/assets/images/funtime-logo.jpg" alt="Fun Time Sports & Entertainment" class="h-9 md:h-11 w-auto rounded-md" />
            </a>
            <nav class="hidden md:flex items-center gap-6 lg:gap-10 font-semibold text-sm tracking-wider">
                <a href="<?php echo htmlspecialchars($base_path); ?>/" class="<?php echo $current_page === 'home' ? $nav_active : $nav_class; ?>">Home</a>
                <div class="group relative" id="products-nav-group">
                    <a href="<?php echo htmlspecialchars($base_path); ?>/products" class="<?php echo $current_page === 'products' ? $nav_active : $nav_class; ?> inline-flex items-center gap-1">Products <i class="fa-solid fa-chevron-down text-[10px] opacity-70"></i></a>
                    <div id="products-dropdown-bridge" class="fixed left-0 right-0 top-12 md:top-16 h-8 md:h-10 z-40 opacity-0 pointer-events-none transition-opacity duration-150" aria-hidden="true"></div>
                    <div id="products-dropdown-panel" class="products-dropdown fixed left-0 w-full top-16 md:top-20 z-40 opacity-0 invisible pointer-events-none">
                        <div class="bg-white border-b border-gray-200 shadow-xl py-8">
                            <div class="max-w-[1440px] mx-auto px-4 sm:px-6 md:px-8 lg:px-12">
                                <p class="text-xs font-bold text-gray-400 tracking-widest mb-6 normal-case">All Products</p>
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-x-6 gap-y-2 capitalize">
                                    <?php foreach ($products_nav as $p): ?>
                                    <a href="<?php echo htmlspecialchars($base_path); ?>/products/<?php echo htmlspecialchars($p[0]); ?>" class="text-brand-secondary font-medium text-sm py-2 hover:text-brand-primary transition-colors"><?php echo htmlspecialchars($p[1]); ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo htmlspecialchars($base_path); ?>/about" class="<?php echo $current_page === 'about' ? $nav_active : $nav_class; ?>">About</a>
                <a href="<?php echo htmlspecialchars($base_path); ?>/manufacturing" class="<?php echo $current_page === 'manufacturing' ? $nav_active : $nav_class; ?>">Manufacturing</a>
                <a href="<?php echo htmlspecialchars($base_path); ?>/partner" class="<?php echo $current_page === 'partner' ? $nav_active : $nav_class; ?>">Partner</a>
                <a href="<?php echo htmlspecialchars($base_path); ?>/contact" class="<?php echo $current_page === 'contact' ? $nav_active : $nav_class; ?>">Contact</a>
            </nav>
            <div class="flex items-center gap-3">
                <a href="<?php echo htmlspecialchars($base_path); ?>/contact" class="hidden md:inline-block cursor-pointer bg-brand-secondary text-white px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-xs sm:text-sm font-bold hover:bg-brand-primary transition-all duration-300 no-underline">GET A QUOTE</a>
                <button type="button" id="mobile-menu-btn" aria-label="Open menu" class="md:hidden w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 text-brand-secondary relative">
                    <i class="fa-solid fa-bars text-xl mobile-icon-bars" id="mobile-icon-bars"></i>
                    <i class="fa-solid fa-times text-xl mobile-icon-close hidden" id="mobile-icon-close" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile menu overlay -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay fixed inset-0 bg-black/40 z-40 opacity-0 invisible md:opacity-0 md:invisible md:pointer-events-none" aria-hidden="true"></div>
    <!-- Mobile menu dropdown (right) -->
    <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 h-full w-72 max-w-[85vw] bg-white shadow-2xl z-50 flex flex-col translate-x-full md:translate-x-full" aria-hidden="true">
        <div class="flex items-center justify-between p-4 border-b border-gray-100">
            <span class="font-bold text-brand-secondary">Menu</span>
            <button type="button" id="mobile-menu-close" aria-label="Close menu" class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 text-brand-secondary">
                <i class="fa-solid fa-times text-xl" aria-hidden="true"></i>
            </button>
        </div>
        <nav class="flex-1 overflow-y-auto p-4 flex flex-col font-medium text-brand-secondary">
            <a href="<?php echo htmlspecialchars($base_path); ?>/" class="py-3.5 px-3 rounded-xl hover:bg-gray-50 hover:text-brand-primary transition-colors border-b border-gray-100">Home</a>
            <div class="border-b border-gray-100">
                <button type="button" id="mobile-products-toggle" class="w-full py-3.5 px-3 rounded-xl hover:bg-gray-50 transition-colors flex items-center justify-between text-left" aria-expanded="false" aria-controls="mobile-products-content">
                    <span>Products</span>
                    <i class="fa-solid fa-chevron-down text-brand-primary text-xs transition-transform duration-200 mobile-products-chevron" aria-hidden="true"></i>
                </button>
                <div id="mobile-products-content" class="mobile-products-content max-h-0" aria-hidden="true" style="max-height: 0;">
                    <div class="pl-3 pb-3 pt-1 flex flex-col gap-0.5 capitalize bg-gray-50/50 rounded-b-xl">
                        <a href="<?php echo htmlspecialchars($base_path); ?>/products" class="py-2.5 px-3 rounded-lg hover:bg-white hover:text-brand-primary transition-colors text-sm font-medium">All products</a>
                        <?php foreach ($products_nav as $p): ?>
                        <a href="<?php echo htmlspecialchars($base_path); ?>/products/<?php echo htmlspecialchars($p[0]); ?>" class="py-2 px-3 rounded-lg hover:bg-white hover:text-brand-primary transition-colors text-sm text-gray-600"><?php echo htmlspecialchars($p[1]); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <a href="<?php echo htmlspecialchars($base_path); ?>/about" class="py-3.5 px-3 rounded-xl hover:bg-gray-50 hover:text-brand-primary transition-colors border-b border-gray-100">About</a>
            <a href="<?php echo htmlspecialchars($base_path); ?>/manufacturing" class="py-3.5 px-3 rounded-xl hover:bg-gray-50 hover:text-brand-primary transition-colors border-b border-gray-100">Manufacturing</a>
            <a href="<?php echo htmlspecialchars($base_path); ?>/partner" class="py-3.5 px-3 rounded-xl hover:bg-gray-50 hover:text-brand-primary transition-colors border-b border-gray-100">Partner</a>
            <a href="<?php echo htmlspecialchars($base_path); ?>/contact" class="py-3.5 px-3 rounded-xl hover:bg-gray-50 hover:text-brand-primary transition-colors border-b border-gray-100">Contact</a>
        </nav>
        <div class="p-4 border-t border-gray-100">
            <a href="<?php echo htmlspecialchars($base_path); ?>/contact" class="block w-full text-center cursor-pointer bg-brand-primary text-white px-4 py-3 rounded-full text-sm font-bold hover:bg-brand-secondary transition-all no-underline">GET A QUOTE</a>
        </div>
    </div>

    <main class="pt-16 md:pt-20">
