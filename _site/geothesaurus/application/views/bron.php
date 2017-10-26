
<p><a href="<?= $this->config->item('base_url') ?>bronnen">bekijk alle bronnen</a></p>

<div class="content-block">

  <h1><?= $source['title'] ?></h1>

  <div class="row">
    <div class="six columns">
      <p><?= nl2br(hrefUrl($source['description'])) ?></p>

      <?php if (!empty($source['edits'])) { ?>
        <h3>Bewerkingen</h3>
        <p><?= nl2br($source['edits']) ?></p>
      <?php } ?>
    </div>

    <div class="six columns">
      <h3>Auteur</h3>
      <p><?= $source['author'] ?></p>

      <h3>Licentie</h3>
      <p><?= $source['license'] ?></p>

      <h3>Website</h3>
      <p><?= hrefUrl($source['website']) ?></p>

      <?php if (!empty($source['editor'])) { ?>
        <h3>Bewerker</h3>
        <p><?= $source['editor'] ?></p>
      <?php } ?>
    </div>
  </div>

</div>
