<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <section class="intro-text">
    <div class="site">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
    </div>
    <div class="site">
      <?php foreach($page->reasons()->toStructure() as $reason): ?>
        <div class="reason">
          <span class="reason-value"><?php echo $reason->number() ?></span>
          <p class="reason-description"><?php echo $reason->description() ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </section>


  <ol class="custom-counter">
  <li>list one</li>
  <li>list two</li>
  </ol>



  <div class="actions">
    <div class="action-items-vertical site">
      <?php foreach($pages->find('action')->children() as $action): ?>
        <div><a href="<?php echo $action->link() ?>">
          <?php if($image = $action->image()): ?>
            <img src="<?php echo $image->url() ?>" alt="Icon for <?php echo html($action->title()) ?>">
          <?php endif ?>
          <div class="actiontext-vertical">
          <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
          <p><?php echo html($action->description()) ?></p>
          </div>
        <div class="center-text">
        <button class="button" onclick="window.location.href='action'"><h6>Learn more</h6></button>
        </div>
        </a></div>
      <?php endforeach ?>
    </div>
  </div>




</main>

<?php snippet('footer') ?>
