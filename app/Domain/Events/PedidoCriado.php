<?php

namespace App\Domain\Events;

final class PedidoCriado extends DomainEvent
{
    public static function create (array $pedido):self
    {
        return new self(
            event_id: (string) \Str::uuid(),
            event_name: 'pedido.criado',
            event_version: 1,
            producer: 'PedidosService',
            data: [
                'pedido' => $pedido_id['id'],
                'cliente' => $pedido_id['cliente_id'],
                'itens' => $pedido['itens'],
            ],
            occurred_at: now()->toISOString(),
        );
    }
}