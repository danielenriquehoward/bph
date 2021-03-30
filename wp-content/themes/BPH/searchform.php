<?php

$context             = Timber::context();
$context['messages'] = get_template_messages(); // Messages have to add again to context object for some reason..

Timber::render('searchform.twig', $context);
