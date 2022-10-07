<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;//подключ
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function submit(ContactRequest $req){

        //создание объекта contact
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        //добавить эти знач в бд
        $contact->save();

        //переадресация на гл стр
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');//вызов сессии success(показ на стр после отправки)



        // $validation = $req->validate([
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:15|max:100'
        // ]);
    }

    //функ сообщение
    public function allData(){
        //выборка бд
        $contact = new Contact;

        return view('messages', ['data' => $contact->all()]);

        //$contact->orderBy('id', 'desc')->skip(1)->take(1)->get() //сортировка по id
        //$contact->where('subject', '<>', 'Salem alem')->get()]);//где subject не равно...
        //'data' => $contact->inRandomOrder()->get() ========  //вывод all el рандомно  //->first() - вывод 1эл  //$contact->find(2) - выводит на стр указ id           //$contact->all() - весь эл
        //dd(Contact::all());
    }

    public function showOneMessage($id){
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);//по id
    }

    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req){

        //создание объекта contact
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        //добавить эти знач в бд
        $contact->save();

        //переадресация на гл стр
        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');//вызов сессии success(показ на стр после отправки)

    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }

}   
