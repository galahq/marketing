<?php if($page->coremembers()->isNotEmpty()) { ?>
  <div class="o-member t-blog t-site">
    <h3>Core Team</h3>
  </div>
  <div class="o-member__flexcontainer o-flex-container t-site t-blog">
    <?php foreach($page->coremembers()->toStructure() as $coremember): ?>
      <div class="o-member__flexitem">
        <div class="o-member__flexitem__image">
          <?php echo str_replace('(\\', '(', kirbytext($coremember->profilepic())) ?>
        </div>
        <div class="o-member__flexitem__title">
          <?php echo str_replace('(\\', '(', kirbytext($coremember->nameandtitle())) ?>
        </div>
      </div>
    <?php endforeach ?>
  </div>
<?php } ?>

<?php if($page->othermembers()->isNotEmpty()) { ?>
  <div class="o-member t-blog t-site">
    <?php echo str_replace('(\\', '(', kirbytext($page->othermembers())) ?>
  </div>
<?php } ?>
