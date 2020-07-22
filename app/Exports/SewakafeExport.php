<?php

namespace App\Exports;

use App\Sewakafe;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SewakafeExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sewakafe::all();
    }
    public function map($sewakafe): array
    {
        return [
            $sewakafe->cafe,
            $sewakafe->nama,
            $sewakafe->email,
            $sewakafe->nomor_telpon,
            $sewakafe->tanggal,
            $sewakafe->acara,
            $sewakafe->id_paket,
            $sewakafe->jumlah_orang,
            $sewakafe->keterangan,
            $sewakafe->id_user,
        ];
    }
    public function headings(): array
    {
        return [
          'Kafe',
          'Nama',
          'Email',
          'No Telpon',
          'Tanggal',
          'Acara',
          'Paket',
          'Jumlah Orang',
          'Keterangan',
          'Waktu Sewa(jam)'
        ];
    }
}