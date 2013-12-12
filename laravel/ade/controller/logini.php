<?php
class logini extends Controller {
public function login() {
	//untuk membuat database pakai id int  username varchar 200 passsword text
	// untuk memasukkan password harus memakai Hash::make('passs'); lalu masukkan ke tabel
	$credentials = array(
                    "username" => 'ade',
                    "password" =>'ade'
                );

 print_r(Auth::attempt($credentials));
 echo '<br/>ada login';
}

public function logout() {
	Auth::logout();
}

public function ceklogin() {
	if (Auth::check()) {
		echo 'udah login';
		echo Auth::user()->id;
	} else {
		echo 'gak login ';
	}
	
}
}