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

<div class="o-search-box">
  <input type="text" class="o-search-box__text" name="q"
    oninput="SortEvents.setQueryString(event.currentTarget.value)"
  ><div class="o-search-box__active-filters"></div><input type="button" class="o-search-box__button" onclick="SortEvents.clearFilters()" value="×" />
</div>

<div class="o-search-filters">
<h5>Hosted by:</h5>
<ul>
  <li><a href="#" onclick="SortEvents.setHost('MSC')">MSC</a></li>
  <li><a href="#" onclick="SortEvents.setHost('Others')">Other institutions</a></li>
</ul>
</div>

<div class="o-search-filters">
<h5>Topic:</h5>
<ul>
  <li><a href="#" onclick="SortEvents.addTopic('production')">Case production</a></li>
  <li><a href="#" onclick="SortEvents.addTopic('methodology')">Case methodology</a></li>
  <li><a href="#" onclick="SortEvents.addTopic('assessment')">Assessment and evaluation</a></li>
  <li><a href="#" onclick="SortEvents.addTopic('teaching')">Case teaching</a></li>
</ul>
</div>

<div class="o-search-filters">
<h5>Type:</h5>
<ul>
  <li><a href="#" onclick="SortEvents.setType('workshop')">Workshop</a></li>
  <li><a href="#" onclick="SortEvents.setType('lecture')">Lecture</a></li>
  <li><a href="#" onclick="SortEvents.setType('webinar')">Webinar</a></li>
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
