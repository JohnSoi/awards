<?php

use App\Classes\Files;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Container\Container;

function getHtmlArray($array)
{
    $result = [];

    $array_keys = array_keys($array);

    foreach ($array_keys as $item) {
        if (is_array($array[$item])) {
            $isNotEmpty = false;

            foreach ($array[$item] as $key => $value) {
                $result[$key][$item] = $value;

                if ($value) {
                    $isNotEmpty = true;
                }
            }

            if (!$isNotEmpty) {
                unset($result[$key]);
            }
        } else {
            $result[$item] = $array[$item];
        }
    }

    return $result ? $result : null;
}

function PaginateCollection($paginate, $collection, $options = [])
{
    $collection = str_replace('/', '', '\App\Http\Resources\/' . $collection);
    $items = $collection::collection($paginate->items());

    if (isset($options['keyBy'])) {
        $items = $items->keyBy($options['keyBy']);
    }

    $currentPage = Paginator::resolveCurrentPage('page');
    $total = $paginate->total();
    $perPage = $paginate->perPage();

    return Container::getInstance()->makeWith(LengthAwarePaginator::class, compact(
        'items',
        'total',
        'perPage',
        'currentPage'
    ));
}

function ThumbName($thumb)
{
    return $thumb[0] . 'x' . (isset($thumb[1]) ? $thumb[1] : $thumb[0]);
}

function ImageUrl($url, $thumb = false, $app_url = false, $default = null)
{
    if (is_array($url)) {
        $url = $url[0];
    }

    if ($thumb && $url) {
        $name = explode('/', $url);
        $name = end($name);
    }

    $result = $url
        ? ($thumb
            ? ($app_url ? config('app.url') : '') . str_replace($name, $thumb . '_' . $name, $url)
            : ($app_url ? config('app.url') : '') . $url)
        : null;

    return $result ? $result : $default;
}

function originalName($str, $default = false)
{
    $originalName = Files::originalName($str);

    return $originalName ? $originalName : $default;
}

function NumberWord($value, $words, $show = false)
{
    $num = $value % 100;

    if ($num > 19) {
        $num = $num % 10;
    }

    $out = $show ? $value . ' ' : '';

    switch ($num) {
        case 1:
            $out .= $words[0];
            break;
        case 2:
        case 3:
        case 4:
            $out .= $words[1];
            break;
        default:
            $out .= $words[2];
            break;
    }

    return $out;
}

function toJson($data, $fields, $toJson = true)
{
    $result = [];

    foreach ($fields as $key => $field) {
        if (is_array($field)) {
            $result[$key] = toJson($data[$key], $field, false);
        } else {
            $result[$field] = isset($data[$field]) ? $data[$field] : '';
        }
    }

    return $toJson ? collect($result)->toJson() : $result;
}
