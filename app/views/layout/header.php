<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Poppins:wght@900&family=Quicksand:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/public/assets/css/style.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="canonical" href="<?=$meta['canonical']?>" />
    <meta name="description" content="<?=$meta['meta_desc']?>">
    <meta name="keywords" content="<?=$meta['meta_key']?>">
    <meta name="author" content="<?=$meta['meta_author']?>">
    <meta property="og:url" content="<?=$meta['og_url']?>">
    <meta property="og:type" content="<?=$meta['og_type']?>" />
    <meta property="og:site_name" content="<?=$meta['og_site_name']?>" />
    <meta property="og:title" content="<?=$meta['og_title']?>">
    <meta property="og:description" content="<?=$meta['og_desc']?>">
    <meta property="og:image" content="<?=$meta['og_image']?>">
    <meta property="og:image:width" content="<?=$meta['og_image_width']?>" />
    <meta property="og:image:height" content="<?=$meta['og_image_height']?>" />

    <title><?=$data['title']?></title>

    <link rel="shortcut icon" href="<?=$data['favicon']?>">

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>

    <script async="" src="https://www.googletagmanager.com/gtm.js?id=<?=$meta['tagm_id']?>"></script>

    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=<?=$meta['gtag_id']?>&l=dataLayer&cx=c"></script>

    <script  src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" client="<?=$meta['google_ads_key']?>" crossorigin="anonymous" async=""></script>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: <?=$meta['google_ads_key']?>,
        enable_page_level_ads: true
      });
    </script>
  </head>
<body>
  <?php require_once $partials['navbar']; ?>