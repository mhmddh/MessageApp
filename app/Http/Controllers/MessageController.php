<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request){

        $message =new Message();
        if($request->title !=null && $request->content !=null){
        $message-> title =$request->title; //receiving post request (title)
        $message-> content =$request->content; //receiving post request (title)
        $message->save(); //save message to database
        }


        return redirect('/');

    }
/**public function view($id){
    $message =  Message::findOrFail($id);

    return view('message',[
        'message' => $message
    ]);

    }
*/
public function edit($id){
    $message =  Message::findOrFail($id);
    return view('edit',[
        'message' => $message
    ]);
}

public function update(Request $request, $id){

        $this->validate($request, [
        'title' => 'required',
        'content' => 'required'
    ]);

    $message =  Message::find($id);
    $message->title = $request->title;
    $message->content = $request->content;
    $message->save();

    $messages =  Message::all();

        return view('home',[
            'messages' => $messages
        ]);}


        public function delete($id){
            $message =  Message::find($id);
            $message->delete();

            $messages =  Message::all();
            return view('home',[
                'messages' => $messages
            ]);

        }

}




