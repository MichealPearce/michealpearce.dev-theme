<?php

namespace MichealPearce\Theme;

function ns(string $name): string {
	return "MichealPearce\\Theme\\$name";
}

function resolvePath(string $path): string {
	return MICHEALPEARCEDEV_THEME_PATH . $path;
}

function resolveURL(string $path): string {
	return get_template_directory_uri() . $path;
}