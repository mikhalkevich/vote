@extends('layouts.app')
@section('content')
<table class="table table-bordered table-striped" width="100%">
    <tbody><tr>
        <th>&nbsp;</th>
        <td align="center"><img src="http://localhost/media/candidats/babariko.jpeg" width="150px"></td>
        <td align="center"><img src="http://localhost/media/candidats/lukashenko.jpeg" width="150px"></td>
        <td align="center"><img src="http://localhost/media/candidats/cepkalo.jpeg" width="150px"></td>
        <td align="center"><img src="http://localhost/media/candidats/cihanovskaya.jpeg" width="150px"></td>
        <td align="center"><img src="http://localhost/media/candidats/cherechen.jpeg" width="150px"></td>
        <td align="center"><img src="http://localhost/media/candidats/dmitriev.jpeg" width="150px"></td>
        <td align="center"><img src="http://localhost/media/candidats/kanopackaya.jpeg" width="150px"></td>
    </tr>
    <tr>
        <th>Имя Фамилия</th>
        <td>Виктор Бабарико</td>
        <td>Александр Лукашенко</td>
        <td>Валерий Цепкало</td>
        <td>Светлана Тихановская</td>
        <td>Сергей Черечень</td>
        <td>Андрей Дмитриев</td>
        <td>Анна Канопацкая</td>
    </tr>
    <tr>
        <th>Вид деятельности</th>
        <td>Бывший председатель Правления ОАО «Белгазпромбанк».</td>
        <td>Политик</td>
        <td>Валерий Цепкало</td>
        <td>Жена блогера</td>
        <td>Сергей Черечень</td>
        <td>Андрей Дмитриев</td>
        <td>Политик</td>
    </tr>
    <tr>
        <th>Отношение к легализации и приватизации</th>
        <td>Положительное, как и ко всему прогрессивному</td>
        <td>Резко отрицательное, вплоть до уголовных преследований</td>
        <td>?</td>
        <td>?</td>
        <td>?</td>
        <td>?</td>
        <td>Скорее всего, отрицательное</td>
    </tr>
    <tr>
        <th>--</th>
        <td><a href="#" class="btn btn-block btn-danger">Поддержать</a></td>
        <td><a href="#" class="btn btn-block btn-danger">Поддержать</a></td>
        <td><a href="#" class="btn btn-block btn-danger">Поддержать</a></td>
        <td><a href="#" class="btn btn-block btn-danger">Поддержать</a></td>
        <td><a href="#" class="btn btn-block btn-danger">Поддержать</a></td>
        <td><a href="#" class="btn btn-block btn-danger">Поддержать</a></td>
        <td><a href="#" class="btn btn-block btn-danger">Поддержать</a></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="7">
            <div id="resizable" style="height: 370px;border:1px solid gray;">
                <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
            </div>
        </td>
    </tr>
    </tbody>
</table>
@endsection
