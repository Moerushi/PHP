<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class TestDataSelect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:data-select';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        // $employees = Employee::all();
        // foreach ($employees as $employee) {
        //     echo $employee->first_name . ' ' . $employee->age . PHP_EOL;
        // }

        // $employees = Employee::find(2);
        // echo $employees['first_name'] . ' ' . $employees['age'] . PHP_EOL;

        // $employees = Employee::where('first_name', '=', 'John')->where('age', '<=', 30)->get();
        // foreach ($employees as $employee) {
        //     echo $employee->first_name . ' ' . $employee->age . PHP_EOL;
        // }

        // $employees = Employee::where('first_name', '<>', 'John')->where('age', '<=', 30)->first();
        // echo $employees['first_name'] . ' ' . $employees['age'] . PHP_EOL;

        // $employees = Employee::orderBy('age', 'ASC')->skip(2)->limit(2)->get();
        // foreach ($employees as $employee) {
        //     echo $employee->first_name . ' ' . $employee->age . PHP_EOL;
        // }

        // $employees = DB::table('employees')
        //         ->groupBy('first_name') // сгруппировали
        //         ->select('first_name', DB::raw('count(1) as employee_total')) // выбрали из SQL
        //         ->get();

        // foreach ($employees as $employee) {
        //     echo $employee->first_name . ' ' . $employee->employee_total . PHP_EOL;
        // }

        $employees = Employee::distinct()->orderBy('first_name')->get(['first_name']); // вывод только уникальных и отсортированных имен

        foreach ($employees as $employee) {
            echo $employee->first_name . PHP_EOL;
        }
    }
}
