<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\App;

trait Translate
{
    public function __($originFieldName)
    {
        $locale = App::getLocale() ?? 'ru';
        if ($locale === 'en') {
            $fieldName = $originFieldName . '_en';
        }else{
            $fieldName = $originFieldName;
        }
        if ($locale === 'en' && empty($this->$fieldName)) {
            return $this->$originFieldName;
        }
        return $this->$fieldName;
    }
}