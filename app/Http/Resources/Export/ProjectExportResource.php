<?php

namespace App\Http\Resources\Export;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectExportResource extends JsonResource
{
    public function toArray($request)
    {
        $item = parent::toArray($request);

        $item['industry'] = $this->industry
            ? $this->industry->name
            : '—';

        $item['nomination'] = $this->nomination
            ? $this->nomination->name
            : '—';

        $item['presentation'] = $item['presentation']
            ? config('app.url') . $item['presentation']
            : '—';

        $item['evals_total'] = '—';
        if ($this->evaluations) {
            $total = 0;

            $exceptions = [
                0 => 81783,
                1 => 81784,
                2 => 81785,
                3 => 81786,
                4 => 81787,
                5 => 81788,
                6 => 81789,
                7 => 81790,
                8 => 81791,
                9 => 81792,
                10 => 81793,
                11 => 81794,
                12 => 81795,
                13 => 81796,
                14 => 81797,
                15 => 81798,
                16 => 81799,
                17 => 81800,
                18 => 81801,
                19 => 81802,
                20 => 81803,
                21 => 81804,
                22 => 81805,
                23 => 81806,
                24 => 81807,
                25 => 81808,
                26 => 81809,
                27 => 81810,
                55 => 81838,
                56 => 81839,
                57 => 81840,
                58 => 81841,
                59 => 81842,
                60 => 81843,
                61 => 81844,
                62 => 81845,
                63 => 81846,
                64 => 81847,
                65 => 81848,
                66 => 81849,
                67 => 81850,
                68 => 81851,
                69 => 81852,
                70 => 81853,
            ];

            foreach ($this->evaluations as $evaluation) {
                // if (in_array($evaluation->id, $exceptions)) continue;

                if ($evaluation->completed && $evaluation->total) {
                    $total += $evaluation->total;
                }
            }
            if ($total) {
                $item['evals_total'] = $total;
            }
        }

        // Убрать ненужное
        // unset($item['name']);
        // unset($item['phone_nominate']);
        // unset($item['email_nominate']);

        // unset($item['organization']);
        // unset($item['director']);
        // unset($item['phone_nominate']);
        // unset($item['email_nominate']);
        // unset($item['inn']);

        unset($item['kpp']);

        unset($item['evaluations']);
        unset($item['updated_at']);
        unset($item['id']);
        unset($item['industry_id']);
        unset($item['nomination_id']);
        unset($item['is_form2']);
        unset($item['is_accept']);
        unset($item['is_organization']);
        unset($item['is_top']);
        unset($item['is_import']);
        unset($item['is_winner']);
        unset($item['period_id']);
        unset($item['deleted_at']);
        unset($item['created_at']);
        unset($item['image']);
        unset($item['is_winner']);
        unset($item['shortlist_texts']);
        unset($item['shortlist_image']);
        unset($item['shortlist_video']);

        return $item;
    }
}
