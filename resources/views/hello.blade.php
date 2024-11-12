<h1>Hello! I am data</h1>
@foreach ($users as $user)
    <h1>Hello I am {{$user->name}}</h1>
    <p>Email: {{$user->email}}</p>
@endforeach