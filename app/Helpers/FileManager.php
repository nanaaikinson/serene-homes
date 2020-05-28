<?php

namespace App\Helpers;

class FileManager
{
  public static function uploadFile($file, $name = null, $folder = null)
  {
    $name = $name ? $name : md5(rand());
    $originalFilename = $file->getClientOriginalName();
    $originalFilenameArr = explode('.', $originalFilename);
    $file_ext = end($originalFilenameArr);
    $destination_path = './uploads/' . $folder;
    $fileName = $name . '-' . date('Y-m-d') . '-' . time() . '.' . $file_ext;

    if ($file->move($destination_path, $fileName)) {
      $result = new \stdClass();
      $result->filename = $fileName;

      if (inProduction()) {
        if ($folder) {
          $result->path = env('APP_URL') . "/uploads/{$folder}/{$fileName}";
        } else {
          $result->path = env('APP_URL') . "/uploads/{$fileName}";
        }
      } else {
        if ($folder) {
          $result->path = "/uploads/{$folder}/{$fileName}";
        } else {
          $result->path = "/uploads/{$fileName}";
        }
      }

      return $result;
    }

    return false;
  }

  public static function deleteFile($filename, $folder = null)
  {
    if (inProduction()) {
      if ($folder) {
        $path = public_path() . "/uploads/{$folder}/{$filename}";
        @chmod($path, 0755);
        @unlink($path);
      } else {
        $path = public_path() . "/uploads/{$filename}";
        @chmod($path, 0755);
        @unlink($path);
      }
    } else {
      if ($folder) {
        $path = public_path() . "/uploads/{$folder}/{$filename}";
        @chmod($path, 0755);
        @unlink($path);
      } else {
        $path = public_path() . "/uploads/{$filename}";
        @chmod($path, 0755);
        @unlink($path);
      }
    }
  }
}
