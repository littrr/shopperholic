<form action="{{ $brand->exists ? route('admin.brands.update', compact($brand)) : route('admin.brands.store') }}" method="post">
    {{csrf_field()}}
    @if ($brand->exists)
        <input type="hidden" name="_method" value="put">
    @endif
    <div class="col-xs-12 col-sm-6">
        <div class="form-group required">
            <label for="BrandName">Brand Name <sup>*</sup> </label>
            <input required="" type="text" class="form-control" name="name" placeholder="Brand Name">
        </div>
    </div>
    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Save</button>
    </div>
</form>