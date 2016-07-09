<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

<div class="actions">
  <div class="site">
    <h3 class="heading"><?php echo str_replace('(\\', '(', kirbytext($page->actionheading())) ?></h3>
  </div>
  <div class="action-items site">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <div><a href="<?php echo $action->link() ?>">
        <?php if($image = $action->image()): ?>
          <img src="<?php echo $image->url() ?>" alt="Icon for <?php echo html($action->title()) ?>">
        <?php endif ?>
        <div class="actiontext">
        <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
        <p><?php echo html($action->tagline()) ?></p>
        </div>
      </a></div>
    <?php endforeach ?>
  </div>
  <div class="site">
  <div class="center-text">
  <button class="button" onclick="window.location.href='<?php echo $pages->find('action')->url() ?>'"><h5>Learn More</h5></button>
  </div>
  </div>
</div>

<div class="elements">
  <div class="site">
    <h3 class="heading"><?php echo str_replace('(\\', '(', kirbytext($page->elementheading())) ?></h3>
    <div class="flex-3-cols">
      <div class="flex-2-8">
        <div class="ver-flex">
          <div class="flex-1-2">
            <h5 class="uppercase">Narrative</h5>
            <p>Each MSC tells a story that presents real-world based problem with a challenging decision. Key decision makers, stakeholders, and challenges are being presented. </p>
          </div>
          <div class="flex-1-2">
            <h5 class="uppercase">Podcast</h5>
            <p>MSC podcasts are conversations that expose students to a different side of the issue . Podcasts are interviews with the case decision maker(s) and/or relevant experts.</p>
          </div>
        </div>
      </div>
      <figure class="flex-4-8">
        <img src="content/home/elements.png" alt="MSC interface example" />
      </figure>
      <div class="flex-2-8">
        <div class="ver-flex">
          <div class="flex-1-2">
            <h5 class="uppercase">Multimedia Edgenotes</h5>
            <p>Edgenotes are jumping-off points for deeper exploration. They are curated from audiovisual sources providing diverse and in-depth insights.</p>
          </div>
          <div class="flex-1-2">
            <h5 class="uppercase">Interactive Learning Exercises</h5>
            <p>Provide a toolkit of quantitative, technical, analytical and creative competencies; foster an environment for students to practice collaboration, self agency and intercultural communication.</p>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<div class="vision">
  <div class="site">
    <h3 class="heading"><?php echo str_replace('(\\', '(', kirbytext($page->visionheading())) ?></h3>
  </div>
</div>

  <div class="vision site flex-container">
    <?php foreach($page->numbers()->toStructure() as $number): ?>
      <div class="number">
        <span class="number-value"><?php echo $number->number() ?></span>
        <h4 class="number-description"><?php echo $number->description() ?></h4>
      </div>
    <?php endforeach ?>
    <div class="conclude">
      <p>
        Our goal is to transform sustainability learning by transforming teaching methods in all academic fields. Case-based curricular innovation will lead to a more engaged, participatory learning. It will also enable students to achieve sustainability competencies, which will help develop students towards their full potential—becoming future sustainability leaders.
      </p>
    </div>
    <button class="button" onclick="window.location.href='vision'"><h5>More</h5></button>
  </div>


  </main>

<?php snippet('footer') ?>
