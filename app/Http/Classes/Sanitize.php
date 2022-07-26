<?php

namespace App\Http\Classes;

class Sanitize
{
  /**
   * Method to sanitize get inputs wnhen searching for a record
   */
  public function searchSanitize()
  {
    $arrFilters = array(
      'client_status_id' => FILTER_SANITIZE_SPECIAL_CHARS,
      'name' => FILTER_SANITIZE_SPECIAL_CHARS,
      'tel' => FILTER_SANITIZE_NUMBER_INT,
      'brazil_state_id' => array(
          'filter' => FILTER_VALIDATE_INT,
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'brazil_city_id' => array(
          'filter' => FILTER_VALIDATE_INT,
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'service_type_id' => array(
          'filter' => FILTER_VALIDATE_INT,
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'order_status_id' => array(
          'filter' => FILTER_VALIDATE_INT,
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'order_status' => FILTER_SANITIZE_SPECIAL_CHARS,
      'providerName' => FILTER_SANITIZE_SPECIAL_CHARS,
      'contact' => FILTER_SANITIZE_SPECIAL_CHARS,
      'firma_aberta' => array(
          'filter' => FILTER_VALIDATE_BOOL, 
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'cnh' => array(
          'filter' => FILTER_VALIDATE_BOOL, 
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'cpf' => array(
          'filter' => FILTER_VALIDATE_BOOL, 
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'digital_certification' => array(
          'filter' => FILTER_VALIDATE_BOOL, 
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'passport' => array(
          'filter' => FILTER_VALIDATE_BOOL, 
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'country_id' => array(
          'filter' => FILTER_VALIDATE_INT,
          'flags' => FILTER_NULL_ON_FAILURE
      ),
      'city_id' => array(
          'filter' => FILTER_VALIDATE_INT,
          'flags' => FILTER_NULL_ON_FAILURE
      ),
    );

    return filter_input_array(INPUT_GET, $arrFilters);
  }
}