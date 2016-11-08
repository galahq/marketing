<div class="c-conference__menu--mobile">
<nav class="t-site o-dropdown">
  <h5><a onclick="dropdown()" class="u-dropdown">Global Case Competition ▾</a></h5>
  <?php if($page->hasChildren()) : ?>
    <?php $sections = $page->children()->visible() ;?>
    <?php else: ?>
    <?php $sections = $page->parent()->children()->visible() ;?>
  <?php endif ?>
  <ul id="dropdownNav" class="o-dropdown__nav">
    <li><a href="<?php echo $pages->find('community')->find('case-competition')->url() ?>" class="<?php e($pages->find('community')->find('case-competition')->isOpen() && !$pages->find('community')->find('case-competition')->children()->findOpen(), 'active') ?>">Overview</a></li>
    <?php foreach($sections as $section) :?>
    <li>
      <a href="<?php echo $section->url() ?>" class="<?php e($section->isOpen(), 'active') ?>"><?php echo $section->title()?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
</div>
