<?php

namespace App\Repositories;

use App\Models\Ticket;

class TicketRepository implements TicketRepositoryInterface
{
    protected $ticket;
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    public function simpan(array $data)
    {
        return $this->ticket->create($data);

    }

    public function update($id, array $data)
    {
        $tiket = $this->ticket->find($id);
        $tiket->update($data);
        return $tiket;
    }

    public function hapus($id)
    {
        return $this->ticket->find($id)->delete();
    }

}
