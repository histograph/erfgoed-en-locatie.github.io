
<div class="content-block">

  <?php if(isset($_GET['q'])){ ?>

  <h1>
    <?php echo $count . ($count != 1 ? ' resultaten' : ' resultaat') . ' voor "' . $_GET['q'] . '"'; ?>
  </h1>
    
    <?php if (!empty($results)) { ?>
    <div id="results">

      <?php foreach ($results as $result) { ?>
        <a class="result" href="<?php echo $this->config->item('base_url'). 'hgconcept/?id=' . hgConceptID($result['properties']['pits']) ?>">
          <h5>
            <?php echo preferredName($result['properties']['pits']) . getBroader($result['properties']['pits']); ?>
            <span class="type-header"><?php echo $result['properties']['type']; ?></span>
        </h5>
        </a>
      <?php } ?>

    </div>
    <?php } ?>

  <?php } else { ?>

    <h1>Tekstueel zoeken in de geothesaurus</h1>
    <p>De Geothesaurus bevat geografische plaatsaanduidingen en hun historische benamingen voor dat al uit tal van bronnen. Een PiT (Plaats in Tijd) is de representatie van een plaats, gemeente, straat, etc. uit één zo'n bron. Een hgconcept is een verzameling PiTs die dezelfde plaats, gemeente, straat, etc. betreffen.</p>
    <p>De Geothesaurus maakt gebruik van de Histograph API en is eveneens ontwikkeld binnen het project Erfgoed &amp; Locatie. Let op: zowel de Geothesaurus als de onderliggende data bevinden zich nog in een pril stadium en zijn aan verandering onderhevig!</p>
    <p>Mocht u onvolkomenheden bespeuren of vragen hebben, dan kunt u zich per mail richten tot erfgoedenlocatie@den.nl</p>

  <?php } ?>

</div>