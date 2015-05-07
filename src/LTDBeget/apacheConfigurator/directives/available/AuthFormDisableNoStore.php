<?php
/**
 * Automatically generated
 *
 * @author: Viskov Sergey
 * @date: 07.05.15
 */


namespace LTDBeget\apacheConfigurator\directives\available;



use LTDBeget\apacheConfigurator\directives\Directive;

class AuthFormDisableNoStore extends Directive
{
    /**
     * Return link to full description of apache directive
     * @return String
     */
    public function getApacheDocLink()
    {
        return $this->apacheSite."/docs/2.4/mod/mod_auth_form.html#authformdisablenostore";
    }

    /**
     * the source module which defines the directive
     * @return String
     */
    public function getModule()
    {
        return "mod_auth_form";
    }

    /**
     * Return text description of apache directive
     * @return String
     */
    public function getDescription()
    {
        return "Disable the CacheControl no-store header on the login page";
    }

    /**
     * Return Apache directive Syntax
     * @return String
     */
    public function getSyntax()
    {
        return 'AuthFormDisableNoStore On|Off';
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
        ];
    }

}