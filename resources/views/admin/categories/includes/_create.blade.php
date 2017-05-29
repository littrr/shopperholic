<form action="{{ $category->exists ? route('admin.categories.update', ['category' => $category]) : route('admin.categories.store') }}" method="post">
    {{csrf_field()}}
    @if ($category->exists)
        <input type="hidden" name="_method" value="put">
    @endif
    <div class="col-xs-12 col-sm-6">
        <div class="form-group required">
            <label for="CategoryName">Category Name <sup>*</sup> </label>
            <input required="" type="text" value="{{ old('name', $category->name) }}" class="form-control" name="name" placeholder="Category Name">
        </div>
        @if($parentCategories)
        <div class="form-group required">
            <label for="CategoryParent">Parent Category</label>
            <select class="bootstrap-select" name="parent_id">
                <option value=""> Select Parent Category </option>
                @foreach($parentCategories as $parentCategory)
                    <option value="{{ $parentCategory->id }}"
                            {{ old('parent_id') == $parentCategory->id ||
                            $category->parent_id == $parentCategory->id ? 'selected' : '' }}>{{ $parentCategory->name }}
                    </option>
                @endforeach
            </select>
        </div>
        @endif
    </div>
    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Save</button>
    </div>
</form>