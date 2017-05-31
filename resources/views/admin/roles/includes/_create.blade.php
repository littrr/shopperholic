<form action="{{ $role->exists ? route('admin.roles.update', ['role' => $role]) : route('admin.roles.store') }}" method="post">
    {{csrf_field()}}
    @if ($role->exists)
        <input type="hidden" name="_method" value="put">
    @endif
    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="block-title-2"> Add Role </h2>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group required">
            <label for="CategoryName">Display Name <sup>*</sup> </label>
            <input required="" type="text" value="{{ old('display_name', $role->display_name) }}"
                   class="form-control" name="display_name" placeholder="Eg. Product Manager">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group required">
                <label for="RoleDescription">Description</label>
                <input type="text" value="{{ old('description', $role->description) }}"
                       class="form-control" name="description" placeholder="Eg. User create and edit products">
            </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="block-title-2"> Add Permissions </h2>
    </div>

    {{-- Permissions --}}
    @foreach($permissions as $groupName => $permission)
    <div class="col-md-6 col-lg-6 col-sm-12">
        <section class="panel panel-default m-b-lg">
            <header class="panel-heading font-bold"><strong>{{ $groupName }}</strong></header>
            <table class="table table-striped m-t-md">
                <thead>
                <tr>
                    <th>Permission</th>
                    <th>Allow</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permission as $perm)
                    <tr>
                        <td>
                            <label for="{{$perm->name}}" data-toggle="tooltip"
                                   title="{{$perm->description}}">
                                {{$perm->display_name}}
                            </label>
                        </td>
                        <td>
                            <input type="checkbox" id="{{$perm->name}}" name="permissions[]"
                                   data-tooltip="{{$perm->description}}"
                                   {{isset($addedPermissions) && in_array($perm->name, $addedPermissions) ? 'checked' : ''}}
                                   value="{{$perm->name}}"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
    @endforeach
    {{-- End of permissions --}}

    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Save</button>
    </div>
</form>