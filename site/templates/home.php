<?php snippet('header') ?>

<main class="main" role="main">
  <section class="firsttitle">
    <section class="site">
      <h1>Here's what you can do with MSC.</h1>
    </section>
  </section>
  <section class="action-items site">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <div>
        <h2><?php if($image = $action->image()): ?><img src="<?php echo $image->url() ?>" alt="Icon for <?php echo html($action->title()) ?>"><?php endif ?><?php echo html($action->title()) ?></h2>
        <h4><?php echo html($action->tagline()) ?></h4>
        <p><?php echo html($action->description()) ?></p>
        <a href="<?php echo $action->link() ?>"><h5>Learn more ></h5></a>
      </div>
    <?php endforeach ?>
  </section>

  <section class="secondtitle">
    <section class="site">
      <h1>Here's why we are doing it.</h1>
    </section>
  </section>

  <section>
    <div class="vision site">
    <p>Michigan Sustainability Cases (MSC) is an initiative aims at building a case-based curriculum for sustainability education, funded by a grant from Transforming Learning in the Third Century at the University of Michigan. <a href="#">Learn more about the MSC Initiative &gt;</a></p>

    <p>MSC also refers to the case products by Michigan Sustainability Cases Initiative. Each MSC tells a story. First, a challenging decision. Then, the key decision maker and main stakeholders. These are accompanied by audiovisual sources that provide diverse and in-depth insights to the case. Lastly, interactive learning exercises for students to analyze priorities and tradeoffs. MSCs provide an immersive and exploratory educational approach to teach practical skills in environmental sustainability. <a href="#">More about effectiveness of cases &gt;</a></p>
    </div>
  </section>

  <section class="thirdtitle">
    <section class="site">
      <h1>And here is how.</h1>
    </section>
  </section>

  <section class="scrollable">
    <div class="device-banner">
  </section>

  <section class="elements">
    <?php foreach($pages->find('element')->children() as $element): ?>
      <section class="flip-flop">
        <?php if($image = $element->image()): ?>
        <figure>
          <?php $url = $image->url() ?>
          <?php $ext = $image->extension() ?>
          <img
            src="<?php echo $url ?>"
            srcset="<?php echo $url ?> 1x,
                    <?php echo preg_replace('/\.'.$ext.'/', '@2x.'.$ext, $url) ?> 2x,
                    <?php echo preg_replace('/\.'.$ext.'/', '@3x.'.$ext, $url) ?> 3x"
            alt="Icon for <?php echo html($element->title()) ?>">
        </figure>
        <?php endif ?>
      <div>
        <?php echo html($element->description()) ?>
      </div>
      </section>
    <?php endforeach ?>
  </section>



  </main>

<?php snippet('footer') ?>
