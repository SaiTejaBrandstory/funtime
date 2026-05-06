<?php
/**
 * Router for /products/productname URLs.
 * Requires .htaccess: RewriteRule ^products/([a-z0-9-]+)/?$ product.php?slug=$1 [L,QSA]
 */
require_once __DIR__ . '/includes/config.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';

if (!in_array($slug, $product_slugs, true)) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}

$content_file = __DIR__ . '/products/content/' . $slug . '.php';
if (!is_file($content_file)) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}

require_once __DIR__ . '/products/product-meta.php';
$meta = isset($product_meta[$slug]) ? $product_meta[$slug] : null;
$page_title = $meta ? $meta['title'] : ucwords(str_replace('-', ' ', $slug)) . ' | Funtime India';
$meta_description = $meta && !empty($meta['description']) ? $meta['description'] : '';
$current_page = '';
include __DIR__ . '/includes/header.php';
include $content_file;
include __DIR__ . '/includes/footer.php';
