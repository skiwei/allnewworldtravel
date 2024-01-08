<?php

namespace App\AllNewWorld\Libraries;

class Helper
{

  /**
   * Format number to currency
   * 
   * @param numeric $number
   * @return string
   */
  public static function currency($number)
  {
    if (is_numeric($number)) {
      return '$' . number_format($number, 2);
    }
    return null;
  }

  /**
   * Html &nbsp; spaces
   * 
   * @param int $number
   * @return string
   */
  public static function spaces($number)
  {
    $string = '';

    for ($i = 0; $i < $number; $i++) {
      $string .= '&nbsp;';
    }
    return $string;
  }

  /**
   * Get photo by name
   * 
   * @param string $imageName
   * 
   * @return string
   */
  public static function fullscreenPhoto($imageName)
  {
    return Helper::thumbnailPhoto($imageName);
  }

  /**
   * Get banner by name
   * 
   * @param string $bannerName
   * 
   * @return string
   */
  public static function bannerPhoto($bannerName)
  {
    $array = explode('-', $bannerName);
    $countryCode = $array[0];
    $imageName = $bannerName . '-banner.jpg';
    return 'https://www.sayangholidays.net/images/' . $countryCode . '/banners/' . $imageName;
  }

  /**
   * Get photo by name
   *
   * @param string $imageName
   *
   * @return string
   */
  public static function thumbnailPhoto($imageName)
  {
    $array = explode('-', $imageName);
    $countryCode = $array[0];
    $imageName = $imageName . '-thumbnail.jpg';
    return 'https://www.sayangholidays.net/images/' . $countryCode . '/thumbnails/' . $imageName;
  }

  public static function toDateString($date)
  {
    return $date ? $date->toDateString() : '';
  }

  public static function sanitizePhone($phone)
  {
    return str_replace(['-', '.', ' ', '(', ')'], '', $phone);
  }
}
