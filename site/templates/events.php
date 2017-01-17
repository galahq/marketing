<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
<div class="t-site">

<nav class="o-events-nav">
<ul>
  <li><a href="<?php echo $pages->find('community')->find('events')->url() ?>" class="<?php e($page->isOpen() && !$pages->find('community')->find('events')->find('previous-events')->isOpen(), 'active') ?>">Upcoming Events</a></li>
  <li><a href="<?php echo $pages->find('community')->find('events')->find('previous-events')->url() ?>" class="<?php e($pages->find('community')->find('events')->find('previous-events')->isOpen(), 'active') ?>">Previous Events</a></li>
</ul>
</nav>

<form id="o-search-box" method="get" action="http://www.teachmsc.org">
  <input type="text" class="o-search-box__text" name="q" size="35" maxlength="120"><input type="submit" value="search" class="o-search-box__button">
</form>

<div class="o-search-filters">
<h5>Hosted by:</h5>
<ul>
  <li>MSC</li>
  <li>Other institutions</li>
</ul>
</div>

<div class="o-search-filters">
<h5>Topic:</h5>
<ul>
  <li>Case production</li>
  <li>Case methodology</li>
  <li>Assessment and evaluation</li>
  <li>Case teaching</li>
</ul>
</div>

<div class="o-search-filters">
<h5>Type:</h5>
<ul>
  <li>Workshop</li>
  <li>Lecture</li>
  <li>Webinar</li>
</ul>
</div>

<div class="o-selected-filters">
<h5>Selected filters:</h5>
<ul>
  <li>MSC</li>
  <li>Case methodology</li>
</ul>
<h6><a href="#">Clear all filters</a></h6>
</div>

<?php foreach($page->eventitems()->toStructure()->sortBy($sort='datetime', $direction='desc') as $eventitem): ?>
<div class="o-single-event o-flex-container">
  <div class="o-event-description o-flex-item-growing">
    <h2><?php echo $eventitem->name() ?></h2>
    <p class="o-single-event__date"><?php echo $eventitem->datetime()->date() ?></p>
    <ul class="o-event-tags">
      <li><?php echo $eventitem->type() ?></li>
      <li><?php echo $eventitem->limitation() ?></li>
      <li>Hosted by: <?php echo $eventitem->host() ?></li>
    </ul>
    <p class="o-single-event__topic-area">Topics:</p>
    <ul class="o-event-tags">
      <?php foreach($eventitem->topics()->split() as $eventtopic): ?>
      <li><?php echo $eventtopic ?></li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="o-event-registration o-flex-item-growing">
    <ul>
      <li><span><img srcset="http://msc-public.imgix.net/icon-clock.png?w=28&amp; 1x,http://msc-public.imgix.net/icon-clock.png?w=56&amp; 2x,http://msc-public.imgix.net/icon-clock.png?w=84&amp; 3x," src="http://msc-public.imgix.net/icon-clock.png?w=28&amp;" alt="icon for time"></span><?php echo $eventitem->datetime()->time() ?></li>
      <li><span><img srcset="http://msc-public.imgix.net/icon-location.png?w=28&amp; 1x,http://msc-public.imgix.net/icon-location.png?w=56&amp; 2x,http://msc-public.imgix.net/icon-location.png?w=84&amp; 3x," src="http://msc-public.imgix.net/icon-location.png?w=28&amp;" alt="icon for location"></span>Ann Arbor, MI</li>
    </ul>
    <a class="c-button" href="#">Learn more/register</a>
  </div>
</div>
<?php endforeach ?>

</div><!--t-site-->


</body>
</html>




</main>

<?php snippet('footer') ?>
