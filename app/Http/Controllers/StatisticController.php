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

        $startDate = now()->subDays(5)->toDateString();
        $endDate = now()->toDateString();

        $result = Statistic::select('t.day', DB::raw('COUNT(s.id) as total_users'))
            ->from(DB::raw('(
                
        SELECT CURDATE() - INTERVAL 6 DAY AS day UNION ALL
        SELECT CURDATE() - INTERVAL 5 DAY AS day UNION ALL
        SELECT CURDATE() - INTERVAL 4 DAY AS day UNION ALL
        SELECT CURDATE() - INTERVAL 3 DAY AS day UNION ALL
        SELECT CURDATE() - INTERVAL 2 DAY AS day UNION ALL
        SELECT CURDATE() - INTERVAL 1 DAY AS day UNION ALL
        SELECT CURDATE() AS day
    ) AS t'))
            ->leftJoin('statistic AS s', DB::raw('t.day'), '=', DB::raw('DATE(s.created_at)'))
            ->groupBy('t.day')
            ->get();




        $totalTeams = Team::count();

        $totalProducts = Product::count();

        $totalVisitors = Statistic::count();

        $totalMonthlyVisitors = Statistic::select(DB::raw('COUNT(*) as totalMonthlyVisitors, YEAR(created_at) as year, MONTH(created_at) as month'))
            ->whereYear('created_at', '=', date('Y'))
            ->whereMonth('created_at', '=', date('m'))
            ->get();


        $totalOnline = Statistic::whereDate('created_at', '=', date('Y-m-d'))->count();

        // dd($totalOnline);

        return view('statistic/statistic', [
            'statistic' => $result,
            'totalMonthlyVisitors' => $totalMonthlyVisitors,
            'totalOnline' => $totalOnline
        ]);
    }
}
