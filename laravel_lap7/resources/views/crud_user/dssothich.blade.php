@extends('dashboard')
<style>
   .manHinh{
    text-align: center;
    margin: 25px 0px;

   }
   .row{
    text-align: left;

   }
   .chiTiet{
    border: 1px solid #000;
    width: 50%;
    height: 70%;
    margin: auto ;
   }
   .row .col-md-4{
    padding-left: 50px ;
   }
   .row .col-md-8{
    padding-left: 36px ;
    font-weight: bold;
   }
   .chiTiet .chinhSua{
        padding: 15px 15px;
        background: blue;
        margin-bottom: 20px ;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px ;
        margin-left: 390px ;
     display: inline-block;

   }

</style>
@section('content')
<div class="container">
    <div class="row">
        <h4>Profile (1-1)</h4>
        First name : {{$user->profile->first_name}} <br>
        Last name : {{$user->profile->last_name}} <br>
    </div>

    <div class="row">
        <h4>Danh sách sở thích (N-N)</h4>
        <table>
            <thead>
            <th>ID</th>
            <th>Favorite</th>
            </thead>
            <tbody>
            @foreach($user->favorities as $favorite)
                <tr>
                    <td>{{ $favorite->favorite_id }}</td>
                    <td>{{ $favorite->favorite_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
