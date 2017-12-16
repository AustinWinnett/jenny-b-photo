<?php
$content = return_get_template_part('templates/partials/components');

dd_include_module(
  'flexible-content',
  array(
    'content'            => $content,
  )
);
?>
