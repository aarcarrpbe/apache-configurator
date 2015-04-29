<?php
/**
 * @author: Viskov Sergey
 * @date: 28.04.15
 * @time: 20:49
 */


namespace LTDBeget\ApacheConfigurator\Interfaces;


interface iType {
    /**
     * Name of Apache directive or file type
     * @return String
     */
    public function getType();
}