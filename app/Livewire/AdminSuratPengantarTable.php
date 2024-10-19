<?php

namespace App\Livewire;

use App\Models\SuratPengantar;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class AdminSuratPengantarTable extends PowerGridComponent
{

    public function setUp(): array
    {

        return [
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return SuratPengantar::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('nokk')
            ->add('nik')
            ->add('nama')
            ->add('keperluan')
            ->add('status')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Nomer KK', 'nokk')
            ->sortable()
            ->searchable(),

        Column::make('NIK', 'nik')
            ->sortable()
            ->searchable(),

        Column::make('Nama', 'nama')
            ->sortable()
            ->searchable(),

        Column::make('Keperluan', 'keperluan')
            ->sortable()
            ->searchable(),

        Column::make('Status', 'status')
            ->sortable()
            ->searchable(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }


    public function actions(SuratPengantar $row): array
    {
        $status = $row->status;
        return [
            $status == 'pending' ?
            Button::make('approve')
                ->slot('Approve')
                ->class('btn btn-primary btn-sm')
                ->route('admin.surat-pengantar.approve', ['id' => $row->id])
                ->target('_self') : [],

            $status == 'pending' ? Button::make('reject')
                ->slot('Reject')
                ->class('btn bg-red-500 text-white btn-sm')
                ->route('admin.surat-pengantar.reject', ['id' => $row->id])
                ->target('_self') : [],
        ];
    }


}
