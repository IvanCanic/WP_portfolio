<form action="<?php echo esc_url(home_url('/')); ?>" method="GET" id="s-modal">
    <input 
    type="text" 
    name="s" 
    id="search" 
    placeholder="Type here..."
    autocomplete="off"
    value="<?php esc_attr(the_search_query()) ?>"
    required>
    <button type="submit"><i class="fa fa-search"></i></button>
</form>