<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function review(){
        $reviews = new Contact();
        return view('review', ['reviews' => $reviews->all()]);//получ объект во внутрь шаблона

        //dd($reviews->all());
        //вывести полностью на экран с табл Contact
    }

    public function review_check(Request $request){//получ все данные из формы
        $valid = $request->validate([//проверяем данные
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:10|max:500'
        ]);

        $review = new Contact();//создаем объект модели contact
        $review->email = $request->input('email');//в поле->знач
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        //создать новую запись в contact
        $review->save();

        //переадресация на review
        return redirect()->route('review');
    }

    public function news(){
        return view('news');
    }

    public function contacts(){
        return view('contacts');
    }
}
