<?php
/**
 * Replaces the default Toadsuck\Skeleton namespace with your own namespace.
 */

if ($argc < 2) {
	print 'Usage: php install.php "Your\App\Namespace"' . PHP_EOL;
	exit;
} else {
	$namespace = $argv[1];
}

$slash = "\\";
$double_slash = "\\\\";

$namespace_escaped = str_replace($slash, $double_slash, $namespace);

// Update composer.json (for autoloading)
file_put_contents('./composer.json', str_replace('Toadsuck\\\\Skeleton', $namespace_escaped, file_get_contents('./composer.json')));

$paths = ['src','web'];

// Update in all the class files
foreach ($paths as $p) {
	$files = rglob($p . '/*.php');

	foreach ($files as $f) {
		$content = file_get_contents($f);
		$content = str_replace('Toadsuck\Skeleton', $namespace, $content);
		$content = str_replace('Toadsuck\\Skeleton', $namespace_escaped, $content);
		file_put_contents($f, $content);
	}
}

// Recreate autoload files.
print `composer dump-autoload`;

function rglob($pattern, $flags = 0) {
    $files = preg_grep('/vendor/', glob($pattern, $flags), PREG_GREP_INVERT); 

    foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
        $files = array_merge($files, rglob($dir.'/'.basename($pattern), $flags));
    }
    
    return $files;
}
