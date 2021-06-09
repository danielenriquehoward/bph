<?php

/**
 * Template Name: Page Valuation
 */

/**
 * Get Context
 */
$context                = Timber::context();
$post                   = new TimberPost();
$context['post']        = $post;

Timber::render( 'page-valuation.twig' , $context );