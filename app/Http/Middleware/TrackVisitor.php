<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        $ipAddress = $request->ip();
        $today = Carbon::today();

        // Check if this IP has already visited today
        $existingVisit = Visitor::where('ip_address', $ipAddress)
            ->whereDate('visited_at', $today)
            ->exists();

        if (!$existingVisit) {
            Visitor::create([
                'ip_address' => $ipAddress,
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }
}
