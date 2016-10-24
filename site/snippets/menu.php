<nav role="navigation">

  <ul class="c-menu u-clearfix u-hide">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a class="<?php e($p->isOpen(), ' active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
