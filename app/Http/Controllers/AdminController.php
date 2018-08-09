<?php

namespace App\Http\Controllers;

use App\About;
use App\Messeage;
use App\Page;
use App\Service;
use App\Why;
use App\How;
use App\Plan;
use App\Order;
use App\Phone;
use App\Help;
use App\Email;
use App\Title;
use App\Address;
use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    private function br2nl($str) {
        return str_replace("<br />", "", $str);
    }

    public function services(Request $request){

        if($request->isMethod('post')){
            //dd($request);
            /*
                        $validator = Validator::make($input, [
                            'title' => 'required|max:125',
                            'descr' => 'required|max:255'
                        ]);

                        if($validator->fails()){
                            return redirect()->route('admin.services')->withErrors($validator)->withInput();
                        }*/

            Service::where('id', $request->serviceId)
                ->update([
                    'title'=> $request->serviceTitle,
                    'descr'=> $request->serviceDescr
                ]);
        }

        $data = ['services' => Service::latest()->paginate(1)];

        return view('admin.services', $data);
    }
    public function about(Request $request){

        if($request->isMethod('post')){

            About::where('id', 1)
                ->update([
                    'text'=> nl2br($request->aboutText)
                ]);

            if($request->hasFile('aboutImg')) {
                $file = $request->file('aboutImg');
                $file->move(public_path() . '/img', '3.jpg');
            }
        }

        $about = About::find(1);
        $data = ['about'=> $this->br2nl($about->text)];
        return view('admin.about', $data);
    }

    public function why(Request $request){
        if($request->isMethod('post')){
            //dd($request);

            Why::where('id', $request->whyId)
                ->update([
                    'text'=> $request->whyText,
                    'title'=> $request->whyTitle
                ]);
        }

        $data = ['why'=> Why::paginate(1)];

        return view('admin.why', $data);
    }

    public function how(Request $request){
        if($request->isMethod('post')){
            //dd($request);
            How::where('id', $request->howId)
                ->update([
                    'text'=> $request->howText
                ]);
        }

        $data = ['how'=> How::paginate(1)];
        return view('admin.how', $data);
    }

    public function plansAdd(Request $request){
        $data = [
            'resultat' => 0,
            'errorText' => '<strong>Oh snap!</strong> Change a few things up and try submitting again.',
            'complateText' => '<strong>Well done!</strong> Plan added'
        ];

        if($request->isMethod('post')) {

            if(Plan::create([
                'title' => $request->planTitle,
                'text' => $request->planText,
                'display' => ($request->planDisplay == null) ? 0 : 1,
                'price' => $request->planPrice
            ])){
                $data['resultat'] = 1;
            } else {
                $data['resultat'] = 2;
            }
        }


        return view('admin.plansAdd', $data);
    }

    public function plansEdit(Request $request){

        if($request->isMethod('post')){
            Plan::where('id', $request->planId)->update([
                'title' => $request->planTitle,
                'text' => $request->planText,
                'display' => ($request->planDisplay == null) ? 0 : 1,
                'price' => $request->planPrice
            ]);
        }

        $data = [
            'plans'=>Plan::latest()->paginate(1)
        ];

        return view('admin.plansEdit', $data);
    }

    public function contactEdit(Request $request){

        if($request->isMethod('post')){
            switch ($request->type){
                case '1':
                    Phone::where('id', $request->phoneId)->update([
                        'title'=>$request->phoneTitle,
                        'number'=>$request->phoneNumber
                    ]);
                    break;
                case '2':
                    Email::where('id', $request->emailId)->update([
                        'title'=>$request->emailTitle
                    ]);
                    break;
                case '3':
                    Address::where('id', $request->addressId)->update([
                        'title'=>$request->addressTitle
                    ]);
                    break;
            }
        }

        $data = [
            'phones' => Phone::all(),
            'email' => Email::all(),
            'address' => Address::all()
        ];



        return view('admin.contact', $data);
    }

    public function message(Request $request){
        if($request->isMethod('post')){

        }

        $data = ['messages'=>Messeage::latest()->paginate(10)];

        return view('admin.message', $data);
    }

    public function title(Request $request){
        if($request->isMethod('post')){
            Title::where('id', 1)
                ->update([
                    'title'=> $request->title
                ]);
        }

        $data = ['title'=> Title::find(1)];
        return view('admin.title', $data);
    }

    public function order(){

        $data = [ 'orders' => Order::latest()->paginate(1) ];

        return view('admin.order', $data);
    }

    public function help(Request $request){
        if($request->isMethod('post')){
            //dd($request);

            Help::where('id', $request->helpId)
                ->update([
                    'text'=> $request->helpText
                ]);
        }

        $data = ['help'=> Help::paginate(1)];
        return view('admin.help', $data);
    }

    public function pagesSupport(Request $request){
        if($request->isMethod('post')){
            //dd($request);

            Page::where('alias', 'support')
                ->update([
                    'text'=> $request->pageText
                ]);
        }

        $data = ['page'=> Page::find(1)];
        return view('admin.pages', $data);
    }
    public function pagesSales(Request $request){
        if($request->isMethod('post')){
            //dd($request);

            Page::where('alias', 'sales')
                ->update([
                    'text'=> $request->pageText
                ]);
        }

        $data = ['page'=> Page::find(2)];
        return view('admin.pages', $data);
    }
    public function pagesMarketing(Request $request){
        if($request->isMethod('post')){
            //dd($request);

            Page::where('alias', 'marketing')
                ->update([
                    'text'=> $request->pageText
                ]);
        }

        $data = ['page'=> Page::find(3)];
        return view('admin.pages', $data);
    }
}

