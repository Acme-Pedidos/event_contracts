<?php

namespace App\Domain\Events\DomainEvent;

abstract class DomainEvent
{
    public function __construct(
        public readonly string $event_id,
        public readonly string $event_name,
        public readonly int $event_version,
        public readonly string $producer,
        public readonly array $data,
        public readonly string $occurred_at,
    ) {}

    public function toArray(): array
    {
        return [
            'event_id' => $this->event_id,
            'event_name' => $this->event_name,
            'event_version' => $this->event_version,
            'producer' => $this->producer,
            'occurred_at' => $this->occurred_at,
            'data' => $this->data,
        ];
    }
}