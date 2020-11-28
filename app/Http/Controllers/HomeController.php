<?php


namespace App\Http\Controllers;


class HomeController extends  controller
{
     public function about()
     {
      $name = 'Zaher Alali';
      $job = 'Business Management';
      $city = 'Gaziantep';
  return view('about', compact('name', 'job', 'city'));
    //}
}}