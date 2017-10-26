
<div class="content-block">
  <h1>Bronnen</h1>

  <div id="results">
    <? foreach($sources as $source){ ?>

      <a class="result" href="<?= $this->config->item('base_url') ?>bron/<?= $source['id'] ?>">
        <h5><?= $source['title'] ?></h5>
        <? if(isset($types[$source['id']])){ ?>
          <div class="sourceinfo">
          <? foreach($types[$source['id']] as $type => $number){ ?>
            <?= $type ?> <em><?= number_format($number,0,",",".") ?></em>
          <? } ?>
          </div>
        <? } ?>
          </a>

    <? } ?>
  </div>

</div>
