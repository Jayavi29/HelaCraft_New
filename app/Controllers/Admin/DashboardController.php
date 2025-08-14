<?php

class DashboardController extends Controller
{
    public function index()
    {
        // Sample admin dashboard data matching the design
        $data = [
            'stats' => [
                'overall_sales' => [
                    'value' => '$45,231.89',
                    'description' => 'Over from last month',
                    'trend' => 'up'
                ],
                'user_growth' => [
                    'value' => '2,350',
                    'description' => 'Active users',
                    'trend' => 'up'
                ],
                'platform_revenue' => [
                    'value' => '$12,234',
                    'description' => 'Commission earned',
                    'trend' => 'up'
                ],
                'active_workshops' => [
                    'value' => '573',
                    'description' => 'Currently running',
                    'trend' => 'up'
                ]
            ],
            'management_sections' => [
                'user_management' => [
                    'title' => 'User Management',
                    'description' => 'Manage customers, artisans, and verification team members',
                    'stats' => [
                        'total_users' => '1,234',
                        'pending' => '89'
                    ],
                    'action' => 'Manage Users',
                    'url' => '/admin/user-management'
                ],
                'platform_settings' => [
                    'title' => 'Platform Settings',
                    'description' => 'Configure commission rates and pricing tiers',
                    'stats' => [
                        'commission' => '5%',
                        'tiers' => '3'
                    ],
                    'action' => 'View Settings',
                    'url' => '/admin/platform-settings'
                ],
                'reporting' => [
                    'title' => 'Reporting',
                    'description' => 'Generate detailed reports for sales and user analytics',
                    'stats' => [
                        'reports' => '12',
                        'updated' => 'Daily'
                    ],
                    'action' => 'Generate Reports',
                    'url' => '/admin/reports'
                ]
            ],
            'recent_activities' => [
                [
                    'type' => 'new_user_registration',
                    'message' => 'New user registration',
                    'details' => 'Sarah Wilson',
                    'time' => '2 minutes ago'
                ],
                [
                    'type' => 'workshop_completed',
                    'message' => 'Workshop completed',
                    'details' => 'Pottery Basics',
                    'time' => '15 minutes ago'
                ],
                [
                    'type' => 'commission_payment',
                    'message' => 'Commission payment',
                    'details' => '$32.50',
                    'time' => '1 hour ago'
                ],
                [
                    'type' => 'verification_request',
                    'message' => 'Verification request',
                    'details' => 'John Artisan',
                    'time' => '2 hours ago'
                ]
            ]
        ];
        
        // Extract data to variables for the view
        extract($data);
        
        $this->views('admin/dashboard');
    }
}
