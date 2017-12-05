<?php
/**
 * Created by PhpStorm.
 * User: FRISCOWZ
 * Date: 12/5/2017
 * Time: 8:50 PM
 */

namespace uhc\scenario;


use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerMoveEvent;
use uhc\scenario\scenarios\CutClean;
use uhc\UHC;

class ScenarioManager
{
    private $plugin;
    private static $scenarios = [];

    /**
     * ScenarioManager constructor.
     * @param UHC $plugin
     */
    public function __construct(UHC $plugin)
    {
        $this->setPlugin($plugin);
        self::registerScenarios();
    }

    /**
     * @return bool
     */
    public static function registerScenarios() : bool
    {
        self::registerScenario(new CutClean());
        return true;
    }

    /**
     * @param Scenario $scenario
     */
    public static function registerScenario(Scenario $scenario)
    {
        self::$scenarios[$scenario->getName()] = $scenario;
    }

    /**
     * @return Scenario[]
     */
    public function getScenarios() : array
    {
        return self::$scenarios;
    }

    /**
     * @param string $name
     * @return Scenario
     */
    public static function getScenario(string $name) : Scenario
    {
        return self::$scenarios[$name];
    }

    /**
     * @param string $name
     * @return bool
     */
    public static function isScenario(string $name) : bool
    {
        return isset(self::$scenarios[$name]);
    }

    /**
     * @return UHC
     */
    public function getPlugin() : UHC
    {
        return $this->plugin;
    }

    /**
     * @param UHC $plugin
     */
    public function setPlugin(UHC $plugin)
    {
        $this->plugin = $plugin;
    }

    /**
     * @param PlayerMoveEvent $event
     */
    public function doMove(PlayerMoveEvent $event)
    {
        foreach (self::getScenarios() as $scenario){
            $scenario->onMove($event);
        }
    }

    /**
     * @param BlockBreakEvent $event
     */
    public function doBreak(BlockBreakEvent $event)
    {
        foreach (self::getScenarios() as $scenario){
            $scenario->onBreak($event);
        }
    }

    /**
     * @param BlockPlaceEvent $event
     */
    public function doPlace(BlockPlaceEvent $event)
    {
        foreach (self::getScenarios() as $scenario){
            $scenario->onPlace($event);
        }
    }

    /**
     * @param PlayerDeathEvent $event
     */
    public function doDeath(PlayerDeathEvent $event)
    {
        foreach (self::getScenarios() as $scenario){
            $scenario->onDeath($event);
        }
    }
}