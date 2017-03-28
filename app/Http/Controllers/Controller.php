<?php

namespace App\Http\Controllers;

//use Redis;
use Illuminate\Support\Facades\Redis as Redis;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

	public function testRedis(){
		Redis::set('name','testredis');
		//$value = Redis::lrange('name',0,10);
		$value = Redis::get('name');
		dd($value);
	}
}
