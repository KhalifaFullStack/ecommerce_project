<div class="col-12 grid-margin stretch-card">
    <div class="card px-5 py-4">

          <div class="d-flex justify-flex-start ">
            <div class="form-group" style="width: 40%; margin-right: 5%;" >
              <label>Product name</label>
              <input type="text" class="form-control" name="name" placeholder="Product name">
            </div>

            <div class="form-group" style="width: 40%">
              <label>Description</label>
              <textarea name="description" class="form-control">Add product description</textarea>
            </div>
          </div>

          <div class="d-flex justify-flex-start ">
            <div class="form-group" style="width: 40%; margin-right: 5%;">
              <label for="exampleInputPassword4">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
            </div>

            <div class="form-group">
              <label for="exampleSelectGender">Product gender</label>
                <select name="category" class="form-control" id="exampleSelectGender">
                  <option value="men" {{ isset($products) && $products->category == "men" ? 'selected'  : '' }}>Men</option>
                  <option value="women" {{ isset($products) && $products->category == "women" ? 'selected'  : '' }}>Women</option>
                  <option value="kids" {{ isset($products) && $products->category == "kids" ? 'selected'  : '' }}>Kids</option>
                </select> 
              </div>

              <div class="form-group">
                <label for="exampleSelectGender">Product Type</label>
                  <select name="type" class="form-control" id="exampleSelectGender">
                      <option value="shoes">Shoes</option>
                      <option value="shoes">Shoes</option>
                      <option value="shoes">Shoes</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleSelectGender">Other Types</label>
                    <select name="other_type" class="form-control" id="exampleSelectGender">
                        <option value=""></option>
                    </select>
                  </div>
          </div>  

          <div class="form-group">
            <label>Upload image</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
              <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">City</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Textarea</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>

