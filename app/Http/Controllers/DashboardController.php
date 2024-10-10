<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch total users from the 'users' table
        $totalUsers = User::count();

        // Fetch new signups within the last 30 days
        $newSignups = User::where('created_at', '>=', now()->subDays(30))->count();

        // Fetch monthly revenue by summing up 'total' column in 'orders' table for current month
        $monthlyRevenue = Order::whereMonth('created_at', now()->month)
                               ->whereYear('created_at', now()->year)
                               ->sum('total');

        // Fetch active sessions count by querying the 'sessions' table
        $activeSessions = DB::table('sessions')->where('is_active', true)->count();

        // Pass all data to the view
        return view('dashboard', compact('totalUsers', 'newSignups', 'monthlyRevenue', 'activeSessions'));
    }
}
