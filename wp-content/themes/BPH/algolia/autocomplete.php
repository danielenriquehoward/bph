<?php

$templates             = ['search-dropdown.twig'];
$context               = Timber::context();
$context['title']      = 'Search results for: ' . get_search_query();
$context['posts']      = new Timber\PostQuery();
// $context['pagination'] = Timber::get_pagination($pagination_mid_size);

Timber::render($templates);
