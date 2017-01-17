<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div class="o-flex-container o-competition t-site">

    <nav class="o-guide__nav o-flex-item-growing">
      <?php $competitionitems = $pages->find('community')->find('case-competition')->children()->visible() ;?>
      <ul class="c-nest-menu__firstlevel">
        <li><a href="<?php echo $pages->find('community')->find('case-competition')->url() ?>">Overview</a></li>
        <?php foreach($competitionitems as $competitionitem) :?>
        <li>
          <a href="<?php echo $competitionitem->url() ?>"><?php echo $competitionitem->title()?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </nav>

    <article class="o-guide__content o-flex-item-growing" id="content">
      <h1><?php echo html($page->title()) ?></h1>

      <?php if($page->text() == ''):?>
      <p>Coming soon!</p>
      <p>We are working hard on improving this section. Thanks for your patience! In case you've got an urgent question, please <a href="../../../contact">contact us via this page</a>.</p>

      <?php else: ?>

      <?php if($page->text()->isNotEmpty()): ?>
      <p><?php echo str_replace('(\\', '(', kirbytext($page->text())) ?></p>
      <?php endif ?>

      <?php endif ?>

    </article>

  </div>

</main>

<?php snippet('footer') ?>
