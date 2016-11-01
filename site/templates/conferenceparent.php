<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div class="o-flex-container t-site">

    <nav class="o-guide__nav o-flex-item-growing">
      <?php $sections = $page->children()->visible() ;?>
      <ul class="c-nest-menu__firstlevel">
        <?php foreach($sections as $section) :?>
        <li>
          <a href="<?php echo $section->url() ?>" class="<?php e($section->isOpen(), 'active') ?>"><?php echo $section->title()?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </nav>

    <article class="o-guide__content o-flex-item-growing">
      <h1><?php echo html($page->title()) ?></h1>
      <p><?php echo str_replace('(\\', '(', kirbytext($page->text())) ?></p>
    </article>

  </div>

</main>

<?php snippet('footer') ?>
