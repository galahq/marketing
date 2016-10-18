<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <ul>
    <?php foreach($page->children()->visible() as $guideitem): ?>
      <li>
        <div>
          <h2><a href="<?php echo $guideitem->url() ?>"><?php echo html($guideitem->title()) ?></a></h2>
          <?php echo kirbytext($guideitem->description()) ?>
        </div>
        <a href="<?php echo $guideitem->url() ?>">Learn more</a>
      </li>
  <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>
