<?php

class cyn_search
{
    public function __construct()
    {
        add_action('pre_get_posts', [$this, 'searchPage']);
    }

    public function searchPage(WP_Query $query)
    {
        if (!$query->is_search() || !$query->is_main_query())
            return;

        $post_type = $_GET['search-type'] === 'all' ? null : $_GET['search-type'];

        $query->set('posts_per_page', -1);
        $query->set('post_type', $post_type);
    }
}
