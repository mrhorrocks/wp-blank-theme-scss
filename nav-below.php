<!-- PAGINATION FOR THE POSTS/CAT/404 PAGE -->
<?php $args = array(
    // 'prev_text' => sprintf(esc_html__('%s older', 'blankslate'), ''),
    // 'next_text' => sprintf(esc_html__('newer %s', 'blankslate'), '')
    'prev_text' => sprintf('<button>Older</button>'),
    'next_text' => sprintf('<button>Newer</button>')
);
the_posts_navigation($args); ?>