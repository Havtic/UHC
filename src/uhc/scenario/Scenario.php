<?php
/**
 * Created by PhpStorm.
 * User: FRISCOWZ
 * Date: 12/5/2017
 * Time: 8:44 PM
 */

namespace uhc\scenario;


use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerMoveEvent;

abstract class Scenario
{
    /**
     * @param PlayerMoveEvent $event
     */
    public function onMove(PlayerMoveEvent $event)
    {
        //TODO
    }

    /**
     * @param BlockBreakEvent $event
     */
    public function onBreak(BlockBreakEvent $event)
    {
        //TODO
    }

    /**
     * @param BlockPlaceEvent $event
     */
    public function onPlace(BlockPlaceEvent $event)
    {
        //TODO
    }

    /**
     * @param PlayerDeathEvent $event
     */
    public function onDeath(PlayerDeathEvent $event)
    {
        //TODO
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return "default";
    }
}