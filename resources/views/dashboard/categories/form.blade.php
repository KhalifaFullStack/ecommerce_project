  <div class="col-12 grid-margin stretch-card">
    <div class="card px-5 py-4">

          <div class="d-flex justify-flex-start ">
            <div class="form-group" style="width: 40%; margin-right: 5%;" >
              <label>Category Name</label>
              <input type="text" class="form-control" name="name" placeholder="Type Category name here"
              value="{{ Request::old('name') ? Request::old('name') : $category->name }}">
            </div>

            <div class="form-group" style="width: 40%">
              <label>Description</label>
              <input height="10" name="description" class="form-control" placeholder="Add category description" 
              value="{{ Request::old('description') ? Request::old('description') : $category->description }}">
            </div>
          </div>

