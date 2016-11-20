<?php

function isActiveRoute($route, $output = 'active')
{
    if (Route::currentRouteName() == $route) {
        return $output;
    }
}

function isActivePRoute($route, $output = 'active')
{
    if (preg_match("/^$route/", Route::currentRouteName())) {
        return $output;
    }
}
