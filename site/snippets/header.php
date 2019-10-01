<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <!--highlight.js-->
  <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/default.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>
  <!--plyr-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <?= css(['assets/css/index.css']) ?>
  <link rel='stylesheet' href='https://unpkg.com/plyr@3/dist/plyr.css'>
  <!--vanilla js and custom css-->
  <?= js(['assets/js/anime.min.js']) ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?= css(['@auto']) ?>
  <?= snippet('objectClassifier/objectClassifierHeader') ?>
</head>
<body>
  <?php snippet('objectClassifier/objectClassifierBanner') ?>
  <?php snippet('homeAnimation') ?>
  <div id="view">
    <?php snippet('objectClassifier/objectClassifier') ?>
    <a id="btn-close" class="btn">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="18" cy="18" r="18" fill="black"/>
        <path d="M12.3139 22.5591C11.9041 22.9348 11.8955 23.319 12.2883 23.7117C12.681 24.1045 13.0652 24.0959 13.4409 23.6861L18 19.1782L22.5591 23.6861C22.9348 24.0959 23.319 24.1045 23.7117 23.7117C24.1045 23.319 24.0959 22.9348 23.6861 22.5591L19.1782 18L23.6861 13.4409C24.0959 13.0652 24.1045 12.681 23.7117 12.2883C23.319 11.8955 22.9348 11.9041 22.5591 12.3139L18 16.8218L13.4409 12.3139C13.0652 11.9041 12.681 11.8955 12.2883 12.2883C11.8955 12.681 11.9041 13.0652 12.3139 13.4409L16.8218 18L12.3139 22.5591Z" fill="white"/>
      </svg>
    </a>
  </div>
<div class="wrapper">
  <?php snippet('objectClassifier/objectClassifierCover') ?>
  <header class="header">
    <a id="header-logo" href="<?= $site->url() ?>">
      <div id="logo-1">
        <svg viewBox="0 0 205 102" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="fill" fill-rule="evenodd" clip-rule="evenodd" d="M0 100.501H28.6927C39.3048 100.501 44.6764 93.8354 44.6764 78.2393V61.7091C44.6764 51.1783 39.9601 47.4452 34.9817 46.1124C38.5191 44.9128 43.2354 40.3802 43.2354 32.2485V19.0514C43.2354 5.98764 37.9948 1.32172 26.3343 1.32172H0V100.501ZM21.618 56.1103C25.5485 56.1103 26.7274 57.9766 26.7274 62.1091V78.2393C26.7274 83.838 25.1553 84.7708 22.2727 84.7708H17.4253V56.1103H21.618ZM21.618 16.519C24.8932 16.519 26.0722 18.2519 26.0722 21.8511V34.2481C26.0722 38.7807 24.2379 40.1136 21.3559 40.1136H17.4253V16.519H21.618ZM48.7374 1.32172V100.501H86.077V82.6379H66.1627V58.2433H81.0985V40.3802H66.1627V18.7847H85.1602V1.32172H48.7374ZM89.4821 100.501H106.907V1.32172H89.4821V100.501ZM111.885 1.32172V100.501H127.345V46.1124L140.84 100.501H155.644V1.32172H140.184V51.9778L128.262 1.32172H111.885ZM177.392 101.834C186.039 101.834 190.232 94.3688 191.804 91.0363C192.852 94.1021 193.9 98.2346 194.424 100.501H205.037V40.5136H181.847V57.1765H188.266V78.5054C188.266 82.5046 186.432 84.6375 183.157 84.6375C180.144 84.6375 178.441 82.5046 178.441 78.2393V23.0506C178.441 18.9181 179.751 16.7851 182.764 16.7851C186.301 16.7851 187.219 19.0514 187.219 23.0506V34.1148H204.251V23.1839C204.251 11.3197 201.238 0.122192 184.074 0.122192H180.536C165.208 0.122192 160.229 11.053 160.229 23.3173V82.3712C160.229 92.9026 165.863 101.834 176.082 101.834H177.392Z" />
        </svg>
      </div>
      <div id="logo-2">
        <svg viewBox="0 0 335 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="fill" fill-rule="evenodd" clip-rule="evenodd" d="M0 99.247H15.1979V40.5925L23.9758 99.247H30.5269L39.1738 40.5925V99.247H54.8959V0.067749H34.8506L28.1685 50.1905L21.4869 0.067749H0V99.247ZM86.2069 99.247H103.108L89.8753 0.067749H69.1747L56.8595 99.247H72.3195L73.8916 82.5841H84.3727L86.2069 99.247ZM79.0011 31.528L82.6695 65.5206H75.5948L79.0011 31.528ZM97.3426 0.067749V17.5308H109.79V99.247H127.215V17.5308H139.661V0.067749H97.3426ZM142.935 0.067749V99.247H180.275V81.384H160.361V56.9894H175.296V39.1263H160.361V17.5308H179.358V0.067749H142.935ZM201.105 15.3978H205.036C208.573 15.3978 209.36 16.7313 209.36 20.9972V34.461C209.36 39.1263 207.919 40.4592 204.512 40.4592H201.105V15.3978ZM201.105 56.856H204.774C208.312 56.856 209.36 58.1889 209.36 62.7215V91.6487C209.36 96.0479 210.146 98.1809 210.932 99.247H228.357V98.5803C227.702 97.3808 226.916 95.5145 226.916 91.2486V57.5227C226.916 50.0571 222.33 46.858 219.448 45.7918C222.723 44.4584 227.178 40.4592 227.178 32.4614V16.5979C227.178 6.06655 221.806 0.067749 211.194 0.067749H183.681V99.247H201.105V56.856ZM231.5 99.247H248.925V0.067749H231.5V99.247ZM280.237 99.247H297.138L283.905 0.067749H263.205L250.889 99.247H266.349L267.922 82.5841H278.403L280.237 99.247ZM273.031 31.528L276.699 65.5206H269.625L273.031 31.528ZM299.101 0.067749V99.247H335V81.384H316.527V0.067749H299.101Z"/>
        </svg>
      </div> 
    </a>
    <a id="btn-camera" class="button home_camera_button">
      <svg version="1.1" id="icon-camera" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 24 19" style="enable-background:new 0 0 24 19;" xml:space="preserve">
      <path class="fill" d="M2,4h13c1.1,0,2,0.9,2,2v9c0,1.1-0.9,2-2,2H2c-1.1,0-2-0.9-2-2V6C0,4.9,0.9,4,2,4z"/>
      <path class="fill"  d="M23.3,4l-4.8,2.8v6.4l4.8,2.8c0.3,0.2,0.7,0,0.7-0.4V4.4C24,4,23.6,3.8,23.3,4z"/>
      </svg>
    </a>
  </header>
  <div class="page" class='step' data-step='1'>

