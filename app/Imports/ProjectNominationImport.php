<?php

namespace App\Imports;

use App\Models\Nomination;
use App\Models\Project;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;

class ProjectNominationImport implements ToCollection
{
    public function getEmail($str = '')
    {
        $str = trim($str);

        if ($str) {
            $str = str_replace(["\r", "\n"], ' ', $str);
            $str = str_replace(['"'], '', $str);

            $emails = explode(' ', $str);
            $email = null;

            foreach ($emails as $item) {
                $item = trim(rtrim($item, "."));

                if (filter_var($item, FILTER_VALIDATE_EMAIL)) {
                    $email = $item;
                    break;
                }
            }

            return $email;
        }

        return null;
    }

    public function getNomination($str = '')
    {
        $str = trim($str);

        $excel_names = [
            'Креаполис года' => ['Креаполис года (креативный кластер/пространство)'],
            'Управленец года в сфере креативных индустрий' => ['Креативный менеджер года'],
            'Меценат года' => ['Меценат года (вклад в развитие КИ)'],
            'Лучший креативный проект индустриального сектора' => ['Лучший креативный проект из сырьевого бизнеса'],
            'Продюсер года в сфере креативных индустрий' => ['Креативный продюсер года'],
            'Новый культурный код' => ['Новый культурный код (проект о самоидентичности российской креативной отрасли)'],
        ];

        if ($str) {
            foreach ($excel_names as $db_name => $names) {
                if (in_array($str, $names)) {
                    $str = $db_name;
                    break;
                }
            }

            return Nomination::where('name', $str)->first();
        }

        return null;
    }

    public function getSocialUrl($str = '')
    {
        return Str::contains($str, '.') ? trim($str) : null;
    }

    public function addAllowed($str = '')
    {
        $str = trim($str);

        if ($str) {
            return Str::contains($str, 'нет') ? null : true;
        }

        return true;
    }

    public function contentExist($data)
    {
        $result = true;

        foreach (['unique', 'deposit', 'why_worthy', 'name_nominate'] as $key) {
            $string = preg_replace('/[^a-zA-Zа-яА-Я0-9]/ui', '', $data[$key]);

            if (!$string) {
                $result = false;
                break;
            }
        }

        return $result;
    }

    public function getData($key, $row)
    {
        if ($key < 3 || trim($row[4]) == '') return null;

        // $addAllowed = $this->addAllowed($row[11]);
        // if (!$addAllowed) return null;

        $name = trim($row[1]);

        $name_nominate = trim($row[4]);

        // Проверка на существование заявки
        // $project_count = Project::where('name_nominate', $name_nominate)->count();
        // if ($project_count) {
        //     dd('Такой проект уже есть', $row);
        // }

        $nomination = $this->getNomination($row[5]);
        // if (!$nomination && $row[5]) {
        //     dd('nomination', $row);
        // }

        $social_url = $this->getSocialUrl($row[9]);

        $phone_nominee = $social_url ? null : trim($row[9]);

        $email_nominate = $this->getEmail($row[3]);
        // if (!$email_nominate && $row[3]) {
        //     dd('email_nominate', $row);
        // }

        $email_nominee = $this->getEmail($row[10]);
        // if (!$email_nominee && $row[10]) {
        //     dd('email_nominee', $row);
        // }

        $data = [
            // Кто номинирует
            'name' => $name, // ФИО/Организация
            'phone_nominate' => trim($row[2]),
            'email_nominate' => $email_nominate,
            // Сведения о номинанте
            'name_nominate' => $name_nominate, // ФИО/Название проекта
            'nomination_id' => $nomination ? $nomination->id : null,
            'unique' => trim($row[6]),
            'deposit' => trim($row[7]),
            'why_worthy' => trim($row[8]),
            // Контакт для связи
            'phone_nominee' => $phone_nominee,
            'social_url' => $social_url,
            'email_nominee' => $email_nominee,
            // Системное
            'is_import' => 1,
            'is_accept' => 1,
            'is_organization' => $name ? 1 : null
        ];

        $contentExist = $this->contentExist($data);

        return $contentExist ? $data : null;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            $data = $this->getData($key, $row);

            if ($data) {
                $nomination_id = $data['nomination_id'];
                unset($data['nomination_id']);

                if ($nomination_id) {
                    $data_sql = [];
                    foreach ($data as $key => $val) {
                        if ($val) $data_sql[$key] = $val;
                    }

                    $project = Project::where($data_sql)->first();

                    $project->nomination_id = $nomination_id;
                    $project->save();
                }
            }
        }
    }
}
