<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category_id' => 'required',
            'image' => 'required|image|file|max:1024'
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama produk harus diisi',
            'name.max' => 'Nama produk tidak boleh lebih dari 255 karakter',
            'price.required' => 'Harga produk harus diisi',
            'price.integer' => 'Harga produk harus berupa angka',
            'category_id.required' => 'Kategori produk harus diisi',
            'image.required' => 'Gambar produk harus diisi',
            'image.image' => 'Gambar produk harus berupa gambar',
            'image.file' => 'Gambar produk harus berupa file',
            'image.max' => 'Gambar produk tidak boleh lebih dari 1MB'
        ];
    }


    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */

    public function attributes(): array
    {
        return [
            'name' => 'Nama produk',
            'price' => 'Harga produk',
            'category_id' => 'Kategori produk',
            'image' => 'Gambar produk'
        ];
    }
}
