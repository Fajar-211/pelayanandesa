<?php

namespace App\Livewire;

use App\Models\KasWarga;
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

final class KasWargaTable extends PowerGridComponent
{
    use WithExport;
    public $selectedBulan;

    public function setUp(): array
    {
        // $this->showCheckBox();

        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return KasWarga::when($this->selectedBulan, function ($query) {
            return $query->where('bulan', $this->selectedBulan);
        });
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('bulan')
            ->add('tanggal')
            ->add('info_pemasukan')
            ->add('saldo_masuk')
            ->add('info_pengeluaran')
            ->add('saldo_keluar')
            ->add('saldo')
            ->add('saldo_awal_tahun')
            ->add('total_saldo')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            // Column::make('Created at', 'created_at_formatted', 'created_at')
            //     ->sortable(),

            Column::make('Bulan', 'bulan')
                ->sortable()
                ->searchable(),

                
            Column::make('Tanggal', 'tanggal')
            ->sortable()
            ->searchable(),

            Column::make('Info Pemasukan', 'info_pemasukan')
            ->sortable()
            ->searchable(),

            Column::make('Saldo Masuk', 'saldo_masuk')
            ->sortable()
            ->searchable(),

            Column::make('Info Pengeluaran', 'info_pengeluaran')
            ->sortable()
            ->searchable(),

            Column::make('Saldo Keluar', 'saldo_keluar')
            ->sortable()
            ->searchable(),
            
            Column::make('Saldo', 'saldo')
            ->sortable()
            ->searchable(),

            Column::make('Saldo Awal Tahun', 'saldo_awal_tahun')
            ->sortable()
            ->searchable(),

            Column::make('Total Saldo', 'total_saldo')
            ->sortable()
            ->searchable(),

            // Column::make('Created at', 'created_at')
            //     ->sortable()
            //     ->searchable(),
            // Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }
}
