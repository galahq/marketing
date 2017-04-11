<?php if($page->timeline()->isNotEmpty()) { ?>
  <section class="c-timeline__container t-site u-clearfix">
    <?php foreach($page->timeline()->toStructure()->sortBy($sort='date', $direction='desc') as $timelineitem): ?>
      <div class="c-timeline__block">

        <div class="c-timeline__dot">
        </div> <!-- the blue dot -->

        <div class="c-timeline__content">
          <?php if($timelineitem->picture()->isNotEmpty()) { ?>
            <?php echo str_replace('(\\', '(', kirbytext($timelineitem->picture())) ?>
          <?php } ?>
          <span class="c-timeline__date"><?php echo $timelineitem->dateofevent() ?></span>
          <?php echo str_replace('(\\', '(', kirbytext($timelineitem->content())) ?>
          <?php if($timelineitem->newslink()->isNotEmpty()) { ?>
            <a href="<?php echo $timelineitem->newslink() ?>" target="_blank" class="c-timeline__readmore">Read more ›</a>
          <?php } ?>
        </div> <!-- timeline-content -->

      </div> <!-- timeline-block -->
    <?php endforeach ?>
  </section>
<?php } ?>
