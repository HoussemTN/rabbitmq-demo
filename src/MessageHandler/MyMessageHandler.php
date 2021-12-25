<?php

namespace App\MessageHandler;

use App\Entity\MyMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MyMessageHandler implements MessageHandlerInterface
{
    public function __invoke(MyMessage $message)
    {
        echo "Welcome to MyMessage Handler \n";
        echo $message->getContent()."\n" ;
    }

}