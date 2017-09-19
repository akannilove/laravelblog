<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
   public function getIndex() {
   	return view('pages.welcome');
   }

   public function getAbout() {
   	$first = "Akanni";
   	$last = "Oladimeji";
   	$fullname = $first . " " . $last;
   	$email = "dimejiakanni@gmail.com";
   	$data = [];
   	$data['fullname'] = $fullname;
   	$data['email'] = $email;
   	return view('pages.about')->withData($data);
   }

   public function getContact() {
   	return view('pages.contact');
   }

}
