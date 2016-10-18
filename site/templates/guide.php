<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <nav class="guide-nav">
    <?php $guideitems = $pages->find('action')->find('make')->find('production-guide')->children() ;?>
    <ul>
      <?php foreach($guideitems as $guideitem) :?>
      <li>
        <a href="<?php echo $guideitem->url() ?>" class="<?php e($guideitem->isOpen(), 'active') ?>"><?php echo $guideitem->title()?></a>
      </li>
      <?php endforeach ?>
    </ul>
  </nav>

  <article class="guide-content site">
    <h1><?php echo html($page->title()) ?></h1>

    <?php if($page->text() == ''):?>
    <p>Coming soon!</p>
    <p>We are working hard on improving this section. Thanks for your patience! In case you've got an urgent question, please <a href="../../../contact">contact us via this page</a>.</p>

    <?php else: ?>

    <?php if($page->text()->isNotEmpty()): ?>
    <p><?php echo $page->text()?></p>
    <?php endif ?>

    <?php endif ?>

  </article>

</main>

<?php snippet('footer') ?>
