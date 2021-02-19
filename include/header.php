<head>
    <link rel='stylesheet' type='text/css' href='/css/global.css?css_version=1'>
    <link rel='stylesheet' type='text/css' href='/css/darkmode.css?css_version=1'>
    <script src='/js/global.js'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel='shortcut icon' href='/assets/favicon.ico' type='image/x-icon'>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158210865-1"></script>
    <script defer>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-158210865-1');

    setTitle('ACM@MU');
    </script>
</head>

<body>
    <?php if (!$disable_main_navbar) require_once "mainnavbar.php"; ?>
