<?php snippet('head') ?>
<?php snippet('header') ?>


<div class="site blog">
<style type="text/css">
   label {display: block;}
   .erroneous, .error {color: red;}
   .success {color: green;}
</style>

<h1><?php echo $page->title()->html() ?></h1>

<form action="<?php echo $page->url()?>" method="post">

   <label<?php e($form->hasError('_from'), ' class="erroneous"')?> for="email">E-Mail</label>
   <input type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>" required/>

   <label for="message">Message</label>
   <textarea name="message" id="message"><?php $form->echoValue('message') ?></textarea>

   <label class="uniform__potty" for="website">Please leave this field blank</label>
   <input type="text" name="website" id="website" class="uniform__potty" />

<?php if ($form->hasMessage()): ?>
   <div class="message <?php e($form->successful(), 'success' , 'error')?>">
      <?php $form->echoMessage() ?>
   </div>
<?php endif; ?>

   <button type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

</form>
</div>

<?php snippet('footer') ?>
