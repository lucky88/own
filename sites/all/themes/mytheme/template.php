<?php

/**
 * @file
 * template.php
 */
function mytheme_preprocess_block(&$vars) {
  if (isset($vars['block'])) {
      if($vars['block_html_id'] == 'block-apachesolr-search-sort') {
          $content = str_replace('<ul>', '<ul class="list-inline">',$vars['content']);
          $vars['content'] = $content;
      }
    }
  }