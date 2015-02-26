<?php

namespace Del;


class Cdn
{
    public static function fontAwesomeCssLink()
    {
        return Icon::fontAwesomeHeadCssLink();
    }

    /**
     * @param string $version
     * @return string
     */
    public static function bootstrapCssLink($version = '3.3.2')
    {
        switch($version)
        {
            case '2.3.2':
                return '<link type="text/css" rel="stylesheet" media="screen" href="//maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css">';
                break;
            default:
                return '<link type="text/css" rel="stylesheet" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/css/bootstrap.min.css">';
                break;
        }

    }

    public static function jQueryUiCssLink($version = '1.11.3')
    {
        return '<link type="text/css" rel="stylesheet" media="screen" href="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/themes/smoothness/jquery-ui.css">';
    }

    public static function delCssLink()
    {
        return Css::add();
    }

    public static function bootstrapJavascript($version = '3.3.2')
    {
        switch($version)
        {
            case '2.3.2':
                return '<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>';
                break;
            default:
                return '<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/'.$version.'js/bootstrap.min.js"></script>';
                break;
        }

    }

    public static function jQueryJavascript($version = '2.1.3')
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>';
    }

    public static function jQueryUIJavascript($version = '1.11.3')
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/jquery-ui.min.js"></script>';
    }
}
