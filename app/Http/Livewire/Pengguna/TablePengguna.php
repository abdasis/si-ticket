<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TablePengguna extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Nama Lengkap', 'name'),
            Column::make('Email', 'email'),
            Column::make('Tanggal Daftar', 'created_at'),
            Column::make('Option', 'id')->format(function ($val){
                return view('partials.tombol_aksi', [
                    'edit' => route('pengguna.sunting', $val),
                ]);
            })
        ];
    }

    public function query(): Builder
    {
        return User::query();

    }
}
