<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use App\Models\Team;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    public function statisticPage()
    {
        $statistic = Statistic::select('ip', DB::raw('DATE(created_at) as day'), DB::raw('COUNT(id) as total_users'))
        ->groupBy('ip', 'day')
        ->get();

        $statistic_1 = Statistic::select('ip', DB::raw('DATE(created_at) as day'), DB::raw('COUNT(id) as total_users'))
        ->groupBy('day')
        ->get();


        $totalTeams = Team::count();

        $totalProducts = Product::count();
    
        $totalVisitors = Statistic::count();
    
        return view('statistic/statistic', [
            'statistic' => $statistic_1,
            'totalTeams' => $totalTeams,
            'totalProducts' => $totalProducts,
            'totalVisitors' => $totalVisitors
        ]);      
    }
}
