<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <style type="text/css" rel="stylesheet">
    body.swal2-shown>[aria-hidden="true"] {
      transition: 0.1s filter;
      filter: blur(10px);
    }
  </style>

  <!-- Meta google tag -->
  <?php if ($partials['meta_google_tag']) : require_once  $partials['meta_google_tag'];
  endif; ?>

  <?php if ($partials['google_ads']) : require_once $partials['google_ads'];
  endif; ?>


  <script src="<?= $data['vendor']['tailwind'] ?>"></script>
  <link href="<?= $data['vendor']['flowbite']['css'] ?>" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Poppins:wght@900&family=Quicksand:wght@500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Aguafina+Script|Dancing+Script|Kaushan+Script|Open+Sans|Petit+Formal+Script|Pinyon+Script|Roboto|Rouge+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Train+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/public/assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/public/assets/css/icons.css" />

  </style>

  <script src="<?= $data['vendor']['sweetalert'] ?>"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="canonical" href="<?= $meta['canonical'] ?>" />
  <meta name="description" content="<?= $meta['meta_desc'] ?>">
  <meta name="keywords" content="<?= $meta['meta_key'] ?>">
  <meta name="author" content="<?= $meta['meta_author'] ?>">
  <meta property="og:url" content="<?= $meta['og_url'] ?>">
  <meta property="og:type" content="<?= $meta['og_type'] ?>" />
  <meta property="og:site_name" content="<?= $meta['og_site_name'] ?>" />
  <meta property="og:title" content="<?= $meta['og_title'] ?>">
  <meta property="og:description" content="<?= $meta['og_desc'] ?>">
  <meta property="og:image" content="<?= $meta['og_image'] ?>">
  <meta property="og:image:width" content="<?= $meta['og_image_width'] ?>" />
  <meta property="og:image:height" content="<?= $meta['og_image_height'] ?>" />

  <title><?= $meta['head_title'] ?></title>

  <link rel="shortcut icon" href="<?= $data['favicon'] ?>">

</head>


<body class="flex flex-col min-h-screen dark:bg-gray-800">

  <?php require_once $partials['navbar']; ?>

  <main class="bg-white dark:bg-gray-800 dark:text-white">
    <?= $content; ?>
  </main>


  <section id="footer" class="container mx-auto px-4 py-24 dark:bg-gray-800">
    <?php require_once 'partials/footer_content.php'; ?>
  </section>

  <script src="<?= $data['vendor']['flowbite']['js'] ?>"></script>

  <script src="<?= $data['vendor']['contentful'] ?>"></script>

  <script type="text/javascript">
    let client = contentful.createClient({
      space: '<?= $data['contentful_space']; ?>',
      accessToken: '<?= $data['contentful_token']; ?>'
    });
  </script>

  <?php for ($i = 0; $i < count($partials['scripts']); $i++) : ?>
    <script type="text/javascript" src="<?= $partials['scripts'][$i] ?>"></script>
  <?php endfor; ?>

 <!-- <script src="https://dashboard.chatfuel.com/integration/landing-wa-widget.js" async defer data-prefilled="Hello, DN Tour saya ingin memesan paket perjalanan dari DN Tour, bisa infokan saya harga terbaik dari DN Tour." data-welcome="Halo travelers, ada yang bisa kami bantu ?" data-phone="6283165539138"></script> -->

<script>
        var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?43125';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#00e785",
                "ctaText": "Hubungi kami !",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginRight": "20",
                "marginBottom": "20",
                "ctaIconWATI": false,
                "position": "right"
            },
            "brandSetting": {
                "brandName": "D & N Travel | Rent Car",
                "brandSubTitle": "undefined",
                "brandImg": "https://pps.whatsapp.net/v/t61.24694-24/251502925_702961521138930_5381377419890411286_n.jpg?ccb=11-4&oh=01_AdSRCDU6H7uhTdFn8QVlvEcNhhRxYLfqLMyu73eHML7SNQ&oe=6599F1A3&_nc_sid=e6ed6c&_nc_cat=104",
                "welcomeText": "Halo travelers, ada yang bisa kami bantu ?",
                "messageText": "Hello, DN Travel saya ingin memesan paket perjalanan dari DN Travel, bisa infokan saya harga terbaik dari DN Tour. ? {{page_link}}",
                "backgroundColor": "#00e785",
                "ctaText": "Hubungi kami !",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "6283165539138"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
</body>

</html>
