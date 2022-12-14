<button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                	<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    	<a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                        	<img src="/assets/images/grid.jpg" alt="Grid" />
                                        </a>
                                        <a href="shop-listview.html" title="List View" class="change-view">
                                        	<img src="/assets/images/list.jpg" alt="List" />
                                        </a>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    	<span class="filters-toolbar__product-count">Showing <span style="text-decoration: underline; font-weight:bold;">{{ $items_name ?? 'items name' }}</span> ({{ $compact_value_count }})</span>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<label for="SortBy" class="hidden">Sort</label>

                                              <form method="GET" action="{{ route('input') }}">
                                                <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort" onchange="this.form.submit();">
                                                    <option value="title-ascending" selected="selected">Sort</option>
                                                    {{-- <option>Best Selling</option> --}}
                                                    <option value="alfa_asc">Alphabetically, A-Z</option>
                                                    <option value="alfa_desc">Alphabetically, Z-A</option>
                                                    <option value="price_asc">Price, high to low</option>
                                                    <option value="price_desc">Price, low to high</option>
                                                    <option value="date_asc">Date, new to old</option>
                                                    <option value="date_desc">Date, old to new</option>
                                                </select>
                                              </form>
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>