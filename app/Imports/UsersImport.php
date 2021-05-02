<?php
namespace App\Imports;
   
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
    
class UsersImport implements ToModel, WithValidation,WithHeadingRow
{

 
	 use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
public function rules(): array
{
    return [
        'username' => 'unique:users,username'
    ];

}

public function customValidationMessages()
{
    return [
        'username.unique' => 'username must Be unique...!',
    ];
} 
    public function model(array $row)
    {
        return new User([
            'name'     => $row['name'],
            'username'    => $row['username'], 
            
        ]);
    }
}