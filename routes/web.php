<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// DEVELOPMENT TESTER
Route::group(['prefix' => 'dev'], function () {
    // MAILCHIMP
    Route::group(['prefix' => 'mailchimp'], function () {
        // Get List - sample: "{URL}/dev/mailchimp/"
        Route::get('/', 'DevController@mailchimp_list');

        // Check the status of a contact - sample: "{URL}/dev/mailchimp/status?email=vicky@domain.com"
        Route::get('/status', 'DevController@mailchimp_status');

        // Subscribe a user to your list with merge fields and double-opt-in confirmation disabled - sample: "{URL}/dev/mailchimp/subscribe?email=vicky@domain.com"
        Route::get('/subscribe', 'DevController@mailchimp_subscribe');

        // View Tags - sample: "{URL}/dev/mailchimp/tags"
        Route::get('/tags', 'DevController@mailchimp_tags');

        // Add New Tag - sample: "{URL}/dev/mailchimp/add-tag?name=Newsletter"
        Route::get('/add-tag', 'DevController@mailchimp_add_tag');

        // Add a tag to a contact - sample: "{URL}/dev/mailchimp/add-tag-to?email=vicky@domain.com&tag_id=123456"
        Route::get('/add-tag-to', 'DevController@mailchimp_add_tag_to_contact');

        // View tags in a contact - sample: "{URL}/dev/mailchimp/tags-in-contact?email=vicky@domain.com"
        Route::get('/tags-in-contact', 'DevController@mailchimp_view_tags_in_contact');
    });
});
