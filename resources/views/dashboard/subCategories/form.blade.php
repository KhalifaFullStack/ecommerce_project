<div class="col-12 grid-margin stretch-card">
  <div class="card px-5 py-4">

        <div class="d-flex justify-flex-start ">
          <div class="form-group" style="width: 40%; margin-right: 5%;" >
            <label>sub-category Name</label>
            <input type="text" class="form-control" name="name" placeholder="Type subcategory name here"
            value="{{ Request::old('name') ? Request::old('name') : $subcategory->name }}">
          </div>

          <div class="form-group" style="width: 40%">
            <label>Description</label>
            <input height="10" name="description" class="form-control" placeholder="Add subcategory description" 
            value="{{ Request::old('description') ? Request::old('description') : $subcategory->description }}">
          </div>
        </div>

        <div class="d-flex justify-flex-start ">
          <div class="form-group" style="width: 40%; margin-right: 5%;" >

              <select class="form-select form-select-sm" name="category">category Name
                <option selected>Select Category Name</option>
                @forelse ($categories as $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $subcategory->category_id ? 'selected' : '' }}>
                {{ $cat->name }}</option>
                @empty

                @endforelse
            </select>
          </div>

