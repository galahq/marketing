<?php if($page->timeline()->isNotEmpty()) { ?>
  <nav class="o-timeline-nav">
    <ul id="timeline-nav">
      <li class="current" style="display: none"><a href="#milestones"></a></li>
      <?php $timelineitems = $page->timeline()->toStructure()->sortBy($sort='date', $direction='desc') ?>
      <?php foreach ($timelineitems as $timelineitem) :?>
        <?php if($timelineitem->idfornav()->isNotEmpty()) { ?>
          <li><a href="#<?php echo $timelineitem->idfornav() ?>"><?php echo $timelineitem->dateofevent() ?></a></li>
        <?php } ?>
      <?php endforeach ?>
    </ul>
  </nav>

  <section id="c-timeline" class="c-timeline__container t-site">
    <?php foreach($page->timeline()->toStructure()->sortBy($sort='date', $direction='desc') as $timelineitem): ?>
      <div class="c-timeline__block" id="<?php echo $timelineitem->idfornav() ?>">
        <div class="c-timeline__img">
        </div> <!-- timeline-img -->

        <div class="c-timeline__content">
          <?php if($timelineitem->picture()->isNotEmpty()) { ?>
            <?php echo str_replace('(\\', '(', kirbytext($timelineitem->picture())) ?>
          <?php } ?>
          <span class="c-timeline__date"><?php echo $timelineitem->dateofevent() ?></span>
          <?php echo str_replace('(\\', '(', kirbytext($timelineitem->content())) ?>
          <?php if($timelineitem->newslink()->isNotEmpty()) { ?>
            <a href="<?php echo $timelineitem->newslink() ?>" class="c-timeline__readmore">Read more ›</a>
          <?php } ?>
        </div> <!-- timeline-content -->
      </div> <!-- timeline-block -->
    <?php endforeach ?>
  </section>
<?php } ?>
