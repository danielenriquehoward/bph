<?php

namespace Tailbase\Models;

use Tailbase\Models\Blueprints\Taxonomy;

class Tag extends Taxonomy
{
    protected static $taxonomy_type = 'post_tag';
}
