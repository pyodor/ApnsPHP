<?php
class ApnsPHP_Log_Custom implements ApnsPHP_Log_Interface
{
    private $_enabled = true; // show or enable loggings

    public function __construct($disable=false /* wish to disable logging */)  {
        if($disable) $this->_enabled = false;
    }

    public function log($sMessage)
    {
        if($this->_enabled) {
            printf("%s ApnsPHP[%d]: %s\n",
                date('r'), getmypid(), trim($sMessage)
            );
        }
	}
}
