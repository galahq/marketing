<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div class="intro-text site blog">
      <?php echo str_replace('(\\', '(', kirbytext($page->description())) ?>
  </div>


  <section class="site blog">
    <?php foreach($page->children() as $element): ?>
      <section class="flex-container flip-flop site">
      <figure>
       <?php imgix($element->slug().'-icon.png', $element->title(), 280) ?>
      </figure>
      <div>
        <h2><span><?php echo $element->title() ?></span>
        <?php echo $element->tagline() ?></h2>
        <?php echo kirbytext($element->subdescription()) ?>
        <button class="button" onclick="window.location.href='<?php echo $element->link() ?>'">More</button>
      </div>
      </section>
    <?php endforeach ?>
  </section>

</main>

<?php snippet('footer') ?>
