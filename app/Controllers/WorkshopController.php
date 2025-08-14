<?php

class WorkshopController extends Controller
{
    public function index()
    {
        $this->views('public/workshop_listing');
    }
}
