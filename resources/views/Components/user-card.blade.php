<div class="card bg-base-100 shadow-xl">
    <figure class="px-10 pt-10">
        <img
            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
            alt="Shoes"
            class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
        <h2 class="card-title">{{$user->name}}</h2>
        <p>User ID: {{$user->id}}</p>
        <p>Email: {{$user->email}}</p>
        <div class="card-actions">
            <a href="{{ url('/user/profile/' . $user->id) }}" class="btn btn-primary">View Details</a>
        </div>
    </div>
</div>