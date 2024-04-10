<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body {
        background: #F5F5F5;
    }

    @font-face {
        font-family: 'Gilroy';
        src: url({{ storage_path('fonts/Gilroy-Regular.ttf') }}) format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @page {
        margin: 0;
        margin-top: 80px !important;
        padding: 0;
        font-family: 'Gilroy';
    }

    body {
        background: #F5F5F5;
        background-size: contain;
        font-size: 20px;
        font-family: 'Gilroy';
    }

    .border-radius {
        border-radius: 10px;
    }

    .spacing-0 {
        padding: 0;
        margin: 0;
    }


    header {
        height: 80px;
        background: #0e0e0e;
        /*background: transparent;*/
        color: #fff;
        /*position: fixed;*/
        /*top: -80px;*/
        left: 0;
        right: 0;
    }

    .w-100 {
        width: 100%;
    }

    .w-90 {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }

    .w-50 {
        width: 50%;
    }

    .content-header {
        margin-top: 25px;
    }

    .hr {
        height: 1px;
        border-top: 1px solid #ECECEC;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .text-right {
        text-align: right;
    }

    .valign-top {
        vertical-align: top;
    }

    .header-red {
        color: #b35f55;
    }

    .text-red {
        color: #D6514A;
    }

    .header-p {
        font-size: 13px;
        line-height: 10px;
        font-weight: 500;
    }

    .top-requisite {
        line-height: 12px;
        font-size: 13px
    }

    .main-content {
        margin-top: 10px;
    }

    .title {
        font-size: 30px;
        font-weight: 500;
    }

    .text-regular {
        font-size: 13px;
        font-weight: 500;
        line-height: 13px;
        text-align: justify;
    }

    .shadow-l {
        border: 0.5px solid #ECECEC
        /*-webkit-box-shadow: 0px 10px 33px 0px rgba(0, 0, 0, 0.1);*/
        /*-moz-box-shadow: 0px 10px 33px 0px rgba(0, 0, 0, 0.1);*/
        /*box-shadow: 0px 10px 33px 0px rgba(0, 0, 0, 0.1);*/
    }

    .bg-white {
        background: #fff;
    }

    .price-info {
        border-radius: 10px;
        margin-top: 20px;
        padding: 20px;
    }

    .price-info-p {
        line-height: 12px;
        font-size: 13px;
    }

    .lot_info-main_image {
        height: 200px;
        width: auto;
        border-radius: 10px;
    }

    .text-center {
        text-align: center;
    }

    .border-red {
        border: 1px solid #D6514A
    }

    .lot-info-p {
        font-size: 13px;
        line-height: 13px;
        font-weight: 500;
    }

    .zebra tr td {
        padding: 10px;
        font-size: 13px;
    }

    .zebra tr:nth-child(2n+1) {
        background: #F4F6F9;
    }

    .zebra tr:nth-child(2n) td:first-child {
        border-radius: 5px 0 0 5px;
    }

    .zebra tr:nth-child(2n) td:last-child {
        border-radius: 0 5px 5px 0;
    }

    .page-break {
        page-break-after: always;
    }

    .image-wrapper {
        text-align: center;
        width: 49%;
        display: inline-block;
        margin-bottom: 5px;
    }

    .photo-max-height {
        /*max-width: auto;*/
        width: 100%;
        height: auto;
        max-height: 300px;
    }

    .text-sm{
        font-size: 12px;
    }

    .leading-0{
        margin-top: -12px;
    }

</style>
<body>

<div class="w-90 main-content">
    <div>
        <p class="spacing-0 top-requisite">ООО “МИГАС”</p>
        <p class="spacing-0 top-requisite">109052, Москва, Смирновская, 25, стр. 16, 4 этаж, офис 30</p>
    </div>

    <h2 class="title" style="line-height: 30px">Предложение о выкупе ГО ТС</h2>

    <div style="margin-top: -20px;">
        <p class="text-regular">Уважаемые Господа, по результатам котировки на сайте тест.com, максимальное
            предложение за ГО ТС составило  руб.</b>, контакты
            покупателя
            предоставляются по запросу при
            готовности
            ГО ТС к продаже.</p>
        <p class="text-regular" style="margin-top: 10px;">Срок действия предложения покупателя <b>45 рабочих дней</b> с
            момента
            окончания торгов до <b></b>, при условии соответствия
            лота заявленному состоянию.
        </p>
    </div>

    {{--    <div class="shadow-l price-info">--}}
    <div class="shadow-l price-info bg-white" style="background: #fff">
        <table class="w-100">
            <tr>
                <td class="w-50">
                    <h2 style="font-size: 20px">ЛОТ № тест</h2>

                    <div style="margin-top: 25px;">
                        <p class="price-info-p spacing-0">Марка/Модель —
                            <b>тест</b></p>
                        <p class="price-info-p spacing-0">Регион — <b>тест</b></p>
                        <p class="price-info-p spacing-0">Город — <b>тест</b></p>
                        <p class="price-info-p spacing-0">Год выпуска — <b>тест</b></p>
                        <p class="price-info-p spacing-0">Номер дела —
                            <b>тест</b></p>
                        <p class="price-info-p spacing-0">Начало торгов —
                            <b>тест</b></p>
                        <p class="price-info-p spacing-0">Окончание торгов —
                            <b>тест</b></p>
                    </div>
                </td>
                <td class="w-50 text-center">
                </td>
            </tr>
        </table>
        <div class="hr"></div>
        <table class="w-100">
            <tr>
                <td class="w-50">
                    <p class="spacing-0 price-info-p">Максимальное предложение</p>
                    <p class="spacing-0 "
                       style="font-size: 20px;font-weight: 500">тест
                        руб.</p>
                </td>
                <td class="w-50">
                    <p class="spacing-0 price-info-p">Поступило предложений</p>
                    <p class="spacing-0 " style="font-size: 20px;font-weight: 500">тест</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="border-red lot-info-warning border-radius"
         style="margin-top: 40px;padding-top: 10px;padding-bottom: 10px;">
        <table class="w-100">
            <tr>
                <td style="width: 15%; text-align: center;">
                </td>
                <td>
                    <p class="text-red lot-info-p spacing-0">О готовности ТС к продаже вам необходимо сообщить:</p>

                    <p class="spacing-0 lot-info-p text-red" style="margin-top: 10px;">Москва, Смирновская, 25, стр. 16,
                        4 этаж, офис 30</p>
                </td>
            </tr>
        </table>
    </div>

    <p class="spacing-0 lot-info-p" style="margin-top: 25px;">
        Получить реквизиты покупателя Вы можете на странице завершенных лотов, в разделе ставки по лоту, предвариетльно
        подтвердив готовность ТС к продаже.
    </p>

    <div>
        <table class="w-100">
            <tr>
                <td class="w-50" style="vertical-align: middle">
                    <p class="spacing-0 lot-info-p">Генеральный директор ООО “МИГАС”</p>
                </td>
                <td class="w-50" style="vertical-align: center;text-align: right;">
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
