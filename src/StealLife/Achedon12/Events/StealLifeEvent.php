<?php

namespace StealLife\Achedon12\Events;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;

class StealLifeEvent implements Listener{

    public function onDeath(EntityDamageEvent $event){
        $damager = $event->getDamager();
        $entity = $event->getEntity();
        $lastDamage = $entity->getLastDamageCause();
        if($lastDamage == $damager){
            $entityLife = $entity->getMaxHealth();
            $damager->setMaxHealth($entityLife);
        }
    }
}