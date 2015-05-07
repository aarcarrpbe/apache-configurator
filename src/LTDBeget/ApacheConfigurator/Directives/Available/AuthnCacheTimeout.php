<?php
/**
 * Automatically generated
 *
 * @author: Viskov Sergey
 * @date: 07.05.15
 */


namespace LTDBeget\ApacheConfigurator\Directives\Available;


use LTDBeget\ApacheConfigurator\ConfigurationFile;
use LTDBeget\ApacheConfigurator\Directives\Directive;

class AuthnCacheTimeout extends Directive
{
    /**
     * Return link to full description of apache directive
     * @return String
     */
    public function getApacheDocLink()
    {
        return $this->apacheSite."/docs/2.4/mod/mod_authn_socache.html#authncachetimeout";
    }

    /**
     * the source module which defines the directive
     * @return String
     */
    public function getModule()
    {
        return "mod_authn_socache";
    }

    /**
     * Return text description of apache directive
     * @return String
     */
    public function getDescription()
    {
        return "Set a timeout for cache entries";
    }

    /**
     * Return Apache directive Syntax
     * @return String
     */
    public function getSyntax()
    {
        return 'AuthnCacheTimeout timeout (seconds)';
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
            Directory::getFullName(),
            ConfigurationFile::HTACCESS,
        ];
    }

}