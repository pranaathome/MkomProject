@extends('template')

@section('main')
    <div id="user">
        <h2>Profil</h2>

        <table class="table table-striped">
            <tr>
                <th>Username</th>
                <td>{{ Auth::user()->username }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <th>Level</th>
                <td>{{ Auth::user()->level }}</td>
            </tr>
       </table>
   </div>
@stop
