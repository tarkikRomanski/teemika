<?php

namespace App\Http\Controllers;

use App\Service;
use App\About;
use App\Why;
use App\Phone;
use App\Email;
use App\Address;
use App\How;
use App\Help;
use App\Plan;
use App\Messeage;
use App\Title;
use App\Type;
use App\Page;
use App\Order;
use Mail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request){

        if($request->isMethod('post')){

            $messages = [
                'required' => 'Field :attribute required',
                'email' => 'Wrong email'
            ];

            $this->validate($request, [
                'userName' => 'required',
                'userEmail' => 'required|email'
            ], $messages);

            $data = $request->all();
            //mail
            Mail::send('message', ['data'=>$data], function ($message) use ($data){

                $mail_admin = env('MAIL_ADMIN');

                $message->from($data['userEmail'], $data['userName']);
                $message->to($mail_admin)->subject('Message');

            });

            $result = Messeage::create([
                'name' => $request->userName,
                'email' => $request->userEmail,
                'site' => $request->userSite,
                'text' => $request->userText
            ]);

            if($result) {
                return redirect()->back()->with('status', 'Message is send');
                //session(['status'=>'Order is send']);
            }
        }

        $about = About::find(1);
        $title = Title::find(1);

        $data = [
            'about'=> $about['text'],
            'why'=> Why::all(),
            'how'=> How::all(),
            'plans' => Plan::where('display', 1)->get(),
            'phones' => Phone::all(),
            'email' => Email::all(),
            'address' => Address::all(),
            'services' => Service::all(),
            'title' => $title['title'],
            'help' => Help::all(),
            'i' => 1,
            'j' => 1
        ];

        return view('site.index', $data);
    }


    public function support(){

        $data = [
            'phones' => Phone::all(),
            'email' => Email::all(),
            'address' => Address::all(),
            'page' => Page::find(1)
        ];

        return view('site.support', $data);
    }

    public function sales(){

        $data = [
            'phones' => Phone::all(),
            'email' => Email::all(),
            'address' => Address::all(),
            'page' => Page::find(2)
        ];

        return view('site.support', $data);
    }

    public function marketingPage(){

        $data = [
            'phones' => Phone::all(),
            'email' => Email::all(),
            'address' => Address::all(),
            'page' => Page::find(3)
        ];

        return view('site.support', $data);
    }

    public function marketing(){
        return view('site.marketing');
    }

    public function career(){

        $data = [
            'phones' => Phone::all(),
            'email' => Email::all(),
            'address' => Address::all(),
        ];

        return view('site.career', $data);
    }

    public function order(Request $request, $order = null){

        if($request->isMethod('post')){

            $messages = [
              'required' => 'Field :attribute required',
              'email' => 'Wrong email'
            ];

            $this->validate($request, [
                'userName' => 'required',
                'userEmail' => 'required|email'
            ], $messages);

            $data = $request->all();
            //mail
            Mail::send('mail', ['data'=>$data], function ($message) use ($data){

                $mail_admin = env('MAIL_ADMIN');

                $message->from($data['userEmail'], $data['userName']);
                $message->to($mail_admin)->subject('Order');


            });





            //admin
            $type = '<ul>';
            for($i=1; $i<=9; $i++)
                if(isset($data['c'.$i]))
                    $type .= '<li>' . $data['c' . $i] . '</li>';
            $type .= '</ul>';

            $result = Order::create([
                'name' => $data['userName'],
                'email' => $data['userEmail'],
                'site' => $data['userSite'],
                'type' => $type,
                'price' => $data['userPrice'],
                'language' => $data['userLanguage'],
                'core' => $data['userCore'],
                'message' => $data['userMessage']
            ]);

            if($result) {
                return redirect()->back()->with('status', 'Order is send');
                //session(['status'=>'Order is send']);
            }


        }

        $data = [
            'phones' => Phone::all(),
            'email' => Email::all(),
            'address' => Address::all(),
            'types' => Type::all(),
            'order' => $order
        ];

        return view('site.order', $data);
    }
}
