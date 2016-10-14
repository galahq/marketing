<?php

return function($site, $pages, $page) {
  $form = uniform('contact-form', array(
        'required' => array('_from' => 'email'),
        'actions'  => array(
           array(
              '_action' => 'email',
              'to'      => 'zhuzeng@umich.edu',
              'sender'  => 'zhuzeng@umich.edu',
           )
        )
     )
  );

  return compact('form');
};
