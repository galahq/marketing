<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div class="c-separate-text t-site t-blog">
      <?php echo str_replace('(\\', '(', kirbytext($page->description())) ?>
  </div>


  <section class="t-site t-blog">
    <?php foreach($page->children() as $element): ?>
      <section class="o-flex-container c-flip-flop t-site">
      <figure>
       <?php imgix($element->slug().'-icon.png', $element->title(), 280) ?>
      </figure>
      <div>
        <h2><span><?php echo $element->title() ?></span>
        <?php echo $element->tagline() ?></h2>
        <?php echo kirbytext($element->subdescription()) ?>
        <a href="<?php echo $element->link() ?>" class="c-button">More</a>
      </div>
      </section>
    <?php endforeach ?>
  </section>

</main>

<?php snippet('footer') ?>
