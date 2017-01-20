<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
<div class="t-site">

<div class="hero__text">
  <h1>Events</h1>
</div>

<nav class="o-events-nav">
<ul>
  <li><a href="<?php echo $pages->find('community')->find('events')->url() ?>" class="<?php e($page->isOpen() && !$pages->find('community')->find('events')->find('previous-events')->isOpen(), 'active') ?>">Upcoming</a></li>
  <li><a href="<?php echo $pages->find('community')->find('events')->find('previous-events')->url() ?>" class="<?php e($pages->find('community')->find('events')->find('previous-events')->isOpen(), 'active') ?>">Previous</a></li>
</ul>
</nav>

<div class="o-search-box">
  <span><img srcset="http://msc-public.imgix.net/magnifier.png?w=24&amp; 1x,http://msc-public.imgix.net/magnifier.png?w=48&amp; 2x,http://msc-public.imgix.net/magnifier.png?w=72&amp; 3x," src="http://msc-public.imgix.net/magnifier.png?w=24&amp;" alt="icon for time"></span>
  <input type="text" class="o-search-box__text" placeholder="Search input" name="q"
    oninput="SortEvents.setQueryString(event.currentTarget.value)"
  ><div class="o-search-box__active-filters"></div><div class="o-search-box__button"><a style="display: none"  onclick="SortEvents.clearFilters()">clear all ×</a></div>
</div>

<div class="o-search-filters">
<h5>Hosted by:</h5>
<ul>
  <li><label for="msc"><input type="checkbox" id="msc" name="host" onclick="SortEvents.setHost('MSC')"> MSC</label></li>
  <li><label for="other"><input type="checkbox" id="other" name="host" onclick="SortEvents.setHost('Others')"> Other institutions</label></li>
</ul>
</div>

<div class="o-search-filters">
<h5>Topic:</h5>
<ul>
  <li><label for="production"><input type="checkbox" id="production" name="topic" onclick="SortEvents.addTopic('production')"> Case production</label></li>
  <li><label for="methodology"><input type="checkbox" id="methodology" name="topic" onclick="SortEvents.addTopic('methodology')"> Case methodology</label></li>
  <li><label for="assessment"><input type="checkbox" id="assessment" name="topic" onclick="SortEvents.addTopic('assessment')"> Assessment and evaluation</label></li>
  <li><label for="teaching"><input type="checkbox" id="teaching" name="topic" onclick="SortEvents.addTopic('teaching')"> Case teaching</label></li>
</ul>
</div>

<div class="o-search-filters">
<h5>Type:</h5>
<ul>
  <li><label for="workshop"><input type="checkbox" id="workshop" name="type" onclick="SortEvents.setType('workshop')"> Workshop</label></li>
  <li><label for="lecture"><input type="checkbox" id="lecture" name="type" onclick="SortEvents.setType('lecture')"> Lecture</label></li>
  <li><label for="webinar"><input type="checkbox" id="webinar" name="type" onclick="SortEvents.setType('webinar')"> Webinar</label></li>
</ul>
</div>

<?php foreach($page->eventitems()->toStructure()->sortBy($sort='datetime', $direction='desc') as $eventitem): ?>
<div class="o-single-event o-flex-container"
  data-event-type="<?php echo $eventitem->type() ?>"
  data-event-host="<?php echo $eventitem->host() ?>"
  data-event-topics="<?php echo $eventitem->topics() ?>"
  data-event-name="<?php echo $eventitem->name() ?>"
>
  <div class="o-event-description o-flex-item-growing">
    <h2><?php echo $eventitem->name() ?></h2>
    <p class="o-single-event__date"><?php echo $eventitem->date('l F j, Y') ?></p>
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
      <li><span><img srcset="http://msc-public.imgix.net/icon-clock.png?w=28&amp; 1x,http://msc-public.imgix.net/icon-clock.png?w=56&amp; 2x,http://msc-public.imgix.net/icon-clock.png?w=84&amp; 3x," src="http://msc-public.imgix.net/icon-clock.png?w=28&amp;" alt="icon for time"></span><?php echo $eventitem->time() ?></li>
      <li><span><img srcset="http://msc-public.imgix.net/icon-location.png?w=28&amp; 1x,http://msc-public.imgix.net/icon-location.png?w=56&amp; 2x,http://msc-public.imgix.net/icon-location.png?w=84&amp; 3x," src="http://msc-public.imgix.net/icon-location.png?w=28&amp;" alt="icon for location"></span>
        <a href="<?php echo $eventitem->locationlink() ?>"><?php echo $eventitem->location() ?></a>
      </li>
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
