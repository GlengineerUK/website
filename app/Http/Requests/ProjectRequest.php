<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => [
                'required',
                Rule::unique('projects')->ignore($this->project->id ?? 0)
            ],
            'summary' => 'required',
            'content' => 'required',
            'link_url' => 'nullable',
            'image_url' => 'nullable',
            'new_image' => 'file',
        ];
    }
}
