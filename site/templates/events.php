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
  <li>Case selection</li>
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

<div class="o-single-event o-flex-container">
  <div class="o-event-description o-flex-item-growing">
    <h2>Understanding Case-based teaching and learning</h2>
    <p class="o-single-event__date">Wednesday, January 11, 2017</p>
    <ul class="o-event-tags">
      <li>Lecture</li>
      <li>Public</li>
      <li>Hosted by: MSC</li>
    </ul>
  </div>
  <div class="o-event-registration o-flex-item-growing">
    <ul>
      <li><span><img src="http://msc-public.imgix.net/icon-clock.png?w=28"></span>3:00</li>
      <li><span><img src="http://msc-public.imgix.net/icon-location.png?w=28"></span>Ann Arbor, MI</li>
    </ul>
    <a class="c-button" href="#">Learn more/register</a>
  </div>
</div>

</div><!--t-site-->


</body>
</html>




</main>

<?php snippet('footer') ?>
