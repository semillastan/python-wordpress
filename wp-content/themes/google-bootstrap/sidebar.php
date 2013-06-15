<div class="sidebar">
    
    <div class="archive-box">
        <div class="title">Archives</div>
        <ul class="archive-list unstyled">
        	<?php wp_get_archives('type=monthly'); ?>
        </ul>    
    </div>
    
    <div class="category-box">
        <div class="title">Categories</div>
        <ul class="category-list unstyled">
        	<?php wp_list_cats(); ?>
        </ul>    
    </div>
    
</div>