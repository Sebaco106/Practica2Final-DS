<?php

namespace App\Http\Requests\EspeciesController;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class EspeciesControllerUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [
            '' => '',
        ];
    }

    /**
     * messages
     * @author PlantUmlGen
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => 'The :attribute is required.',
            'max' => 'The :attribute is very long.',
            'unique' => 'The :attribute has already been taken.',
            'exists' => 'Could not find :attribute',
        ];
    }

    /**
     * response
     * @author PlantUmlGen
     * @return JsonResponse
     */
    public function response(): JsonResponse
    {
        $params = $this->input();
        $especiesId = $this->route('Especies');
        $especies = Especies::find($especiesId);

        if (!is_null($especies)) {
            $especies->update($params);
        }

        return response()->json($especies);
    }
}
