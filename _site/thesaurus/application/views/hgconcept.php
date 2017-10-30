<?php
$pvflabels = array("existence" => "bestaan", "geometry" => "geometrie", "toponym" => "toponiem");
?>

<div class="content-block">
  <h1><?php echo '<em>' . $type . '</em> ' . preferredName($pits) ?></h1>

<?php if(count($pits)==0){ ?>
    <p>De door u gevolgde url heeft geen resultaat opgeleverd.</p>
  <?php }else{ ?>
  <p>Dit concept van het type <em><?php echo $type ?></em> is samengesteld uit de volgende 'Plaatsen in Tijd' (PiT's):</p>
  <p>&nbsp;</p>

  <h3>PiT's met een geometrie</h3>
  <table class="data sortable">
    <thead>
      <tr>
        <th>naam</th>
        <th>tijd-begin</th>
        <th>tijd-eind</th>
        <th>tijd-van</th>
        <th>PiT</th>
        <th>bron</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($pits as $pit) { ?>
      <?php if($pit['geometryIndex']>-1){ ?>
        <tr class="pit">
          <td><?php echo $pit['name'] ?></td>
          <td><?php echo $pit['startyear'] ?></td>
          <td><?php echo $pit['endyear'] ?></td>
          <td>
            <?php if(isset($pit['data']['periodValidFor'])){ ?>
            <img class="pvf-icon" src="/assets/images/<?php echo $pit['data']['periodValidFor'] ?>.png" title="periode geldig voor <?php echo $pvflabels[$pit['data']['periodValidFor']] ?>" />
            <?php } ?>
          </td>
          <td>
            <?php if($pit['dataset'] != ""){ ?>
              <a href="<?php echo $this->config->item('base_url') ?>pit/?id=<?php echo $pit['id'] ?>"><?php echo $pit['id'] ?></a>
            <?php }else{ ?>
              <?php echo $pit['id'] ?>
            <?php } ?>
          </td>
          <td><a href="<?php echo $this->config->item('base_url') ?>bron/<?php echo $pit['dataset'] ?>"><?php echo $pit['dataset'] ?></a></td>
        </tr>
      <?php } ?>
    <?php } ?>
    </tbody>
  </table>

  <h3>PiT's zonder geometrie</h3>
  <table class="data sortable">
    <thead>
      <tr>
        <th>naam</th>
        <th>tijd-begin</th>
        <th>tijd-eind</th>
        <th>tijd-van</th>
        <th>PiT</th>
        <th>bron</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($pits as $pit) { ?>
      <?php if($pit['geometryIndex']<0){ ?>
        <tr class="pit">
          <td><?php echo $pit['name'] ?></td>
          <td><?php echo $pit['startyear'] ?></td>
          <td><?php echo $pit['endyear'] ?></td>
          <td>
            <?php if(isset($pit['data']['periodValidFor'])){ ?>
            <img class="pvf-icon" src="/assets/images/<?php echo $pit['data']['periodValidFor'] ?>.png" title="periode geldig voor <?php echo $pvflabels[$pit['data']['periodValidFor']] ?>" />
            <?php } ?>
          </td>
          <td>
            <?php if($pit['dataset'] != ""){ ?>
              <a href="<?php echo $this->config->item('base_url') ?>pit/?id=<?php echo $pit['id'] ?>"><?php echo $pit['id'] ?></a>
            <?php }else{ ?>
              <?php echo $pit['id'] ?>
            <?php } ?>
          </td>
          <td><a href="<?php echo $this->config->item('base_url') ?>bron/<?php echo $pit['dataset'] ?>"><?php echo $pit['dataset'] ?></a></td>
        </tr>
      <?php } ?>
    <?php } ?>
    </tbody>
  </table>

  <?php } ?>
</div>
