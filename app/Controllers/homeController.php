<?php

class HomeController extends Controller
{
    // Landing action: /home or /
    public function index($a = '$home', $b = 'index')
    {
        //$user = new User;          // Model instance

        // Example insert (commented out)
        // $arr = [
        //     'username'   => 'testuser',
        //     'password'   => 40,
        //     'email'      => 'mmmmmm',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ];
        // $result = $user->insert($arr);

        //$result = $user->all();    // Fetch all users
        //show($result);             // Debug helper

        echo "Welcome to the Home controller Page!";
        //show("Welcome to the index Page!");

        $this->views('home');      // Load view
    }

    // /home/edit
    public function edit()
    {
        show("Welcome to the edit Page!");
        $this->views('edit');
    }
}
