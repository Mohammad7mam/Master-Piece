<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoices;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

//=================احصائية نسبة تنفيذ الحالات======================



      $count_all =invoices::count();
      $count_invoices1 = invoices::where('Value_Status', 1)->count();
      $count_invoices2 = invoices::where('Value_Status', 2)->count();
      $count_invoices3 = invoices::where('Value_Status', 3)->count();
      
      $total_amount_invoices_all = invoices::where('Value_Status')->sum('Total');
      $total_amount_invoices1 = invoices::where('Value_Status', 1)->sum('Total');
      $total_amount_invoices2 = invoices::where('Value_Status', 2)->sum('Total');
      $total_amount_invoices3 = invoices::where('Value_Status', 3)->sum('Total');

      
      if($count_invoices2 == 0){
          $nspainvoices2=0;
      }
      else{
          $nspainvoices2 = $count_invoices2/ $count_all*100;
      }

        if($count_invoices1 == 0){
            $nspainvoices1=0;
        }
        else{
            $nspainvoices1 = $count_invoices1/ $count_all*100;
        }

        if($count_invoices3 == 0){
            $nspainvoices3=0;
        }
        else{
            $nspainvoices3 = $count_invoices3/ $count_all*100;
        }


        $chartjs = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 350, 'height' => 200])
            ->labels(['الفواتير الغير المدفوعة', 'الفواتير المدفوعة','الفواتير المدفوعة جزئيا'])
            ->datasets([
                [
                    "label" => "الفواتير الغير المدفوعة",
                    'backgroundColor' => ['#f93a5a'],
                    'data' => [number_format($nspainvoices2)]
                ],
                [
                    "label" => "الفواتير المدفوعة",
                    'backgroundColor' => ['#81b214'],
                    'data' => [number_format($nspainvoices1)]
                ],
                [
                    "label" => "الفواتير المدفوعة جزئيا",
                    'backgroundColor' => ['#ff9642'],
                    'data' => [number_format($nspainvoices3)]
                ],


            ])
            ->options([]);


        $chartjs_2 = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 340, 'height' => 200])
            ->labels(['الفواتير الغير المدفوعة', 'الفواتير المدفوعة','الفواتير المدفوعة جزئيا'])
            ->datasets([
                [
                    'backgroundColor' => ['#f93a5a', '#81b214','#ff9642'],
                    'data' => [$total_amount_invoices2, $total_amount_invoices1,$total_amount_invoices3]
                ]
            ])
            ->options([]);

        return view('home', compact('chartjs','chartjs_2'));

    }
    public function edit($id)
{
$user = User::find($id);
$roles = Role::pluck('name','name')->all();
$userRole = $user->roles->pluck('name','name')->all();
return view('layouts.main-sidebar',compact('user','roles','userRole'));
}



}
