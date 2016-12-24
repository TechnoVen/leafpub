<?php
/**
 * Leafpub: Simple, beautiful publishing. (https://leafpub.org)
 *
 * @link      https://github.com/Leafpub/leafpub
 * @copyright Copyright (c) 2016 Leafpub Team
 * @license   https://github.com/Leafpub/leafpub/blob/master/LICENSE.md (GPL License)
 */
namespace Leafpub\Events\Application;

use Leafpub\Events\LeafpubEvent;

class LeafpubHead extends LeafpubEvent {
    const NAME = 'application.leafpub_head';
    
    protected $_html;

    public function __construct(String $html){
        parent::__construct();
        $this->_html = $html;
    }

    public function getEventData(){
        return $this->_html;
    }

    public function setEventData(String $html){
        $this->_html = $html;
    }
}

?>