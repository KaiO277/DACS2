<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhongRequest extends FormRequest
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
            'txtTenKS'=>'required',
            // 'txtLoaiPhong'=>'required',
            'txtGiaPhong'=>'required',
            'txtDiachi'=>'required',
            'txtSoDT'=>'required',
            'txtImage'=>'image'
        ];
    }

    public function messages()
    {
        return [
            'txtTenKS.required'=>'Vui lòng nhập tên Khách Sạn!',
            // 'txtLoaiPhong.required'=>'Vui lòng nhập loại phòng',
            'txtGiaPhong.required'=>'Vui lòng nhập Giá Phòng',
            'txtDiachi.required'=>'Vui lòng nhập Địa Chỉ',
            'txtSoDT.required'=>'Vui lòng nhập Số điện thoại',
            'txtImage.image'=>'Vui lòng chọn tệp ảnh'
        ];
    }
}
