<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\MessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {   
        //new MessageCreated($request->name, $request->email, $request->message);
        
        /**Une premier methode comment enregistrer le formulaire dans la base de donnee */
        // $message = new Message;
        // $message->name = $request->name;
        // $message->email = $request->email;
        // $message->message = $request->message;
        // $message->save();
        // $mailable = new MessageCreated($message);
        // Mail::to(config('laracarte.admin_support_email'))->send($mailable);

        /**Deuxieme methode */
        $message = Message::create($request->only('name', 'email', 'message'));
        Mail::to(config('laracarte.admin_support_email'))->send(new MessageCreated($message));

        /**En utilisant les files d'attente on aura  */
        // $message = Message::create($request->only('name', 'email', 'message'));
        // Mail::to(config('laracarte.admin_support_email'))->queue(new MessageCreated($message));

        return redirect()->route('root_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
