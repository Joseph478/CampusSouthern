<?php

namespace App\Http\Requests\Meeting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMeetingRequest extends FormRequest
{
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
            'meeting_date' => ['required', 'date_format:d-m-Y'],
            'platform' => ['required'],
            'platform_id' => ['required'],
            'platform_password' => ['required'],
            'platform_url' => ['required'],
        ];
    }
}
