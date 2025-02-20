<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'jenis' => 'required|string',
            'keterangan' => 'required|string',
            'deadline' => 'required',
            'status' => 'required|string',
            'progress' => 'required|integer',
            'masaaktif' => 'required',
            'notes' => 'required|string',
            'photo' => 'image',

        ];
    }
}
