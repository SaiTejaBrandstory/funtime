<?php
$page_title = isset($page_title) ? $page_title : 'Funtime';
$meta_description = isset($meta_description) ? $meta_description : '';
$base_path = isset($base_path) ? $base_path : '';
$meta_robots = isset($meta_robots) ? $meta_robots : 'index, follow';
$style_file = __DIR__ . '/../assets/css/style.css';
$style_version = is_file($style_file) ? (string) filemtime($style_file) : '1';

if (!isset($canonical_url)) {
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    $path = parse_url($request_uri, PHP_URL_PATH);
    $path = $path ? $path : '/';
    $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['SERVER_PORT']) && (string) $_SERVER['SERVER_PORT'] === '443');
    $scheme = $is_https ? 'https' : 'http';

    if ($host) {
        $canonical_url = $scheme . '://' . $host . $path;
    } else {
        $canonical_url = $path;
    }
}
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<?php if ($meta_description): ?>
<meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
<?php endif; ?>
<meta name="robots" content="<?php echo htmlspecialchars($meta_robots); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
<base href="<?php echo htmlspecialchars($base_path ? $base_path . '/' : '/'); ?>">
<link rel="icon" type="image/jpeg" href="<?php echo htmlspecialchars($base_path); ?>/assets/images/funtime-logo.jpg">
<link rel="apple-touch-icon" href="<?php echo htmlspecialchars($base_path); ?>/assets/images/funtime-logo.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<script>
    window.FontAwesomeConfig = { autoReplaceSvg: 'nest' };
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: {
                        primary: '#FF4D00',
                        secondary: '#1A1A1A',
                        accent: '#00D1FF'
                    }
                },
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                }
            }
        }
    };
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="<?php echo htmlspecialchars($base_path); ?>/assets/css/style.css?v=<?php echo htmlspecialchars($style_version); ?>">
