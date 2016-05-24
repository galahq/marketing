<?php snippet('header') ?>

<main class="main" role="main">

  <div class="col-4-6 last">

    <article class="text relative">

      <?php if($page->text() == ''): /* Check if content is available */ ?>
      <p class="delta">Coming soon...</p>
      <p>At the moment we're working hard to complete and improve the docs. Thanks for your patience! In case you've got an urgent issue with Kirby please send us an email.</p>
      <p><?php echo str::email($site->email()) ?></p>
            <p>In the meantime you might want to check out our <a href="http://getkirby.com/docs">docs</a> where we already collected a whole bunch of stuff.</p>


      <?php else: ?>

      <?php if($page->since()->isNotEmpty()): ?>
      <p class="version-badge"><?php echo $page->since()->version('%s +') ?></p>
      <?php endif ?>

      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>

      <?php if($page->docs() != '' or $page->blogposts() != '' or $page->forumposts() != '' or $page->internals() != '' or $page->externals() != ''): ?>
        
      <footer class="further-reading">
        <h2 class="beta">Further reading</h2>

        <?php if($page->docs() != ''): ?>
        <h3 class="gamma">Docs</h3>
        <ul>
            <?php $docs = yaml($page->docs()) ?>
            <?php foreach($docs as $doc): ?>
            <li><a href="<?php echo url() ?>/<?php echo $doc['link'] ?>"><?php echo $doc['text'] ?></a></li>
            <?php endforeach ?>
        </ul>
        <?php endif ?>


      </footer>
      <?php endif ?>

      <?php endif ?>
    </article>

  </div>

  <?php snippet('submenu') ?>

</main>

<?php snippet('footer') ?>
