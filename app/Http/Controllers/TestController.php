<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class TestController extends Controller
{
	public function css() {
		return view('test', ['name' => 'Игорь','age' => '15', 'surname' => 'Макаревич']);
	}
	 public function show() {
	 	return view('layouts.child', ['text' => 'конфета','href' => 'https://omacademy.ru/', ]);
	}

	public function show3() {
		return view('test3',['employees' => [
            [
                'name' => 'user 1',
                'surname' => 'surname 1',
                'salary' => 1000,
            ],
            [
                'name' => 'user 2',
                'surname' => 'surname 2',
                'salary' => 2000,
            ],
            [   'name' => 'user 3',
                'surname' => 'surname 3',
                'salary' => 3000,]]]);
							}
    public function show4() {
        return view('test4', $arr = [1,2,3,4,5]
    );
    }
    public function show5() {
        return view('layouts.child', ['text' => 'конфета','href' => 'https://omacademy.ru/' ]
    ); 
    }
    public function show6() {
        $link=[[   'text' => 'text1',
        'href' => 'href1',],
    [   'text' => 'text2',
        'href' => 'href2',],       
    [   'text' => 'text2',
        'href' => 'href2',],
    [   'text' => 'text2',
        'href' => 'href2',],
   ];
        return view('layouts.child2', ["l"=>$link]    
    ); 
    }
    public function show7() {
		return view('menu',['employees' => [
            [  
                
                'name' => 'user 1',
                'surname' => 'surname 1',
                'salary' => 1000,
            ],
            [   
                
                'name' => 'user 2',
                'surname' => 'surname 2',
                'salary' => 2000,
            ],
            [   
                
                'name' => 'user 3',
                'surname' => 'surname 3',
                'salary' => 3000,]]]);
							}
      public function show8() {
        return view('users',['users' => [
            [
            'name' => 'user1',
            'surname' => 'surname1',
            'banned' => true,
        ],
        [
            'name' => 'user2',
            'surname' => 'surname2',
            'banned' => false,
        ],
        [
            'name' => 'user3',
            'surname' => 'surname3',
            'banned' => true,
        ],
        [
            'name' => 'user4',
            'surname' => 'surname4',
            'banned' => false,
        ],
        [
            'name' => 'user5',
            'surname' => 'surname5',
            'banned' => false,
        ]]]);
                            }

}
