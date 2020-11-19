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
    public static function angularJavascript($version = '1.5.6')
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
    public static function bootstrapCssLink($version = '4.5.3')
    {
        switch($version)
        {
            case '4.5.3':
                return '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">';
                break;
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
    public static function bootstrapJavascript($version = '4.5.3')
    {
        switch($version)
        {
            case '4.5.3':
                return '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>';
                break;
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
    public static function fontAwesomeCssLink($version = '4.3.0')
    {
        return Icon::fontAwesomeHeadCssLink($version);
    }

    /**
     * @param string $version
     * @return string
     */
    public static function jQueryJavascript($version = '3.5.1')
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>';
    }

    /**
     * @param string $version
     * @return string
     */
    public static function jQueryUiCssLink($version = '1.12.1')
    {
        return '<link type="text/css" rel="stylesheet" media="screen" href="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/themes/smoothness/jquery-ui.css">';
    }

    /**
     * @param string $version
     * @return string
     */
    public static function jQueryUIJavascript($version = '1.12.1')
    {
        return '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/jquery-ui.min.js"></script>';
    }

    /**
     * @param string $version
     * @return string
     */
    public static function d3Javascript($version = '6.2.0')
    {
        return '<script src="https://ajax.googleapis.com/ajax/libs/d3js/'.$version.'/d3.min.js"></script>"></script>';
    }

    /**
     * @param string $version
     * @return string
     */
    public static function dojoJavascript($version = '1.13.0')
    {
        return '<script src="https://ajax.googleapis.com/ajax/libs/dojo/'.$version.'/dojo/dojo.js"></script>';
    }
}
