<?php

namespace jojoe77777\HexDumpAnalyzer;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\network\mcpe\protocol\PacketPool;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
        if(!isset($args[0])){
            return false;
        }
        $hexDump = $args[0];
        try {
            $pk = PacketPool::getPacket(hex2bin(substr($hexDump, 2)));
            $pk->decode();
            var_dump($pk);
        } catch (\Exception $e){
            $sender->sendMessage("Error: {$e->getMessage()}");
            return true;
        }
        return true;
    }

}