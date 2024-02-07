<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class Oxygen extends Theme {
    function onTwigExtensions() {

        /*  SAFE HOME
            twig: {{ addSlash(path) }}
            Adds a trailing slash to path, if not already present
            workaround for #3798 -https://github.com/getgrav/grav/issues/3798
        */
        $addSlash = new \Twig_SimpleFunction ('addSlash', function ($path) {
            // case: slash is already correctly attached
            if (substr( $path, -1 ) === "/") {
                return $path;
            }
            return $path. "/";
        });

        // pass function getUrl to template engine
        $this->grav['twig']->twig->addFunction($addSlash);

        /*  MODULAR LINKS
            twig: {{ getUrl(path) }}
            Allows defined paths to be reused across the site by
            calculating the url from webroot, supporting #anchors.

            Perform a search by any given slug and output its path from webroot, if it exists
            Otherwise return early with the $path given as is from twig
        */
        $getUrl = new \Twig_SimpleFunction ('getUrl', function ($path) {
            // case: external path, return $path as is
            if (substr( $path, 0, 4 ) === "http") {
                return $path;
            }
            else {
                // init pages collections
                $pages = $this->grav['pages'];

                // split $path into an array of two parts, separated by # if any
                $array = explode('#', $path, 2);

                // get page by slug
                $page = $pages->find($array[0]);

                // case: page not found - return $path as is
                // fallback for everything else, ie. local hashes, empty strings and typos
                if (is_null($page)) {
                    return $path;
                }

                // set output url
                $url = $page->url();

                // append hashes, if any
                if ((sizeof($array) >= 2) AND (!empty($array[1]))) {
                    $url .= '#'.$array[1];
                }

                return $url;
            }
        });

        // pass function getUrl to template engine
        $this->grav['twig']->twig->addFunction($getUrl);
    }
}