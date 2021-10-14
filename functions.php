<?php

function handel_loop_shop_per_page(){
  return 4;
}
add_filter('loop_shop_per_page', 'handel_loop_shop_per_page');

?>