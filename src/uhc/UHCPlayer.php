<?php
/**
 * Created by PhpStorm.
 * User: FRISCOWZ
 * Date: 12/5/2017
 * Time: 8:35 PM
 */

namespace uhc;


use pocketmine\network\SourceInterface;
use pocketmine\Player;

class UHCPlayer extends Player
{

    private $playing = false;
    /**
     * UHCPlayer constructor.
     * @param SourceInterface $interface
     * @param null $clientID
     * @param string $ip
     * @param int $port
     */
    public function __construct(SourceInterface $interface, $clientID, $ip, $port)
    {
        parent::__construct($interface, $clientID, $ip, $port);
    }

    public function onJoin(bool $playing = false)
    {
        $this->setPlaying($playing);
    }

    /**
     * @return bool
     */
    public function isPlaying(): bool
    {
        return $this->playing;
    }

    /**
     * @param bool $playing
     */
    public function setPlaying(bool $playing)
    {
        $this->playing = $playing;
    }

}