<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ContactController = Contact::all();
		return View::make('administrator/viewcontact', compact('ContactController'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
 	{
 		$rules = array (
 		'nama'  =>  'required',
		'email'  =>  'required'
 		);
 		$validation = Validator::make(Input::all(), $rules);

 		if ($validation->fails())
 		{
 			return Redirect::to('/')->withErrors($validation)->withInput();
 		}
 		else
 		{
 			$contact = new Contact;
 								$contact->name = Input::get('nama');
 								$contact->email = Input::get('email');
								$contact->telp = Input::get('telp');
 								$contact->pesan = Input::get('pesan');
 								$contact->save();

 								$data = array(
										'name' => $contact->name,
										'email' => $contact->email,
										'telp' => $contact->telp,
										'pesan' => $contact->pesan,
								);

										Mail::send('emails.message', $data, function($message) {
											$message->from('pwluts7792@gmail.com', 'Data Contact Form');
											$message->to(Input::get('email'), Input::get('nama'))->cc('pwluts7792@gmail.com')->subject('Data Contact Form Has Been Delivered');
										});


 			return Redirect::to('/');
 		}
 	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			News::find($id)->delete();
			return Redirect::to('administrator/viewpost');
	}
}
