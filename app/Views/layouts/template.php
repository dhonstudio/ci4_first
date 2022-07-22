<!DOCTYPE html>
<html lang="<?= isset($lang) ? $lang : 'en' ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="<?= isset($meta['keywords']) ? $meta['keywords'] : "" ?>">
    <meta name="author" content="<?= isset($meta['author']) ? $meta['author'] : "" ?>">
    <meta name="generator" content="<?= isset($meta['generator']) ? $meta['generator'] : "" ?>">

    <meta property="og:image" content="<?= isset($meta['ogimage']) ? $meta['ogimage'] : $assets . "img/ogimg.jpg" ?>">
    <meta name="description" content="<?= isset($meta['description']) ? $meta['description'] : "" ?>">

    <?= isset($css) ? $css : '' ?>

    <link rel="icon" type="image/x-icon" href="<?= isset($favicon) ? $favicon : $assets . "img/icon.ico" ?>">
    <title><?= isset($title) ? $title : ($lang == 'id' ? 'Beranda' : 'Home')  ?></title>
</head>

<?= $this->renderSection('content'); ?>

</html>