<header>
  <?php snippet('menu-mobile') ?>
  <?php if($page->isHomePage()): ?>
    <?php $bannerImage = imgix_url('topbanner.jpg', ["h" => '900']);?>
    <section class="intro" style='background: linear-gradient(to bottom, rgba(0,0,0,0) 40%, rgba(53,83,111,0.8) 100%), url("<?php echo $bannerImage ?>") 25%; background-size: cover;' >
      <div class="header cf headerbg">
        <div class="site homebanner cf">
        <a class="logo" href="<?php echo url() ?>">
          <?php imgix('logo.png', $site->title(), 373.33) ?>
        </a>
        <?php snippet('menu') ?>
      </div>
      </div>
      <div class="site">
        <h1><?php echo $page->tagline() ?></h1>
        <?php echo str_replace('(\\', '(', kirbytext($page->subtagline())) ?>
      </div>
    </section>

 <?php else: ?>

   <section class="header cf site">
     <a class="logo" href="<?php echo url() ?>">
       <?php imgix('logo.png', $site->title(), 373.33) ?>
     </a>
     <?php snippet('menu') ?>
   </section>
   <div class="submenu-bg">
     <div class="site">
       <?php snippet('submenu') ?>
     </div>
   </div>

   <?php foreach($pages->visible() as $child): ?>
     <?php if($page->isChildOf($child)) { ?>
     <ul class="hiddencrumb breadcrumb blog site">
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
     <ul class="breadcrumb blog site">
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

   <?php if($page->isInvisible()) { ?>
     <ul class="breadcrumb blog site">
       <?php foreach($site->breadcrumb() as $crumb): ?>
       <li>
         <a href="<?php echo $crumb->url() ?>">
           <?php echo html($crumb->title()) ?>
         </a>
       </li>
       <?php endforeach ?>
     </ul>
     <?php } ?>

   <?php if($site->children()->has($page)): ?>
     <?php $bannerImage = imgix_url($page->slug() . '-banner.jpg', ['h'=>'900']);?>

      <section class="hero" style='background: linear-gradient(to bottom, rgba(0,0,0,0) 40%, rgba(53,83,111,0.8) 100%), url("<?php echo $bannerImage ?>") 25%; background-size: cover;' >
    <?php else: ?>
      <section class="hero-child">
    <?php endif ?>

  <div class="site">
    <div class="centerbox">
      <h1><?php echo $page->pagetagline() ?></h1>
      <p><?php echo str_replace('(\\', '(', kirbytext($page->pagesubtagline())) ?></p>
    </div>
    </div>
  </section>
<?php endif ?>
</header>
