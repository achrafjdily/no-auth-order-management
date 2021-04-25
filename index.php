<!doctype html>
<html lang="en">
    <head>
        <title>Fuse Angular - Material Design Admin Template</title>
        <meta charset="utf-8">
        <meta name="description" content="Angular, Angular Material &amp; TailwindCSS Admin Template">
        <meta name="keywords" content="Fuse,HTML,CSS,Angular,Angular 2,Angular 4,Angular 5,Angular 6,Angular 7,Angular 8,Angular 9,Angular 10,Material,Material 2">

        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

        <base href="/">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon-16x16.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png">

        <!-- Fonts -->
        <link href="assets/fonts/inter/inter.css" rel="stylesheet">

        <link href="https://fonts.gstatic.com" rel="preconnect">
        <style type="text/css">@font-face{font-family:'IBM Plex Mono';font-style:italic;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6pfjptAgt5VM-kVkqdyU8n1ioa2HdgregdFOFh.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'IBM Plex Mono';font-style:italic;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6pfjptAgt5VM-kVkqdyU8n1ioa0XdgregdFOFh.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'IBM Plex Mono';font-style:italic;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6pfjptAgt5VM-kVkqdyU8n1ioa2ndgregdFOFh.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'IBM Plex Mono';font-style:italic;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6pfjptAgt5VM-kVkqdyU8n1ioa23dgregdFOFh.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'IBM Plex Mono';font-style:italic;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6pfjptAgt5VM-kVkqdyU8n1ioa1XdgregdFA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F63fjptAgt5VM-kVkqdyU8n1iIq131nj-otFQ.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F63fjptAgt5VM-kVkqdyU8n1isq131nj-otFQ.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F63fjptAgt5VM-kVkqdyU8n1iAq131nj-otFQ.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F63fjptAgt5VM-kVkqdyU8n1iEq131nj-otFQ.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F63fjptAgt5VM-kVkqdyU8n1i8q131nj-o.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3twJwl1FgsAXHNlYzg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3twJwlRFgsAXHNlYzg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3twJwl9FgsAXHNlYzg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3twJwl5FgsAXHNlYzg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3twJwlBFgsAXHNk.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3vAOwl1FgsAXHNlYzg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3vAOwlRFgsAXHNlYzg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3vAOwl9FgsAXHNlYzg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3vAOwl5FgsAXHNlYzg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'IBM Plex Mono';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3vAOwlBFgsAXHNk.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>

        <!-- Icon fonts -->
        <style type="text/css">@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/materialicons/v85/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');}.material-icons{font-family:'Material Icons';font-weight:normal;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr;-webkit-font-feature-settings:'liga';-webkit-font-smoothing:antialiased;}</style>

        <!-- Splash screen styles -->
        <link href="assets/styles/splash-screen.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.073e7bde91020cbb139e.css"></head>

    <!-- Apply the rounded design throughout the Angular Material library -->
    <body class="fuse-mat-rounded">

        <!-- Splash screen -->
        <fuse-splash-screen>
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </fuse-splash-screen>

        <!-- App root -->
        <app-root></app-root>

    <script src="runtime.7152f0c8dc98a6bad68c.js" defer=""></script><script src="polyfills.b3e607a7c44bd1cfdbf4.js" defer=""></script><script src="main.d84ddab15a8e397e5161.js" defer=""></script></body>

</html>
