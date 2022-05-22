ФИО/Организация: {{ $request['name'] ?? '' }}<br>
ИНН: {{ $request['inn'] ?? '' }}<br>
Директор: {{ $request['director'] ?? '' }}<br>
Кого номинирует: {{ $request['name_nominate'] ?? '' }}<br>
Вклад: {{ $request['deposit'] ?? '' }}<br>
Уникальность: {{ $request['unique'] ?? '' }}<br>
Почему достоин: {{ $request['why_worthy'] ?? '' }}<br>
География: {{ $request['geography'] ?? '' }}<br>
Телефон номинанта: {{ $request['phone_nominee'] ?? '' }}<br>
Email номинанта: {{ $request['email_nominee'] ?? '' }}<br>
Телефон, кто номинирует: {{ $request['phone_nominate'] ?? '' }}<br>
Email, кто номинирует: {{ $request['email_nominate'] ?? '' }}<br>
Индустрия: {{ $industry->name ?? '' }}<br>
Номинация: {{ $nomination->name ?? '' }}<br>
Ссылка на соц. сеть: {{ $request['social_url'] ?? '' }}<br>