<?php
/**
 * Logo pesantren — tampil penuh (tanpa kotak kecil) atau ikon fallback.
 * Opsional: $brandSize (sm|md|lg|xl|hero), $brandIcon, $brandClass, $brandImgClass, $brandMargin
 */
$brandSize = $brandSize ?? 'md';
$brandIcon = $brandIcon ?? 'book-open';
$brandClass = $brandClass ?? '';
$brandImgClass = $brandImgClass ?? '';
$brandMargin = $brandMargin ?? 'mb-4';

$iconBoxSizes = [
    'sm' => 'w-10 h-10 rounded-xl',
    'md' => 'w-14 h-14 rounded-2xl',
    'lg' => 'w-20 h-20 rounded-2xl',
    'xl' => 'w-16 h-16 rounded-2xl',
    'hero' => 'w-20 h-20 rounded-2xl',
];
$iconSizes = [
    'sm' => 'w-5 h-5',
    'md' => 'w-7 h-7',
    'lg' => 'w-10 h-10',
    'xl' => 'w-8 h-8',
    'hero' => 'w-10 h-10',
];
$logoSizes = [
    'sm' => 'pesantren-logo pesantren-logo--sm',
    'md' => 'pesantren-logo pesantren-logo--md',
    'lg' => 'pesantren-logo pesantren-logo--lg',
    'xl' => 'pesantren-logo pesantren-logo--xl',
    'hero' => 'pesantren-logo pesantren-logo--hero',
];

$iconBox = $iconBoxSizes[$brandSize] ?? $iconBoxSizes['md'];
$iconClass = $iconSizes[$brandSize] ?? $iconSizes['md'];
$logoClass = $logoSizes[$brandSize] ?? $logoSizes['md'];
$brandIconClass = $brandIconClass ?? 'text-gold-400';
$logo = $app['pesantren_logo'] ?? '';
?>
<?php if ($logo): ?>
<div class="<?= e($brandMargin) ?> <?= e($brandClass) ?> flex justify-center items-center">
    <img src="<?= e(base_url($logo)) ?>" alt="Logo <?= e($app['pesantren_name']) ?>"
         class="<?= e($logoClass) ?> <?= e($brandImgClass) ?>">
</div>
<?php else: ?>
<div class="inline-flex items-center justify-center <?= e($iconBox) ?> <?= e($brandClass) ?> <?= e($brandMargin) ?>">
    <i data-lucide="<?= e($brandIcon) ?>" class="<?= e($iconClass) ?> <?= e($brandIconClass) ?>"></i>
</div>
<?php endif; ?>
