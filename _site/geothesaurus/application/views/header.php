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
        <div id="searchbox">
  <div class="row-flex">
    <input type="text" id="searchstring" placeholder="plaatsnaam, straatnaam, etc." data-keyuphandler="thesaurusSearch"/>
    <button onclick="search();">Zoek</button>
  </div>
  <input id="searchtypemap" type="radio" name="searchtype" value="map" checked>
  <label for="searchtypemap"><span></span>Zoeken via kaart</label>
  <input id="searchtypetext" type="radio" name="searchtype" value="text">
  <label for="searchtypetext"><span></span>Tekstueel zoeken</label>
</div>
<script type="text/javascript">
  function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
  }

  // initialize form
  var q = getURLParameter('q');
  if (q) {
    document.getElementById('searchstring').value = q;
  }

  var url = window.location.href;
  if (url.indexOf('thesaurus') !== -1) {
    document.getElementById('searchtypetext').checked = true;
  }


  var keyHandlerMap = {
    thesaurusSearch: thesaurusSearchKeyUp
  };

  function genericKeyHandler(e){
    var target = e.target || e.srcElement,
      handlerName = target.dataset.keyuphandler,
      handler = keyHandlerMap[handlerName];

    if(handler){
      handler.call(target, e);
    }
  }

  function thesaurusSearchKeyUp(e){
    var enterCode = 13;

    if(e.keyCode === enterCode){
      search();
    }
  }

  document.addEventListener('keyup', genericKeyHandler);


  function search(){
    var searchString = document.getElementById('searchstring').value;
    var searchType = document.querySelector('input[name="searchtype"]:checked').value;
    var searchPath = (searchType === 'map') ? '/thesaurus/#search=' : '/geothesaurus/?q='

    if (searchString) {
      location.href = searchPath + searchString;
    }
  }
</script>
