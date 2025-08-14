<?php

class DashboardController extends Controller
{
    // Default method for /customer/dashboard
    public function index()
    {
        $this->views('customer/dashboard'); // Load the dashboard view
    }

}