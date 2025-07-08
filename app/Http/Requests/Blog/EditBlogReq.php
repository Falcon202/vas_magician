<?php

namespace App\Http\Requests\Blog;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property mixed $name
 * @property mixed $id
 */
class EditBlogReq extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', Rule::exists(Blog::class, 'id')],
            'name' => ['required', 'string', 'max:100', Rule::unique(Blog::class, 'name')->ignore($this->id)],
            'category_id' => ['required', 'integer', Rule::exists(Category::class, 'id')],
            'date' => ['required', 'string', 'regex:/^(0?[1-9]|[12][0-9]|3[01])\. (0?[1-9]|1[0-2])\. \d{4}$/'],
            'location' => ['required', 'string', 'max:100'],
            'location2' => ['required', 'string', 'max:100'],
            'text' => ['required', 'string', 'max:10000'],
            'is_disabled' => ['nullable', 'in:on'],
        ];
    }

    public function messages(): array
    {
        return [
            'id' => 'Vyskytla se chyba, opakujte akci.',

            'name.required' => 'Název příspěvku je povinný.',
            'name.max' => 'Název příspěvku nesmí být delší než 100 znaků.',
            'name.unique' => 'Název příspěvku musí být unikátní.',

            'category_id' => 'Vyberte kategorii ze seznamu.',

            'date' => 'Vyberte datem z kalendáře.',

            'location.required' => 'Lokalita akce je povinný údaj.',
            'location.max' => 'Lokalita akce nesmí být delší než 100 znaků.',

            'location2.required' => 'Místo konání akce je povinný údaj.',
            'location2.max' => 'Místo konání akce nesmí být delší než 100 znaků.',

            'text.required' => 'Text příspěvku je povinný údaj.',
            'text.max' => 'Text příspěvku nesmí být delší než 10 000 znaků.',

            'is_disabled' => 'Zaškrtněte nebo nechte prázdné.',
        ];
    }
}

