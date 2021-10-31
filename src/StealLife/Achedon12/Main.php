<?php

namespace StealLife\Achedon12;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use StealLife\Achedon12\Events\StealLifeEvent;

class Main extends PluginBase implements Listener{

    public function onEnable(){

        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getServer()->getPluginManager()->registerEvents(new StealLifeEvent(),$this);

        $this->getServer()->getLogger()->info("plugin activé");
    }

    public function onDisable(){
        $this->getServer()->getLogger()->info("plugin désactivé");
    }
}
