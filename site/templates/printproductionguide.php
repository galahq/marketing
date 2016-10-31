<?php snippet('head') ?>

<main class="main" role="main">

  <div class="t-site">
    <?php imgix('logo.png', $site->title(), 600, [], ['class' => 'production-guide-logo']) ?>
    <h1 class="u-print__title">Production Guide</h1>
    <p class="u-print__date"><?php echo "Generated on " . date("F j, Y"); ?></p>

    <h1 style="margin-top: 1in;">Contents</h1>
    <nav>
      <?php $guideitems = $pages->find('action')->find('make')->find('production-guide')->children()->visible() ;?>
      <ol>
        <li><a href="#<?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?>"><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></a></li>
        <?php foreach($guideitems as $guideitem) :?>
        <?php $children = $guideitem->children();?>
        <li>
          <?php echo $guideitem->title()?>
          <ol>
            <?php foreach($children as $child): ?>
              <li>
                <a href="#<?php echo html($child->title()) ?>">
                  <?php echo $child->title()?>
                </a>
              </li>
            <?php endforeach ?>
          </ol>
        </li>
        <?php endforeach ?>
      </ol>
    </nav>

    <article>
        <h1 id="<?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?>"><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></h1>
        <p><?php echo str_replace('(\\', '(', kirbytext($pages->find('action')->find('make')->find('production-guide')->text())) ?></p>
    </article>

    <?php $guideitems = $pages->find('action')->find('make')->find('production-guide')->children()->visible() ;?>
    <?php foreach($guideitems as $guideitem) :?>
      <article>
    <?php $children = $guideitem->children();?>
    <h1><?php echo html($guideitem->title()) ?></h1>
    <?php foreach($children as $child): ?>
    <section>
        <h1 id="<?php echo html($child->title()) ?>"><?php echo html($child->title()) ?></h1>
        <p><?php echo str_replace('(\\', '(', kirbytext($child->text())) ?></p>
    </section>
    <?php endforeach ?>
  </article>
    <?php endforeach ?>



  </div>

</main>

</body>
