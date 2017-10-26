<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>ErfGeo | Nederlandse topografie door de tijd </title>

<meta name="author" content="Waag Society">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="/assets/images/erfgeo.png">

<script src="/assets/js/d3.v3.min.js"></script>

<link rel="stylesheet" href="/assets/css/style.css">

<link href="/assets/css/codemirror.css" rel="stylesheet">
<script src="/assets/js/codemirror.js"></script>
<script src="/assets/js/codemirror-js.js"></script>

<link href="/assets/css/leaflet.css" rel="stylesheet" />
<script src="/assets/js/leaflet.js"></script>

<script src="/assets/js/jquery-1.11.0.min.js"></script>
<script src="/assets/js/sorttables.js"></script>
</head>
<body>
<div class="table-container">

    <div class="table-block footer-push">
     <header class="header-default">
  <a href="/" class="logo">
    <span>Erf</span>Geo</a>
  </a>
  <nav id="mainmenu">

<a class="menu-item " href="/thesaurus">Thesaurus</a>


<a class="menu-item " href="/nieuws">Blog</a>


<a class="menu-item " href="/wat-hoe">Wat? Hoe?</a>


<a class="menu-item " href="/tools">Tools</a>
</nav>
</header>


      <div class="container">
        <div id="content" class="wide">

        <div id="search">
          <? if($this->router->fetch_method() != "index" || $this->router->fetch_class() != "start"){ ?>
          <form action="<?= $this->config->item('base_url') ?>" onsubmit="toViewer(); return false;">
            <input value="" type="text" class="form-control" name="q" id="q" /> <button>zoek</button>
          </form>

          <script type="text/javascript">
          function toViewer() {
            //window.location.href = '<?= $this->config->item('base_url') ?>#search=' + $('#q').val();
            window.location.href = '<?= $this->config->item('base_url') ?>?q=' + $('#q').val();
          }
          </script>
          <? } ?>
        </div>
