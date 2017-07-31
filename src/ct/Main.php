<?php

namespace cf;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;

 class Main extends PluginBase{
 
  public function onEnable(){
   $this->getServer()->getLogger()->info(TF::GREEN."Config has been enabled");
    @mkdir($this->getDataFolder());
    $message = [
     'msg' => 'Welcome',
   ];
   $cfg = new Config($this->getDataFolder() ."config.yml", Config::YAML,$message);
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
     switch($cmd->getName()){
      case 'msg':
       $msg = $this->getConfig()->get("msg");
       $sender->sendMessage($msg);
       }
      }
     }
      
     
    
