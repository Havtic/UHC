<?php
/**
 * Created by PhpStorm.
 * User: FRISCOWZ
 * Date: 12/5/2017
 * Time: 8:38 PM
 */

namespace uhc;


use pocketmine\level\Level;

class UHCManager
{
    const DEFAULT_NAME = "UHC";

    private $plugin, $level, $name = self::DEFAULT_NAME;

    /**
     * UHCManager constructor.
     * @param UHC $plugin
     * @param string $name
     * @param Level $level
     */
    public function __construct(UHC $plugin, string $name, Level $level)
    {
        $this->setPlugin($plugin);
        $this->setName($name);
        $this->setLevel($level);
    }

    /**
     * @return UHC
     */
    public function getPlugin(): UHC
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
     * @return Level
     */
    public function getLevel() : Level
    {
        return $this->level;
    }

    /**
     * @param Level $level
     */
    public function setLevel(Level $level)
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}