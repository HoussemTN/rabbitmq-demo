<?php

namespace App\MessageHandler;

use App\Entity\MyMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MyMessageHandler implements MessageHandlerInterface
{
    private EntityManagerInterface $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke(MyMessage $message)
    {
        echo "Welcome to MyMessage Handler \n";
        $this->em->persist($message);
        $this->em->flush();

    }

}