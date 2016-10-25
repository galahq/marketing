<header>
  <?php snippet('menu-mobile') ?>
  <?php if($page->isHomePage()): ?>
    <?php $bannerImage = imgix_url('topbanner.jpg', ["h" => '900']);?>
    <section class="home__hero" style='background: linear-gradient(to bottom, rgba(0,0,0,0) 40%, rgba(53,83,111,0.8) 100%), url("<?php echo $bannerImage ?>") 25%; background-size: cover;' >
      <div class="c-header u-clearfix">
        <div class="t-site homebanner cf">
        <a class="c-header__logo" href="<?php echo url() ?>">
          <?php imgix('logo.png', $site->title(), 373.33) ?>
        </a>
        <?php snippet('menu') ?>
        </div>
      </div>
      <div class="t-site">
        <h1><?php echo $page->tagline() ?></h1>
        <?php echo str_replace('(\\', '(', kirbytext($page->subtagline())) ?>
      </div>
    </section>

 <?php else: ?>

   <section class="c-header u-clearfix t-site">
     <a class="c-header__logo" href="<?php echo url() ?>">
       <?php imgix('logo.png', $site->title(), 373.33) ?>
     </a>
     <?php snippet('menu') ?>
   </section>
   <div class="c-submenu__container">
     <div class="t-site">
       <?php snippet('submenu') ?>
     </div>
   </div>

   <?php foreach($pages->visible() as $child): ?>
     <?php if($page->isChildOf($child)) { ?>
     <ul class="c-breadcrumb--hidden c-breadcrumb t-blog t-site">
       <?php foreach($site->breadcrumb() as $crumb): ?>
       <li>
         <a href="<?php echo $crumb->url() ?>">
           <?php echo html($crumb->title()) ?>
         </a>
       </li>
       <?php endforeach ?>
     </ul>
     <?php } ?>
   <?php endforeach ?>

   <?php foreach($pages->visible()->children() as $grandchild): ?>
   <?php if($page->isChildOf($grandchild)) { ?>
     <ul class="c-breadcrumb c-breadcrumb--partial t-blog t-site">
       <li>
         <a href="<?php echo $page->parent()->url() ?>">
           <?php echo html($page->parent()->title()) ?>
       </li>
       <li>
         <a href="<?php echo $page->url() ?>">
           <?php echo html($page->title()) ?>
         </a>
       </li>
     </ul>
     <?php } ?>
   <?php endforeach ?>

   <?php if($page->isInvisible()) { ?>
     <ul class="c-breadcrumb c-breadcrumb--partial t-blog t-site">
       <li>
         <a href="<?php echo $page->parent()->url() ?>">
           <?php echo html($page->parent()->title()) ?>
       </li>
       <li>
         <a href="<?php echo $page->url() ?>">
           <?php echo html($page->title()) ?>
         </a>
       </li>
     </ul>
     <?php } ?>

    <?php if($site->children()->has($page)): ?>
      <?php $bannerImage = imgix_url($page->slug() . '-banner.jpg', ['h'=>'900']);?>
      <section class="hero" style='background: linear-gradient(to bottom, rgba(0,0,0,0) 40%, rgba(53,83,111,0.8) 100%), url("<?php echo $bannerImage ?>") 25%; background-size: cover;' >
    <?php else: ?>
      <section class="child__hero">
    <?php endif ?>

    <div class="t-site">
      <div class="hero__text">
        <h1><?php echo $page->pagetagline() ?></h1>
        <?php echo str_replace('(\\', '(', kirbytext($page->pagesubtagline())) ?>
      </div>
      </div>
    </section>
  <?php endif ?>
</header>
