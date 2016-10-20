<?php snippet('head') ?>
<?php snippet('header') ?>
<ul class="breadcrumb guidecrumb site">
  <li><a href="<?php echo $pages->find('action')->find('make')->url() ?>"><?php echo $pages->find('action')->find('make')->title() ?></a></li>
  <li><a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>"><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></a></li>
</ul>

<main class="main" role="main">

  <div class="flex-container site">

    <nav class="guide-nav flex-growing">
      <?php $guideitems = $pages->find('action')->find('make')->find('production-guide')->children() ;?>
      <ul class="first-level left-nav">
        <?php foreach($guideitems as $guideitem) :?>
        <?php $children = $guideitem->children();?>
        <li>
          <a href="<?php echo $guideitem->url() ?>" class="<?php e($guideitem->isOpen()&& !$children->findOpen(), 'active') ?>"><?php echo $guideitem->title()?></a>
          <ul class="second-level left-nav">
            <?php foreach($children as $child): ?>
              <li><a href="<?php echo $child->url() ?>" class="<?php e($child->isOpen(), 'active') ?>"><?php echo $child->title()?></a></li>
            <?php endforeach ?>
          </ul>
        </li>
        <?php endforeach ?>
      </ul>
    </nav>

    <article class="guide-content flex-growing">
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
