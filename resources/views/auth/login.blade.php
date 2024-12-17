<x-index-App>

      <div class="in" id="in">
        <h3 class="text-center">Get into your Account</h3>
        <br />
        @if ($errors->any())
          <div class="alert alert-danger">
            
            <ul>
            @foreach($errors->all() as $item)
              <li>{{ $item }}</li>
              @endforeach
            </ul>
              
          </div>
        @endif

        <form action="login" method="post">
            @csrf
          <div class="col-12">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" id="email" />
          </div>
          <div class="col-12">
            <label for="password">Password</label>
            <input type="password" name="password"  id="password" />
          </div>
          <div class="remember">
            <input type="checkbox" id="rem" />
            <label for="rem">Remember me for 30 days</label>
            <a href="#">Forget Password?</a>
          </div>
          <button type="submit" class="submit-btn">Login</button>
        </form>


        @if (session('failed'))
            <p class="text-danger">{{ session('failed') }}</p>

        @endif
      </div>

</x-index-App>