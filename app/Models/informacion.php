<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class informacion extends Model
{

    protected $table = 'informacions';
    protected $fillable = ['interesado', 'name', 'apellido', 'compania', 'cargo', 'email', 'telefono', 'message', 'checkedInformacion'];

    public function getInformacion()
    {
        return $this->all();
    }

    public function getInformacionById($id)
    {
        return $this->find($id);
    }

    public function createInformacion($data)
    {
        return $this->create($data);
    }

    public function updateInformacion($data, $id)
    {
        return $this->where('id', $id)->update($data);
    }

    public function deleteInformacion($id)
    {
        return $this->where('id', $id)->delete();
    }
}
