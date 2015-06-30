<?php
/**
 * Automatically generated
 *
 * @author: Viskov Sergey
 * @date: 07.05.15
 */


namespace LTDBeget\apacheConfigurator\directives\available;


use LTDBeget\apacheConfigurator\ConfigurationFile;
use LTDBeget\apacheConfigurator\directives\Directive;

class CoreDumpDirectory extends Directive
{
    /**
     * Return link to full description of apache directive
     * @return String
     */
    public function getApacheDocLink()
    {
        return Directive::$apacheSite."/docs/2.4/mod/mpm_common.html#coredumpdirectory";
    }

    /**
     * the source module which defines the directive
     * @return String
     */
    public function getModule()
    {
        return " event, prefork, worker ";
    }

    /**
     * Return text description of apache directive
     * @return String
     */
    public function getDescription()
    {
        return "Directory where Apache HTTP Server attempts to switch before dumping core";
    }

    /**
     * Return Apache directive Syntax
     * @return String
     */
    public function getSyntax()
    {
        return 'CoreDumpDirectory directory';
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
        ];
    }

}