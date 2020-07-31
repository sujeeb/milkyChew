<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = array (
            'message' => 'Customer Feedback',
            'feedbacks' => Contact::all()
        );
        
       
        return view('/contact', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [
        'subject' => 'required|max:255',
        'message' => 'required',
    ]);
        $contact = new Contact;
        $contact->subject = Input::get('subject');
        $contact->message = Input::get('message');
        $contact->user_id = Auth::id();
        $contact->save();
        return redirect ('/');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array('feedback' => Contact::find($id));
        return view('singleComment', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $contact = Contact::find($id);
       $data = array('contact' => $contact);
        return view('feedbacks.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $contact->subject = Input::get('subject');
        $contact->message = Input::get('message');

        $contact->save();
        return redirect('feedback/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $contact = Contact::find($id);
        $contact->delete();
        return redirect ('/feedback/contact');
    }
}
