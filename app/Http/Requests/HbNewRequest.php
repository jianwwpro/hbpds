<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class HbNewRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
<<<<<<< HEAD
			'title' => 'required',
        	'content' => 'required',
=======
			'title' => 'required|min:2|max:100',
        	'content' => 'required|min:20|',
>>>>>>> f30f2b82130f38d8b51042975de55bedced0dc7c
		];
	}

}
