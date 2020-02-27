<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model implements \Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable
{
    public function slugs(){
		return $this->hasMany(CategorySlug::class, 'category_id');
	}

	public function getLocalizedRouteKey($locale)
	{
		return $this->slugs->where('locale', $locale)->first()->slug;
	}

	public function resolveRouteBinding($slug)
	{
	    return $this->whereHas('slugs', function($q) use ($slug){
	    	$q->where([
			    ['slug', $slug],
			    ['locale', \Config::get('app.locale')]
			]);
	    })->first() ?? abort(404);
	}

}
