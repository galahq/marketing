<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div class="intro-text">
    <div class="site">
      <?php echo str_replace('(\\', '(', kirbytext($page->description())) ?>
    </div>
  </div>


  <section class="site">
    <?php foreach($page->children() as $element): ?>
      <section class="flex-container flip-flop site">
        <?php if($image = $element->images()->filterBy('filename', '*=', '-icon.')->first()): ?>
          <?php $url = $image->uri() ?>
          <?php $ext = $image->extension() ?>
          <img
            src="<?php echo $url ?>"
            srcset="<?php echo $url ?> 1x,
                    <?php echo preg_replace('/\.'.$ext.'/', '@2x.'.$ext, $url) ?> 2x,
                    <?php echo preg_replace('/\.'.$ext.'/', '@3x.'.$ext, $url) ?> 3x"
            alt="Icon for <?php echo html($element->title()) ?>">
        <?php endif ?>
      <div>
        <h5 class="uppercase"><?php echo $element->title() ?></h5>
        <h2><?php echo $element->tagline() ?></h2>
        <?php echo kirbytext($element->subdescription()) ?>
      <button class="button" onclick="window.location.href='<?php echo $element->link() ?>'"><h5>More</h5></button>
      </div>
      </section>
    <?php endforeach ?>
  </section>

</main>

<?php snippet('footer') ?>
