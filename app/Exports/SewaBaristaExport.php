<?php

namespace App\Exports;

use App\Sewabarista;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SewaBaristaExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sewabarista::all();
    }
    public function map($sewabarista): array
    {
        return [
            $sewabarista->cafe,
            $sewabarista->nama,
            $sewabarista->email,
            $sewabarista->nomor_telpon,
            $sewabarista->tanggal,
            $sewabarista->acara,
            $sewabarista->tempat,
            $sewabarista->keterangan,
            $sewabarista->id_user,
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
          'Alamat (Tempat)',
          'Keterangan',
          'Waktu Sewa(jam)'
        ];
    }
}