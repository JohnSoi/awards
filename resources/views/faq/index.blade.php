@extends('layouts.app')

@section('title', 'Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/faq/index.css') }}">
@endsection

@section('content')

<section class="section section-content section-faq">
    <div class="container">
        <div class="border-top-black"></div>
        <div class="section-faq__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Ответы на частые вопросы:</h2>

            <div class="section-faq__block pt-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h6 class="section-faq__title">Кто может подать заявку на участие в премии?</h6>
                <p class="section-faq__p">
                    Номинировать имеют право члены гильдий Russian Creative Week («Российской креативной недели»), отраслевые организации, ассоциации, союзы и&nbsp;объединения.
                    Физические лица также могут подать заявки, направив обращение в&nbsp;адрес профильных ассоциаций, <b>e-mail: <a class="link" href="mailto:expert@creativityweek.ru">expert@creativityweek.ru</a></b>
                </p>
            </div>
            <div class="section-faq__block wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h6 class="section-faq__title">Возможно подать заявку на участие по нескольким номинациям?</h6>
                <p class="section-faq__p">
                    Да, это возможно, в&nbsp;случае если достижения номинируемого человека или&nbsp;проекта соответствует требованиям номинации.
                </p>
            </div>
            <div class="section-faq__block wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h6 class="section-faq__title">Можем ли мы номинировать на&nbsp;участие в&nbsp;Премии и&nbsp;проект и&nbsp;его автора?</h6>
                <p class="section-faq__p">
                    Да, в соответствующие номинации.
                </p>
            </div>
            <div class="section-faq__block wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h6 class="section-faq__title">Возможно ли внести дополнения или изменения в&nbsp;поданную заявку.</h6>
                <p class="section-faq__p">
                    Нет, такой возможности нет. Вы можете подать заявку повторно, указав всю необходимую информацию.
                    <br><br>
                    И уведомить организаторов на <b>e-mail: <a class="link" href="mailto:support@creativityweek.ru">support@creativityweek.ru</a></b> о&nbsp;необходимости рассматривать актуальную заявку от такой-то даты.
                </p>
            </div>
            <div class="section-faq__block wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h6 class="section-faq__title">Можем ли мы прикрепить ссылку к&nbsp;нашей заявке?</h6>
                <p class="section-faq__p">
                    Да, вы можете дополнить ссылкой текстовое описание заявки
                </p>
            </div>
            <div class="section-faq__block pb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h6 class="section-faq__title">Можем ли мы номинировать свои проекты или&nbsp;только чужие?</h6>
                <p class="section-faq__p">
                    На премию могут быть номинированы как проекты и&nbsp;люди подающей заявку организации/человека, так и&nbsp;проекты, достижения которых эксперт/организация считают достойными в&nbsp;области креативных индустрий
                </p>
            </div>
        </div>
    </div>
</section>

@include('block.contacts')
@endsection