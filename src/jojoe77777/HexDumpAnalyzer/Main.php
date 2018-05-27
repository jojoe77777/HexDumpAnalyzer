<?php

namespace jojoe77777\HexDumpAnalyzer;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\network\mcpe\protocol\DataPacket;

class Main extends PluginBase {

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
        if(!isset($args[1])){
            return false;
        }
        $packetName = $args[0];
        $hexDump = $args[1];
        $class = "\\pocketmine\\network\\mcpe\\protocol\\{$packetName}";
        try {
            /** @var DataPacket $pk */
            $pk = new $class;
            $pk->buffer = hex2bin(substr($hexDump, 2));
            $pk->decode();
            var_dump($pk);
        } catch (\Exception $e){
            $sender->sendMessage("Error: {$e->getMessage()}");
            return true;
        }
        return true;
    }

}