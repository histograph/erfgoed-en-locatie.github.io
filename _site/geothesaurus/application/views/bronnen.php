
<div class="content-block">
  <h1>Bronnen</h1>

  <div id="results">
    <? foreach($sources as $source){ ?>

      <a class="result" href="<?= $this->config->item('base_url') ?>bron/<?= $source['id'] ?>">
        <h5><?= $source['title'] ?></h5>
        <? if(isset($types[$source['id']])){ ?>
          <table class="sourceinfo compact">
          <? foreach($types[$source['id']] as $type => $number){ ?>
            <?php if (!empty($type)) { ?>
              <tr><td><?= $type ?>:</td><td><em><?= number_format($number,0,",",".") ?></em></td></tr>
            <?php } ?>
          <? } ?>
          </table>
        <? } ?>
          </a>

    <? } ?>
  </div>

</div>
