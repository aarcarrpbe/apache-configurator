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

class AuthLDAPDereferenceAliases extends Directive
{
    /**
     * Return link to full description of apache directive
     * @return String
     */
    public function getApacheDocLink()
    {
        return $this->apacheSite."/docs/2.4/mod/mod_authnz_ldap.html#authldapdereferencealiases";
    }

    /**
     * the source module which defines the directive
     * @return String
     */
    public function getModule()
    {
        return "mod_authnz_ldap";
    }

    /**
     * Return text description of apache directive
     * @return String
     */
    public function getDescription()
    {
        return "When will the module de-reference aliases";
    }

    /**
     * Return Apache directive Syntax
     * @return String
     */
    public function getSyntax()
    {
        return 'AuthLDAPDereferenceAliases never|searching|finding|always';
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