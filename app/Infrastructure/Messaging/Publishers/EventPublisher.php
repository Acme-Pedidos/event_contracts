<?php

namespace App\Infrastructure\Messaging\Publishers;

use App\Domain\Events\DomainEvent;

class EventPublisher
{
    public function publicar(DomainEvent $event): void
    {
        // Aqui entra a lib do RabbitMQ
        // exchange: domain.events
        // routing_key: $event->event_name
        $payload = json_encode($event->toArray());
    }
}