<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Contact;
use App\Device;
class ControllerContact extends Controller
{
    /**
    *@return view start
    */
    public function start()
    {
        $contact = Contact::all();
        $device = Device::all();
        foreach ($contact as $value1){
            foreach ($device as $value2) {
                if($value1->id_device==$value2->id){
                    $value1->id_device=$value2->description;
                }   
            }        
        }
        
        return view("start",['contacts'=>$contact]);
    }
    public function createContact()
    {
        $device = Device::all();
        return view("contact",['title'=>'Create new contact','names'=>'','surnames'=>'','typeOfDevice'=>'','contactNumber'=>'','email'=>'','address'=>'',"valueButton"=>'Add','deviceList'=>$device,'route'=>'create','id'=>'']);
    }

    public function deleteContact()
    {
        $contact = Contact::all();
        return view('contact_selection',['title'=>'Delete contact','contacts'=>$contact,"valueButton"=>'Delete','route'=>'delete']);
    }
    public function updateContact()
    {
        $contact = Contact::all();
        return view('contact_selection',['title'=>'Update contact','contacts'=>$contact,"valueButton"=>'Update','route'=>'update1']);
    }
    public function delete(Request $request)
    {
        $contact = Contact::find((int) $request->input('contact'));   
        try {
            $contact->delete();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('status', 'Failed to delete contact');
        }
        return $this->start();
    }

    public function create(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'surname' => 'required',
        'device' => 'required',
        'contact_number' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        ]);
        $contact = new contact;
        $contact->name=$request->input('name');
        $contact->surname=$request->input('surname');
        $contact->id_device=$request->input('device');
        $contact->contact_number=$request->input('contact_number');
        $contact->email=$request->input('email');
        $contact->address=$request->input('address');
        try {
            $contact->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('status', 'Failed to save contact');
        }
    	return $this->start();
    }

    public function update1(Request $request)
    {
        $contact = Contact::find($request->input('contact'));
        $device = Device::all();
        return view("contact",['title'=>'Modify contact '.$contact->id,'names'=>$contact->name,'surnames'=>$contact->surname,'typeOfDevice'=> $contact->id_device,'contactNumber'=>$contact->contact_number,'email'=>$contact->email,'address'=>$contact->address,"valueButton"=>'update','route'=>'update2','deviceList'=>$device,'id'=>$contact->id]);
    }


    public function update2(Request $request,$id)
    {
        $this->validate($request, [
        'name' => 'required',
        'surname' => 'required',
        'device' => 'required',
        'contact_number' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        ]);
        $contact = Contact::find($id);
        $contact->name=$request->input('name');
        $contact->surname=$request->input('surname');
        $contact->id_device=$request->input('device');
        $contact->contact_number=$request->input('contact_number');
        $contact->email=$request->input('email');
        $contact->address=$request->input('address');
        try {
            $contact->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('status', 'Failed to update contact');
        }
        return $this->start();
    }
    
}
