<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <section id="overview" class="c-conference__section">
    <div class="o-flex-container t-site">
      <h2 class="c-conference__section-title o-flex-item-growing">Overview</h2>
      <div class="c-conference__section-content o-flex-item-growing"><?php echo str_replace('(\\', '(', kirbytext($page->overview())) ?></div>
    </div>
  </section>

  <section id="timeline" class="c-conference__section">
    <div class="o-flex-container t-site">
      <h2 class="c-conference__section-title o-flex-item-growing">Timeline</h2>
      <div class="c-conference__section-content o-flex-item-growing c-conference__timeline u-clearfix">
        <?php foreach($page->timeline()->toStructure() as $timelineitem): ?>
          <div class="c-conference__timeline__block">
            <div class="c-timeline__dot"></div>
            <div class="c-conference__timeline__content">
              <span class="c-conference__timeline__date">
                <?php echo $timelineitem->dateofitem() ?>
              </span>
              <?php echo str_replace('(\\', '(', kirbytext($timelineitem->item())) ?>
            </div><!--Timeline content container-->
          </div><!--individual timeline block-->
        <?php endforeach ?>
      </div><!--Timeline item container-->
    </div><!--Timeline container-->
  </section>

  <section id="partners" class="c-conference__section">
    <div class="o-flex-container t-site">
      <h2 class="c-conference__section-title o-flex-item-growing">Partners</h2>
      <div class="o-flex-container c-conference__section-content o-flex-item-growing">
        <?php foreach($page->partners()->toStructure() as $partner): ?>
        <a href="<?php echo $partner->link() ?>" target="_blank"><?php echo str_replace('(\\', '(', kirbytext($partner->logo())) ?></a>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section id="competition" class="c-conference__section">
    <div class="o-flex-container t-site">
      <h2 class="c-conference__section-title o-flex-item-growing">Competition</h2>
      <div class="c-conference__section-content o-flex-item-growing"><?php echo str_replace('(\\', '(', kirbytext($page->competition())) ?></div>
    </div>
  </section>

  <section id="webinars" class="c-conference__section">
    <div class="o-flex-container t-site">
      <h2 class="c-conference__section-title o-flex-item-growing">Webinars</h2>
      <div class="c-conference__section-content o-flex-item-growing"><?php echo str_replace('(\\', '(', kirbytext($page->webinars())) ?></div>
    </div>
  </section>

  <section id="register" class="c-conference__section">
    <div class="o-flex-container t-site">
      <h2 class="c-conference__section-title o-flex-item-growing">Register Now</h2>
      <div class="c-conference__section-content o-flex-item-growing"><?php echo str_replace('(\\', '(', kirbytext($page->register())) ?></div>
    </div>
  </section>

  <section id="logistics" class="c-conference__section">
    <div class="o-flex-container t-site">
      <h2 class="c-conference__section-title o-flex-item-growing">Logistics</h2>
      <div class="c-conference__section-content o-flex-item-growing"><?php echo str_replace('(\\', '(', kirbytext($page->logistics())) ?></div>
    </div>
  </section>

</main>

<?php snippet('footer') ?>
