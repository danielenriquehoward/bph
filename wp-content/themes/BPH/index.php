<?php

$data               = Timber::context();
$data['posts']      = new Timber\PostQuery();
$data['pagination'] = Timber::get_pagination($pagination_mid_size);

Timber::render('index.twig', $data);
