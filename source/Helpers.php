<?php

/**
 * @param string|null $path
 * @return string
 */
function url(string $path = null): string
{
    if ($path) {
        return CONF_URL . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    return CONF_URL;
}


/**
 * @param string|null $path
 * @return string
 */
function theme(string $path = null): string
{
    if ($path) {
        return CONF_URL . "/theme/app/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL . "/themes/app/";
}
