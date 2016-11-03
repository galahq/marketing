<nav class="c-conference__menu">
  <?php $sections = $page->children()->visible() ;?>
  <ul>
    <h5>Global Case Competition</h5>
    <?php foreach($sections as $section) :?>
    <li>
      <a href="<?php echo $section->url() ?>" class="<?php e($section->isOpen(), 'active') ?>"><?php echo $section->title()?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
