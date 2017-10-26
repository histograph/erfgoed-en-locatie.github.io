---
layout: php
---
<!DOCTYPE HTML>
<html>
<head>
{% include head.html %}

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
     {% include header.html %}

      <div class="container">
        <div id="content" class="wide">

        <div id="search">
          <? if($this->router->fetch_method() != "index" || $this->router->fetch_class() != "start"){ ?>
          <form class="row-flex" action="<?= $this->config->item('base_url') ?>" onsubmit="toViewer(); return false;">
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
