<?php
http_response_code(404);
require_once __DIR__ . '/includes/config.php';

$page_title = '404 Not Found';
$meta_description = 'The page you requested could not be found. Browse Funtime India’s products or return to the homepage.';
$current_page = '';
include __DIR__ . '/includes/header.php';
?>

<section class="min-h-[60vh] flex items-center justify-center bg-gray-50">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 text-center">
        <p class="text-brand-primary font-bold tracking-[0.2em] uppercase text-xs sm:text-sm mb-3 sm:mb-4">404 Error</p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-brand-secondary mb-4 sm:mb-6">Page not found</h1>
        <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-8">
            The page you’re looking for doesn’t exist or may have been moved.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
            <a href="<?php echo htmlspecialchars($base_path); ?>/" class="cursor-pointer bg-brand-primary text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-bold text-base sm:text-lg hover:bg-brand-secondary transition-all inline-block text-center no-underline">
                Go to Home
            </a>
            <a href="<?php echo htmlspecialchars($base_path); ?>/products" class="cursor-pointer border-2 border-brand-secondary text-brand-secondary px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-bold text-base sm:text-lg hover:bg-brand-secondary hover:text-white transition-all inline-block text-center no-underline">
                Browse Products
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

