<?php

class DashboardController extends Controller
{
    public function index()
    {
        // Sample data for verification dashboard
        $data = [
            'pending_tasks' => [
                'artisan_approvals' => [
                    'count' => 5,
                    'description' => 'Review and approve new artisan applications',
                    'action' => 'View Applications'
                ],
                'workshop_proposals' => [
                    'count' => 3,
                    'description' => 'Evaluate and Accept workshop proposals from artisans',
                    'action' => 'View Proposals'
                ],
                'pending_auctions' => [
                    'count' => 2,
                    'description' => 'Review and approve new auction listings',
                    'action' => 'View Auctions'
                ]
            ],
            'recent_activities' => [
                [
                    'type' => 'artisan_approved',
                    'message' => 'Artisan John Doe approved',
                    'time' => '2 hours ago'
                ],
                [
                    'type' => 'workshop_rejected',
                    'message' => 'Workshop proposal rejected - insufficient details',
                    'time' => '4 hours ago'
                ],
                [
                    'type' => 'auction_approved',
                    'message' => 'Vintage pottery auction approved',
                    'time' => '1 day ago'
                ]
            ]
        ];
        
        // Extract data to variables for the view
        extract($data);
        
        $this->views('verification/dashboard');
    }
}
