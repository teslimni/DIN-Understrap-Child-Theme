<?php
require __DIR__ . '/../vendor/autoload.php';

use PostTypes\PostType;
$options = [
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    'has_archive' => true,
];

// $downloads = new PostType('download', $options);
// $downloads->icon('dashicons-download');
// $downloads->taxonomy('resource');


// Bio PostType
$bios = [
    'name'     => 'bio',
    'singular' => 'Bio',
    'plural'   => 'Bios',
    'slug'     => 'bios'
];
$bios = new PostType('bios', $options);
$bios->icon('dashicons-admin-users');

//Book Post Type
$names = [
    'name'     => 'name',
    'singular' => 'Book',
    'plural'   => 'Books',
    'slug'     => 'books'
];
$books = new PostType($names, $options);
