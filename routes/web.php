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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localizationRedirect', 'localize']], function()
{
	Route::get('/', function(){
		echo "home";
	});

	Route::get('test',function(){
		echo "test";
	});

});
























// Route::group(
// [
// 	'prefix' => LaravelLocalization::setLocale(),
// 	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ,'localize']
// ], function(){ 
// });




// {{ dd( LaravelLocalization::localizeUrl('(/test)') ) }}

// {{ dd( LaravelLocalization::getLocalizedURL('en') ) }}

// {{ dd( LaravelLocalization::getNonLocalizedURL('/es/about') ) }}

// {{ dd( LaravelLocalization::getURLFromRouteNameTranslated('es', 'routes.about') ) }}

// {{ dd( LaravelLocalization::getSupportedLocales() ) }}

// {{ dd( LaravelLocalization::getSupportedLanguagesKeys() ) }}

// {{ dd( LaravelLocalization::getCurrentLocale() ) }}

// {{ dd( LaravelLocalization::getCurrentLocaleName() ) }}

// {{ dd( LaravelLocalization::getCurrentLocaleDirection() ) }}





// <ul>
//     @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
//         <li>
//             <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
//                 {{ $properties['native'] }}
//             </a>
//         </li>
//     @endforeach
// </ul>



// Route::get(LaravelLocalization::transRoute('routes.contact'), function () {
//     return view('contact');
// });

// Route::get(LaravelLocalization::transRoute('routes.category'), 'CategoryController@index')->name('category.index');
