<?php

namespace App\Http\Classes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Search
{
  public function __construct(Model $model)
  {
    $this->model = $model;
  }

  public function searchOnModels($data)
  {
    // Variables to check wether there is any record or no
    $amountKeys = 0;

    foreach ($data as $key => $value) {

      if ($value !== null) {

        // Find checkbox
        if (is_string($value) and $value == "on") {
          $this->model = $this->model->whereIn($key, [true]);
          $amountKeys += 1;

          // find foreign ids
        } elseif (is_numeric($value) and $key !== 'tel') {
            $this->model = $this->model->where($key, $value);
            $amountKeys += 1;

          // find foreign ids with multiple values to list
        } elseif (is_string($value) and Str::contains($value, ',')) {
            $ids = explode(',', $value);
            $this->model = $this->model->whereIn($key, $ids);
            $amountKeys += 1;

          // find strings
        } else {
            $this->model = $this->model->where($key, 'LIKE', '%'.$value.'%');
            $amountKeys += 1;
        }
      }
    }
    return 
      [
        'numberRegisters' => $this->model, 
        'numberKeys' => $amountKeys
      ];
  }
}