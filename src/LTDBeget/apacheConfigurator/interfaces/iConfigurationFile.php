<?php
/**
 * @author: Viskov Sergey
 * @date: 28.04.15
 * @time: 15:57
 */


namespace LTDBeget\apacheConfigurator\interfaces;


interface iConfigurationFile extends iContext
{
    /**
     * @param String $directiveName name of Apache directive
     * @param String $value value of Apache directive
     * @param iDirectivePath $contextPath path to context
     * @return iDirective
     */
    public function addDirective($directiveName, $value, iDirectivePath $contextPath);

    /**
     * @param iDirective $directive
     * @return void
     */
    public function removeDirective(iDirective $directive);
}