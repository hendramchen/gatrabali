<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Carbon\Carbon;
use Inertia\Inertia;

class VisitorController extends Controller
{
    public function stats()
    {
        $today = Carbon::today();
        $month = Carbon::now()->startOfMonth();

        $stats = [
            'daily' => Visitor::whereDate('visited_at', $today)->count(),
            'monthly' => Visitor::where('visited_at', '>=', $month)->count(),
            'total' => Visitor::count(),
        ];

        return Inertia::render('VisitorStats', [
            'stats' => $stats,
        ]);
    }
}
