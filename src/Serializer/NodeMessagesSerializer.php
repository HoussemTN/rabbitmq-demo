<?php

namespace App\Serializer;

use App\Entity\MyMessage;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Exception\MessageDecodingFailedException;
use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;

class NodeMessagesSerializer implements SerializerInterface
{

    public function decode(array $encodedEnvelope): Envelope
    {
        $body= $encodedEnvelope["body"];
        $headers= $encodedEnvelope["headers"];
        $data = json_decode($body,true);
        if($headers["type"]==MyMessage::class){
            $message = new MyMessage($data["sender"],$data["receiver"],$data["content"]);
            return new Envelope($message);
        }else{
            throw new \Exception("Unsupported Message Type");
        }

    }

    public function encode(Envelope $envelope): array
    {
        throw new \Exception("We will not send messages");
    }
}