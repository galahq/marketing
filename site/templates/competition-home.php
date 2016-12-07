<?php snippet('head') ?>
<?php snippet('header') ?>

<?php foreach($pages->find('community')->find('case-competition')->visible() as $section): ?>
  <?php snippet($section->uid()) ?>
<?php endforeach ?>

<?php snippet('footer') ?>
