<?php
 Route::get('/', function () {
     return view('welcome');
 });

 Route::get('/about',function() {
 	return '<h1>Halo</h1>'
 	.'selamat datang di webapp saya<br>'
 	.'laravel, emang keren.';
 });

 // Route::get('/about/1',function() {
 // 	return '<h2>ini halaman about 1</h2>';
 // });
 //  Route::get('/about/2',function() {
 // 	return '<h3>ini halaman about 2</h3>';
 // });

 // Route::get('/about/3',function() {
 // 	return '<h2>ini halaman about 3</h2>';
 // });

 // Route::get('/about/4',function() {
 // 	return '<h1>ini halaman about 4</h3>';
 // });

 // Route::get('/about/5',function() {
 // 	return '<h2>ini halaman about 5</h2>';
 // });

 route::get('/kontak',function(){
	return view('kontak');
});

route::get('/kantin',function(){
	return view('user/kantin');
});

route::get('/kantin/{fadhil}/{iki}/{nur}',function($a,$b,$c){
	return 'saya pesan <b>'.$a.'</b><br>'
		   .'minumanya <b>'.$b.'</b><br>'
	 	   .'tambah cemilan <b>'.$c.'</b>';
});
//route optional parameter
route::get('user/{name?}',function ($name = 'john'){
	return 'Nama Saya <b>'.$name.'<b>';
});