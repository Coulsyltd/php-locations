<?php
    if (!isset($title)) {
        $title = $default_title;
    }

    if (!isset($meta_desc)) {
        $meta_desc = $default_meta_desc;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo $meta_author; ?>">
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta property="og:image" content="<?php echo $meta_image; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <title><?php echo $title; ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>libs/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>libs/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>libs/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $base_url; ?>libs/images/favicon/site.webmanifest">
    <link rel="stylesheet" href="<?php echo $base_url; ?>libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>libs/css/main.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>libs/fontawesome-free/css/all.min.css">


    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
</head>
<body>
