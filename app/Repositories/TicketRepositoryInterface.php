<?php

namespace App\Repositories;

interface TicketRepositoryInterface
{
    public function simpan(array $data);

    public function update($id, array $data);

    public function hapus($id);
}
