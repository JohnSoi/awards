<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;

class ExpertsSheetImport implements ToCollection
{
    public function getEmail($str = '')
    {
        if ($str) {
            $str = trim(str_replace(["\r", "\n"], ' ', $str));
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

    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row) {
            if ($key < 2 || trim($row[0]) == '' || trim($row[1]) == '') continue;

            $contacts = [];

            if (trim($row[5]) != '') {
                $contacts[] = trim($row[5]);
            }

            if (trim($row[6]) != '') {
                $contacts[] = trim($row[6]);
            }

            if (trim($row[7]) != '') {
                $contacts[] = trim($row[7]);
            }

            $email = $this->getEmail($row[4]);
            if (!$email) {
                $email = 'expert_empty_' . Str::random(8) . '@rc-awards.ru';
            }

            $email_exists = User::where('email', $email)->count();
            if ($email_exists) {
                $email = 'expert_exists_' . $email . '_' . Str::random(8) . '@rc-awards.ru';
            }

            $user = User::create([
                'name' => trim($row[1]),
                'position' => trim($row[2]),
                'phone' => trim($row[3]),
                'email' => $email,
                'contacts' => implode(', ', $contacts),
                'password' => Hash::make(Str::random(8))
            ]);

            $user->group_id = 3;
            $user->save();
        }
    }
}
