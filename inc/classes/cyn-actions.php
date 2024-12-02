<?php

if (!class_exists('cyn_actions')) {
    class cyn_actions
    {
        function __construct()
        {
            add_action("pre_get_posts", [$this, "customize_service_query"]);
        }
        public function customize_service_query(WP_Query $query)
        {
            if (!$query->is_main_query()) return;
            if (!$query->is_archive()) return;
            if (!$query->is_post_type_archive('service')) return;
            $query->set('posts_per_page', -1);
        }
    }
};
