<?php
/**
 * Automatically generated
 *
 * @author: Viskov Sergey
 * @date: 07.05.15
 */


namespace LTDBeget\ApacheConfigurator\Directives\available;


use LTDBeget\ApacheConfigurator\ConfigurationFile;
use LTDBeget\ApacheConfigurator\Directives\Directive;

class DavDepthInfinity extends Directive
{
    /**
     * Return link to full description of apache directive
     * @return String
     */
    public static function getApacheDocLink()
    {
        return Directive::$apacheSite."/docs/2.4/mod/mod_dav.html#davdepthinfinity";
    }

    /**
     * the source module which defines the directive
     * @return String
     */
    public static function getModule()
    {
        return "mod_dav";
    }

    /**
     * Return text description of apache directive
     * @return String
     */
    public static function getDescription()
    {
        return "Allow PROPFIND, Depth: Infinity requests";
    }

    /**
     * Return Apache directive Syntax
     * @return String
     */
    public static function getSyntax()
    {
        return 'DavDepthInfinity on|off';
    }

    /**
     * is this directive can include inner directives
     * @return boolean
     */
    public function isSection()
    {
        return false;
    }

    /**
     * Set allowed context of concrete directive
     */
    protected function setAllowedContext()
    {
        $this->allowedContext = [
            ConfigurationFile::SERVER_CONFIG,
            VirtualHost::getFullName(),
            Directory::getFullName(),
        ];
    }

}