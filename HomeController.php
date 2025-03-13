<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientVisit;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch online clients (last 5 minutes)
        $onlineClients = ClientVisit::where('last_visit', '>=', now()->subMinutes(5))->get();

        // Data for the business profile
        $businessData = [
            'name' => 'Business Tracker Inc.',
            'description' => 'A leading company specializing in innovation and digital transformation.',
            'products' => [
                'Product A',
                'Product B',
                'Product C',
            ],
            'mission' => 'To provide the best services and solutions to our clients.',
            'vision' => 'To create a future where technology empowers everyone.',
        ];

        // Pass data to the home view
        return view('home', compact('onlineClients', 'businessData'));
    }
}
