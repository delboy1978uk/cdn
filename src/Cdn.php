<?php

namespace Del;


/**
 * Class Cdn
 * @package Del
 */
class Cdn
{

    /**
     * @param string $version
     * @return string
     */
    public static function angularJavascript($version = '3.3.2')
    {
        switch($version)
        {
            default:
                return '<script src="//ajax.googleapis.com/ajax/libs/angularjs/'.$version.'/angular.min.js"></script>';
                break;
        }

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

    /**
     * @param string $version
     * @return string
     */
    public static function bootstrapJavascript($version = '3.3.2')
    {
        switch($version)
        {
            case '2.3.2':
                return '<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>';
                break;
            default:
                return '<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/js/bootstrap.min.js"></script>';
                break;
        }

    }

    /**
     * @return mixed
     */
    public static function delCssLink()
    {
        return Css::add();
    }

    /**
     * @return string
     */
    public static function fontAwesomeCssLink()
    {
        return Icon::fontAwesomeHeadCssLink();
    }

    /**
     * @param string $version
     * @return string
     */
    public static function jQueryJavascript($version = '2.1.3')
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>';
    }

    /**
     * @param string $version
     * @return string
     */
    public static function jQueryUiCssLink($version = '1.11.3')
    {
        return '<link type="text/css" rel="stylesheet" media="screen" href="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/themes/smoothness/jquery-ui.css">';
    }

    /**
     * @param string $version
     * @return string
     */
    public static function jQueryUIJavascript($version = '1.11.3')
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/jquery-ui.min.js"></script>';
    }
}
