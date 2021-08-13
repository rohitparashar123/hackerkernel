<?php

namespace App\Exports;

use App\users;
use App\Task;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $data = users::all();
        // $tasks = Task::all();

        // return [$data,$tasks];
        return users::all();
    }
}
