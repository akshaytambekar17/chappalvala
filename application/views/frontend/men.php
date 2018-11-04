<!doctype html>
        <!-- product items banner start -->
        <div class="product-banner">
            <img src="<?= base_url() ?>assets/frontend/img/product/banner.jpg" alt="">
        </div>
        <!-- product items banner end -->
        <!-- product main items area start -->
        <div class="product-main-items">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="<?= base_url()?>" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong>Men</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>Shopping Options</h2>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Category</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Dresses (4)</a></li>
                                        <li><a href="#">shoes (6)</a></li>
                                        <li><a href="#">Handbags (1)</a></li>
                                        <li><a href="#">Clothing (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Color</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Black (2)</a></li>
                                        <li><a href="#">Blue (2)</a></li>
                                        <li><a href="#">Green (4)</a></li>
                                        <li><a href="#">Grey (2)</a></li>
                                        <li><a href="#">Red (2)</a></li>
                                        <li><a href="#">White (2)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Manufacturer</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Calvin Klein (2)</a></li>
                                        <li><a href="#">Diesel (2)</a></li>
                                        <li><a href="#">option value (1)</a></li>
                                        <li><a href="#">Polo (2)</a></li>
                                        <li><a href="#">store view (4)</a></li>
                                        <li><a href="#">Tommy Hilfiger (2)</a></li>
                                        <li><a href="#">will be used (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar price">
                                <div class="single-sidebar-title">
                                    <h3>Price</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <div class="price-range">
                                        <div class="price-filter">
                                            <div id="slider-range"></div>
                                            <div class="price-slider-amount">
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                            </div>
                                        </div>
                                        <button type="submit"> <span>search</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="sidebar-title">
                                <h2>Men Footwear</h2>
                        </div>
                        <div class="product-bar">
                            
                            <!-- <div class="sort-by">
                                <label>Sort By</label>
                                <select name="sort" >
                                    <option value="#" selected >Position</option>
                                    <option value="#">Name</option>
                                    <option value="#">Price</option>
                                </select>
                                <a href="#" title="Set Descending Direction">
                                    <img src="<?= base_url() ?>assets/frontend/img/product/i_asc_arrow.gif" alt="">
                                </a>
                            </div>
                            <div class="limit-product">
                                <label>Show</label>
                                <select name="show">
                                    <option value="#" selected>9</option>
                                    <option value="#">12</option>
                                    <option value="#">24</option>
                                    <option value="#">36</option>
                                </select>
                                per page
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="product-content">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active fade in home2" id="gird">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="<?= base_url()?>product/product-details">
                                                        <img src="<?= base_url() ?>assets/frontend/img/product/25.png" alt="" class="primary-img">
                                                    </a>
                                                </div>
                                                <div class="product-price">
                                                    <div class="product-name">
                                                        <a href="<?= base_url()?>product/product-details" title="Product Title">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>₹170.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                               <!--  <div class="toolbar-bottom">
                                    <ul>
                                        <li><span>Pages:</span></li>
                                        <li class="current"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"> <img src="<?= base_url() ?>assets/frontend/img/product/pager_arrow_right.gif" alt=""> </a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product main items area end -->
