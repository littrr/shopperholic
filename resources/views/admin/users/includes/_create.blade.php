<form action="{{ $user->exists ? route('admin.users.update', ['user' => $user]) : route('admin.users.store') }}" method="post">
    {{csrf_field()}}
    @if ($user->exists)
        <input type="hidden" name="_method" value="put">
    @endif

    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="block-title-2"> User Details </h2>
    </div>

    <div class="col-xs-12 col-sm-6">
        <div class="form-group required">
            <label for="UserName">Full Name <sup>*</sup> </label>
            <input required="" type="text" value="{{ old('name', $user->name) }}" class="form-control" name="name" placeholder="Full Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="form-group required">
            <label for="UserName">Email <sup>*</sup> </label>
            <input required="" type="email" value="{{ old('email', $user->email) }}" class="form-control" name="email" placeholder="Email">
        </div>
    </div>

    <div class="col-xs-12 col-sm-6">
        <div class="form-group required">
            <label for="ContactNumber">Phone Number <sup>*</sup> </label>
            <input required="" type="text" value="{{ old('contact_number', $user->contact_number) }}" class="form-control" name="contact_number" placeholder="Phone Number">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="block-title-2"> Roles </h2>
    </div>
    <div class="col-md-12" style="margin-bottom: 2%">
        <div class="row">
            @foreach($roles as $role)
            <div class="col-sm-3">
                <label class="checkbox">
                    <input type="checkbox" name="roles[]" id="roles" class="role-input" value="{{ $role->name }}"
                     {{in_array($role->id, $user->roles->pluck('id')->all()) ? 'checked' : ''}}><i></i>{{ $role->display_name }}
                </label>
            </div>
            @endforeach
        </div>
    </div>

    @if (!$user->exists)
    <div class="col-md-12">
        <p class="font-bold">NB: A password reset link will be sent to this user via
            email to guide him/her setup a password.</p>
    </div>
    @endif
    <div class="col-lg-12 col-md-12 col-sm-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Save</button>
    </div>
</form>