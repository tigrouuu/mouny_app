<?php
/*
if (! function_exists('menu_active')) {
    /**
     * Compares given route name with current route name.
     * Any section of the route name can be replaced with a * wildcard.
     * Example: user.*
     *
     * @param  string  $routeName
     * @param  string  $output
     * @return bool
     *
    function menu_active($routeName, $output = 'active')
    {
        if (strpos($routeName, '*') !== false) {
            // Quote all RE characters, then undo the quoted '*' characters to match any
            // sequence of non-'.' characters.
            $regex = '/^' . str_replace(preg_quote('*'), '[^.]*?', preg_quote($routeName, '/')) . '$/';

            if (preg_match($regex, Route::currentRouteName())) {
                return $output;
            }
        } elseif (Route::currentRouteName() == $routeName) {
            return $output;
        }

        return null;
        // Request::routeIs('admin')
    }
}

if (! function_exists('isActiveURL')) {
    /**
     * Compares given URL with current URL.
     *
     * @param  string  $url
     * @param  string  $output
     * @return bool
     *
    function isActiveURL($url, $output = 'active')
    {
        if (URL::current() == URL::to($url)) {
            return $output;
        }

        return null;
    }
}

if (! function_exists('isActiveMatch')) {
    /**
     * Detects if the given string is found in the current URL.
     *
     * @param  string  $string
     * @param  string  $output
     * @return bool
     *
    function isActiveMatch($string, $output = 'active')
    {
        if (strpos(URL::current(), $string) !== false) {
            return $output;
        } elseif (strpos(Route::currentRouteName(), $string) !== false) {
            return $output;
        }

        return null;
    }
}

if (! function_exists('getHoursMinutes')) {
    /**
     * Get hours and minuties formatted string.
     *
     * @param  int  $seconds
     * @return string
     *
    function getHoursMinutes($seconds)
    {
        if (empty($seconds) || ! is_numeric($seconds)) {
            return false;
        }

        $minutes = intdiv($seconds, 60);
        $remainMinutes = ($minutes % 60);
        $hours = intdiv($minutes, 60);
        $remainHours = ($hours % 60);

        if ($remainHours > 0) {
            if ($remainMinutes > 0) {
                return $hours . 'H et ' . $remainMinutes . 'min';
            } else {
                return $hours . 'H';
            }
        } else {
            if ($minutes > 0 && $seconds > 60) {
                return $minutes . 'min';
            } else {
                return $seconds . 's';
            }
        }
    }
}

if (! function_exists('getIp')) {
    function getIp()
    {
        foreach (['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'] as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
    }
}

if (! function_exists('getPrice')) {
    /**
     * Convert centimes to euro
     *
     * @param  string  $priceInDecimals
     * @return string
     *
    function getPrice($priceInDecimals)
    {
        $price = floatval($priceInDecimals) / 100;

        return number_format($price, 2, ',', ' ') . ' €';
    }
}

if (! function_exists('plural')) {
    /**
     * Quickest way to show plural noun
     *
     * @param  string  $amount
     * @param  string  $singular
     * @param  string  $plural
     * @return void|string
     *
    function plural($amount, $singular = '', $plural = 's')
    {
        if ($amount <= 1) {
            return $singular;
        }

        return $plural;
    }
}*/
