<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\SubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{    
    /**
     * Show the screen list of Subscriber.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $subcriber = Subscriber::paginate(10);
        return view('admin.subscriber',[
            'subcriber' => $subcriber,
        ]);
    }

    /**
     *store new Subscriber.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeSubscriber(SubscriberRequest $request) {
        try {
            // dd($request->emailSub);
            Subscriber::create([
                'email' => $request->emailSub,
            ]);
            return redirect()->back()->with('subscriber', 'Đăng ký thành công');
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
        }
    }
    public function store(ContactRequest $request) {
        try {
            Subscriber::create([
                'email' => $request->email,
                'name' => $request->name,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            Session::flash('subscriber', 'Gửi liên hệ thành công!');
            return redirect()->route('contact');
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
        }
    }
}
