<?php

class AuctionController extends Controller 
{
    public function index()
    {
        $this->views('public/auction_listing');
    }
}
