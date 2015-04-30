<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
    
    public function _initAutoloader(){
        return Zend_Loader_Autoloader::getInstance()->setDefaultAutoloader(array(new Zend_MagicLoader, 'loadClass'));
   }
}
