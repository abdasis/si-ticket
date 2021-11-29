<?php

namespace App\Http\Livewire\Ticket;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelTicket extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Column Name'),
        ];
    }

    public function query(): Builder
    {
        return Ticket::query();

    }
}
