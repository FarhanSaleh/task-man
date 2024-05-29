<div class="sticky top-0 z-50 justify-end border-b navbar bg-base-100">
    <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="m-1 btn">{{Auth::user()->name}}</div>
        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="/profile">Profile</a></li>
          <li class="font-semibold text-red-600">
            <form action="{{route('logout')}}" method="post" class="flex">
                @csrf
                <button type="submit" class="w-full text-left">Logout</button>
            </form>
          </li>
        </ul>
    </div>
</div>
