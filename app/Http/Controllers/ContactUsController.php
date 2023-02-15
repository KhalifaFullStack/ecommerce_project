<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_us;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type == 'supplier') {
            $contact_us = Contact_us::where('create_user_id', '=', auth()->user()->id)->orderBy('created_at', 'asc')->paginate(10);
        } elseif (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'moderator') {
            $contact_us = Contact_us::orderBy('created_at', 'asc')->paginate(10);
        }
        $count = $contact_us->count();

        return view('dashboard.contact_us.index', compact('contact_us', 'count'));
    }

    public function create_form()
    {
        return view('contact-us');
    }

    public function store_form(Request $request)
    {
        $contact_us = new Contact_us;

        $contact_us->name = $request->name;
        $contact_us->phone = $request->phone;
        $contact_us->subject = $request->subject;
        $contact_us->message = $request->message;

        if (auth()->user() != 'guest') {
            $contact_us->create_user_id = auth()->user()->id;
            $contact_us->user_type      = auth()->user()->user_type;
            if ($request->email != auth()->user()->email) {
                return redirect(url()->previous() . '#contact_us_form')->with('unsuccessful_message', 'You entered a wrong email! Please try again.');
            } else {
                $contact_us->email          = $request->email;
                $contact_us->user_type      = 'guest';
                $contact_us->create_user_id = null;
            }
        }

        if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'moderator') {
            return redirect(url()->previous() . '#contact_us_form')->with('unsuccessful_message', 'An ADMIN or MODERATOR can not send a contact-us form.');
        } else {
            $contact_us->save();
            return redirect(url()->previous() . '#contact_us_form')->with('successful_message', 'Thanks for contacting us :) we will be in touch with you as soon as possible.');
        }
    }

    public function destroy($id)
    {
        $contact_us = Contact_us::findOrFail($id);
        $contact_us->delete();
        return redirect(url()->previous())->with('successful_message', 'Form Has Been Deleted Successfully.');
    }
}
