<?php if($page->otherpartners()->isNotEmpty()) { ?>
  <div class="u-partners t-blog t-site">
    <h2>Beyond UM</h2>
  </div>
  <div class="u-beyond-um-logos o-flex-container t-site t-blog">
    <?php foreach($page->otherpartners()->toStructure() as $otherpartner): ?>
      <Figure>
        <a href="<?php echo $otherpartner->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($otherpartner->logo())) ?></a>
      </Figure>
    <?php endforeach ?>
  </div>
<?php } ?>

<?php if($page->umunits()->isNotEmpty()) { ?>
  <div class="u-partners t-blog t-site">
    <h2>UM Campus</h2>
  </div>
  <div class="u-um-logos o-flex-container t-site t-blog">
    <?php foreach($page->umunits()->toStructure() as $umunit): ?>
      <Figure>
        <a href="<?php echo $umunit->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($umunit->logo())) ?></a>
      </Figure>
    <?php endforeach ?>
  </div>
<?php } ?>

<?php if($page->umschools()->isNotEmpty()) { ?>
  <div class="u-partners t-blog t-site">
    <h2>UM Units</h2>
  </div>
  <div class="u-um-logos o-flex-container t-site t-blog">
    <?php foreach($page->umschools()->toStructure() as $umschool): ?>
      <Figure>
        <a href="<?php echo $umschool->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($umschool->logo())) ?></a>
      </Figure>
    <?php endforeach ?>
  </div>
<?php } ?>
