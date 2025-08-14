<?php

class DashboardController extends Controller
{
    public function index()
    {
        // Sample data for the dashboard
        $data = [
            'total_sales' => 13000.00,
            'earnings_in_escrow' => 15000.00,
            'orders_in_progress' => 5,
            'recent_orders' => [
                [
                    'order_id' => 'ORD-001',
                    'customer' => 'John Doe',
                    'amount' => 450.00,
                    'status' => 'In Progress'
                ],
                [
                    'order_id' => 'ORD-002', 
                    'customer' => 'Jane Smith',
                    'amount' => 275.00,
                    'status' => 'Completed'
                ],
                [
                    'order_id' => 'ORD-003',
                    'customer' => 'Mike Johnson', 
                    'amount' => 320.00,
                    'status' => 'Pending'
                ]
            ]
        ];
        
        // Extract data to variables for the view
        extract($data);
        
        $this->views('artisan/dashboard');
    }
}
