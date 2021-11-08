@if(isset($datas['education']))
    <strong>{{$datas['education']}}</strong> eğitimine yeni bir kayıt geldi. <br><br>
    Ad & Soyad : {{ $datas['name'] ?? '' }}  <br>
    Telefon    : {{ $datas['phone'] ?? '' }} <br>
    Mesaj      : {{ $datas['message'] ?? '' }} <br>
    Eğitim     : {{ $datas['education'] ?? '' }} <br>
@else
    {{$datas['subject']}}ndan gelen yeni bir bildiriminiz var. <br><br>
    Ad & Soyad : {{ $datas['name'] ?? '' }}  <br>
    E-Mail     : {{ $datas['email'] ?? '' }} <br>
    Mesaj      : {{ $datas['message'] ?? '' }} <br>
@endif
