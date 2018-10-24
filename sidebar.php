<div class="sidebar">
	<?php
	if(is_dynamic_sidebar() ){
		echo '<div class="sidebar_item sidebar1">';
		if(!dynamic_sidebar('侧边栏1')){
			echo '<style>.sidebar1{display: none;}</style>';
		}
		echo ' </div>';
	}
	?>
	<?php
	if(is_dynamic_sidebar() ){
		echo '<div class="sidebar_item sidebar2">';
		if(!dynamic_sidebar('侧边栏2')){
			echo '<style>.sidebar2{display: none;}</style>';
		}
		echo ' </div>';
	}
	?>
	<?php
	if(is_dynamic_sidebar() ){
		echo '<div class="sidebar_item sidebar3">';
		if(!dynamic_sidebar('侧边栏3')){
			echo '<style>.sidebar3{display: none;}</style>';
		}
		echo ' </div>';
	}
	?>
	<?php
	if(is_dynamic_sidebar() ){
		echo '<div class="sidebar_item sidebar4">';
		if(!dynamic_sidebar('侧边栏4')){
			echo '<style>.sidebar4{display: none;}</style>';
		}
		echo ' </div>';
	}
	?>
</div>