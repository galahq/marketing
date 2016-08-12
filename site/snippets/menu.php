<nav role="navigation">

  <ul class="menu cf hide">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a class="uppercase<?php e($p->isOpen(), ' active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>

</nav>
