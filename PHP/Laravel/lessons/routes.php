<?php 


Route::get('contact', function () { return view('contact'); })->name('contact');
Route::post('contact.mail', 'ContactController@contactMail')->name('contactMail');
Route::delete('delete.{comment}', 'CommentController@delete')->name('commentDelete');