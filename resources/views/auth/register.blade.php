<x-index-App>
    <div class="register-content">
        <div class="reg" id="reg">
            <h3 class="text-center">Fill out your identity</h3>
            <br />
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="col-12">
                    <label for="nama">Fullname</label>
                    <input type="text" name="name" id="name" class="form-control mb-2" required>
                </div>
                <div class="col-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-2" required>
                </div>
                <div class="col-12">
                    <label for="pw">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-2" required>
                </div>
                <div class="col-12">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="form-control mb-2" required>
                </div>
                <div class="col-12">
                    <label for="role">Role:</label>
                    <select id="role" name="role" class="form-control mb-2" required>
                        <option value="">Pilih Role</option>
                        <option value="consultant">Consultant</option>
                        <option value="user">Rakyat Sipil</option>
                    </select>
                </div>
                {{-- <div class="check">
                    <input type="checkbox" id="cek" />
                    <label for="cek">By accepting this you have agreed our privacy and policy
                        guidelines</label>
                </div> --}}
                <button type="submit" id="submit-reg" class="submit-btn">
                    Submit
                </button>
                <div class="card-footer text-center" style="margin-top: 20px">
                    <a href="login" id="haveAcc">Already have an account?</a>
                </div>
            </form>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    </div>


</x-index-App>
