<?php

namespace MichealPearce\Theme;

function ns(string $name): string {
	return "MichealPearce\\Theme\\$name";
}

function resolvePath(string $path): string {
	if (!str_starts_with($path, '/')) $path = "/$path";
	return MICHEALPEARCEDEV_THEME_PATH . $path;
}

function resolveURL(string $path): string {
	if (!str_starts_with($path, '/')) $path = "/$path";
	return get_template_directory_uri() . $path;
}

function template(string $slug, array $vars = []): void {
	global $template_vars;

	$old_vars = $template_vars;
	$template_vars = $vars;

	require resolvePath("template-parts/$slug.php");

	$template_vars = $old_vars;
}

function use_vars(array $vars): array {
	global $template_vars;

	foreach ($vars as $name => $default) {
		if (is_numeric($name)) {
			$name = $default;
			$default = null;
		}

		if (!isset($template_vars[$name])) {
			if (is_null($default)) trigger_error("Template var '$name' not found", E_USER_WARNING);
			else $template_vars[$name] = $default;
		}
	}

	return $template_vars;
}

function use_attrs(array $attrs) {
	return implode(' ', array_map(
		function ($value, $key) {
			if ($key === 'class') $value = use_classes($value);
			return "$key=\"$value\"";
		},
		$attrs
	));
}

function use_classes(...$classes): string {
	return trim(implode(' ', array_map(
		fn($class) => is_array($class) ? use_classes(...$class) : $class,
		$classes
	)));
}