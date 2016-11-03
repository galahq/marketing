<div class="c-conference__menu">
<nav class="t-site o-flex-container">
  <?php if($page->hasChildren()) : ?>
    <?php $sections = $page->children()->visible() ;?>
    <?php else: ?>
    <?php $sections = $page->parent()->children()->visible() ;?>
  <?php endif ?>
  <h5>Global Case Competition</h5>
  <ul class="o-flex-container">
    <?php foreach($sections as $section) :?>
    <li>
      <a href="<?php echo $section->url() ?>" class="<?php e($section->isOpen(), 'active') ?>"><?php echo $section->title()?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
</div>
