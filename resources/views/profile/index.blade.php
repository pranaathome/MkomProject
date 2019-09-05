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
       </table>

       <div class="button-box">
            <a href="{{ route('profile.edit', Auth::user()->id) }}" class="btn btn-success btn-sm">Edit Profil</a>
        </div>
   </div>
@stop
