<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientVisit; // Ensure this import is present
use Cookie;

class VisitController extends Controller
{
    /**
     * Track a client's visit.
     *
     * @param Request $request
     * @return string
     */
    public function trackVisit(Request $request)
    {
        // Check if the client already has a cookie with a client_id
        $clientId = $request->cookie('client_id');
        if (!$clientId) {
            // Generate a unique client ID if it doesn't exist
            $clientId = uniqid();
            // Store the client ID in a cookie for 1 year
            Cookie::queue('client_id', $clientId, 60 * 24 * 365);
        }

        // Find or create a record for the client in the client_visits table
        $visit = ClientVisit::firstOrCreate(['client_id' => $clientId]);
        // Update the last_visit timestamp
        $visit->last_visit = now();
        // Save the changes to the database
        $visit->save();

        // Return the client ID (for debugging or further use)
        return $clientId;
    }
}