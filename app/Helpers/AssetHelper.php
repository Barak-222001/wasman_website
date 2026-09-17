<?php

if (! function_exists('versioned_asset')) {
    /**
     * Return a public asset URL with automatic cache busting.
     *
     * Example:
     * /css/welcome.css?v=1789553200
     *
     * Whenever the physical file changes, its modification
     * timestamp changes, producing a new URL.
     */
    function versioned_asset(string $path): string
    {
        $cleanPath = ltrim($path, '/');
        $filePath = public_path($cleanPath);

        if (file_exists($filePath)) {
            return asset($cleanPath) . '?v=' . filemtime($filePath);
        }

        return asset($cleanPath);
    }
}