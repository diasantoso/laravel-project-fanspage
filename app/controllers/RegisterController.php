<?php

class RegisterController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$RegisterController = DB::table('users')
            							->join('users', 'users.id', '=', 'users.distributor_user_id')
            							->select('users.*','users.ac')
							            ->get();

		return View::make('admindistributorhome', compact('RegisterController'));
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
			$rules = array(
				'email' => 'required|email',
				'fullname'  => 'required',
				);
				$validation = Validator::make(Input::all(),$rules);
				if ($validation->fails())
				{
					return Redirect::to('storeregister')->withErrors($validation)->withInput();
				}
				else
				{
					$pengguna = new User;
										$pengguna->username = Input::get('username1');
										$pengguna->password = Hash::make(Input::get('password1'));
										$pengguna->role = 'Distributor';
										$pengguna->ac = '0';
										$pengguna->save();

					$userD = new Distributor;
										$userD->distributor_user_id = $pengguna->id;
                    $userD->name = Input::get('name1');
										$userD->location_id = Input::get('location2');
										$userD->address = Input::get('address1');
										$userD->phone = Input::get('phone1');
										$userD->email = Input::get('email1');
										$userD->no_regis = time();
										$userD->save();

										$data = array(
														'name' => "Verification Code",
														'userD'=> $userD->no_regis,
										);

										Mail::send('emails.message', $data, function($message) {
											$message->from('amobi.corner@gmail.com', 'Distributor Activation Account');
											$message->to(Input::get('email1'), Input::get('nama'))
															->subject('Verify your email address');
										});

										return Redirect::to('vercode/'.$pengguna->id);
					//return Redirect::to('/');
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
		$RegisterController=user::find($id);
		return View::make('vercode',compact('RegisterController'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$RegisterController=User::find($id);
		$noregis = Distributor::select('no_regis')->where('distributor_user_id', $id)->first();
		// DB::table('users')
		// ->select ('no_regis')
		// ->where ('user_id', $id)
		// ->first();
				if(Input::get('code1') == $noregis->no_regis)
				{
					$RegisterController=User::find($id);
					$data=Input::except('_token','_method');
					$data['ac'] = '1';
					$RegisterController->update($data);
					return Redirect::to('/');
				}
				else {
					//return $noregis;
					return Redirect::to('vercode/'.$RegisterController->id)->with('pesan_error', 'Kode Verifikasi Salah');
				}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}
}
