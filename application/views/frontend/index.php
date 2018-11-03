<!DOCTYPE html>

<section class="banner">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators bannerindicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="overlay"></div>
                <img src="<?= base_url() ?>assets/images/banner.jpg" class="img-responsive" alt="...">            
                <div class="carousel-caption">
                    <div class="container">
                        <div class="bannerContent">                
                            <h1 class="bannertitle">Casual Collection <span>for you</span></h1>
                            <p>loreum ispum dolor sit perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa</p>
                            <div class="bannerbtn">
                                <a class="btn btn-default commanbtn" href="#." role="button">Know More</a>
                            </div><!-- bannerbtn -->
                        </div><!-- bannerContent -->
                    </div><!-- container -->              
                </div><!-- carousel-caption -->           
            </div><!-- item -->
            <div class="item ">
                <div class="overlay"></div>
                <img src="<?= base_url() ?>assets/images/banner.jpg" class="img-responsive" alt="...">            
                <div class="carousel-caption">
                    <div class="container">
                        <div class="bannerContent">                
                            <h1 class="bannertitle">Casual Collection <span>for you</span></h1>
                            <p>loreum ispum dolor sit perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa</p>
                            <div class="bannerbtn">
                                <a class="btn btn-default commanbtn" href="#." role="button">Know More</a>
                            </div><!-- bannerbtn -->
                        </div><!-- bannerContent -->
                    </div><!-- container -->              
                </div><!-- carousel-caption -->           
            </div><!-- item -->
            <div class="item">
                <div class="overlay"></div>
                <img src="<?= base_url() ?>assets/images/banner.jpg" class="img-responsive" alt="...">            
                <div class="carousel-caption">
                    <div class="container">
                        <div class="bannerContent">                
                            <h1 class="bannertitle">Casual Collection <span>for you</span></h1>
                            <p>loreum ispum dolor sit perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa</p>
                            <div class="bannerbtn">
                                <a class="btn btn-default commanbtn" href="#." role="button">Know More</a>
                            </div><!-- bannerbtn -->
                        </div><!-- bannerContent -->
                    </div><!-- container -->              
                </div><!-- carousel-caption -->           
            </div><!-- item -->          
        </div><!-- carousel-inner --> 
    </div><!-- carousel slide -->
</section><!-- banner -->

<section class="arrivalproduct">  
    <div class="container">
        <div class="commentop">
            <h2 class="commenheding wow zoomInDown" data-wow-duration="0.6s" data-wow-delay="0.2s">Arrival Product</h2>
            <p>loreum ispum dolor sit perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>    
        </div><!-- commentop -->
        <div class="Slider">                               
            <div id="owl-slider1" class="owl-carousel">
                <?php 
                    if(!empty($product_list)){
                        foreach($product_list as $value){ 
                ?>
                    <div class="slide-item">            
                        <div class="sliderwrap">
                            <div class="productimg">
                                <img src="<?= base_url() ?>assets/images/product-images/<?= $value['image']?>" alt=" " class="img-responsive">
                                <div class="productoverlay">
                                    <div class="text">
                                        <div class="content_overlay">
                                            <a class="btn btn-default productbtn" href="<?= base_url()?>product/product-details?id=<?= $value['id']?>" role="button">View Item</a>
                                        </div><!-- content_overlay -->
                                    </div><!-- text -->
                                </div><!-- productoverlay -->
                            </div><!-- productimg -->
                            <div class="productContent">
                                <h4 class="productTitle"><?= $value['name']?></h4>
                                <p><?= $value['description']?></p>
                                <h5 class="productPrice">&#x20b9; <?= $value['price']?></h5>                                       
                            </div><!-- productContent -->
                        </div> <!-- sliderwrap -->                    
                    </div><!--slide-item-->
                <?php } } ?>    
<!--                <div class="slide-item">            
                    <div class="sliderwrap">
                        <div class="productimg">
                            <img src="<?= base_url() ?>assets/images/shoes2.jpg" alt=" " class="img-responsive">
                            <div class="productoverlay">
                                <div class="text">
                                    <div class="content_overlay">
                                        <a class="btn btn-default productbtn" href="#." role="button">View Item</a>
                                    </div> content_overlay 
                                </div> text 
                            </div> productoverlay 
                        </div> productimg 
                        <div class="productContent">
                            <h4 class="productTitle">At vero eos et accusamus et iusto dignissimos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus iste natus error sit iste natus error sit totam rem...</p>
                            <h5 class="productPrice">&#x20b9;   500</h5>                                       
                        </div> productContent 
                    </div>  sliderwrap                     
                </div>slide-item
                <div class="slide-item">            
                    <div class="sliderwrap">
                        <div class="productimg">
                            <img src="<?= base_url() ?>assets/images/shoes3.jpg" alt=" " class="img-responsive">
                            <div class="productoverlay">
                                <div class="text">
                                    <div class="content_overlay">
                                        <a class="btn btn-default productbtn" href="#." role="button">View Item</a>
                                    </div> content_overlay 
                                </div> text 
                            </div> productoverlay 
                        </div> productimg 
                        <div class="productContent">
                            <h4 class="productTitle">At vero eos et accusamus et iusto dignissimos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus iste natus error sit iste natus error sit totam rem...</p>
                            <h5 class="productPrice">&#x20b9;   500</h5>                                       
                        </div> productContent 
                    </div>  sliderwrap                     
                </div>slide-item
                <div class="slide-item">            
                    <div class="sliderwrap">
                        <div class="productimg">
                            <img src="<?= base_url() ?>assets/images/shoes1.jpg" alt=" " class="img-responsive">
                            <div class="productoverlay">
                                <div class="text">
                                    <div class="content_overlay">
                                        <a class="btn btn-default productbtn" href="#." role="button">View Item</a>
                                    </div> content_overlay 
                                </div> text 
                            </div> productoverlay 
                        </div> productimg 
                        <div class="productContent">
                            <h4 class="productTitle">At vero eos et accusamus et iusto dignissimos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus iste natus error sit iste natus error sit totam rem...</p>
                            <h5 class="productPrice">&#x20b9;   500</h5>                                       
                        </div> productContent 
                    </div>  sliderwrap                     
                </div>slide-item
                <div class="slide-item">            
                    <div class="sliderwrap">
                        <div class="productimg">
                            <img src="<?= base_url() ?>assets/images/shoes2.jpg" alt=" " class="img-responsive">
                            <div class="productoverlay">
                                <div class="text">
                                    <div class="content_overlay">
                                        <a class="btn btn-default productbtn" href="#." role="button">View Item</a>
                                    </div> content_overlay 
                                </div> text 
                            </div> productoverlay 
                        </div> productimg 
                        <div class="productContent">
                            <h4 class="productTitle">At vero eos et accusamus et iusto dignissimos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus iste natus error sit iste natus error sit totam rem...</p>
                            <h5 class="productPrice">&#x20b9;   500</h5>                                       
                        </div> productContent 
                    </div>  sliderwrap                     
                </div>slide-item
                <div class="slide-item">            
                    <div class="sliderwrap">
                        <div class="productimg">
                            <img src="<?= base_url() ?>assets/images/shoes3.jpg" alt=" " class="img-responsive">
                            <div class="productoverlay">
                                <div class="text">
                                    <div class="content_overlay">
                                        <a class="btn btn-default productbtn" href="#." role="button">View Item</a>
                                    </div> content_overlay 
                                </div> text 
                            </div> productoverlay 
                        </div> productimg 
                        <div class="productContent">
                            <h4 class="productTitle">At vero eos et accusamus et iusto dignissimos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus iste natus error sit iste natus error sit totam rem...</p>
                            <h5 class="productPrice">&#x20b9;   500</h5>                                       
                        </div> productContent 
                    </div>  sliderwrap                     
                </div>slide-item           -->
            </div><!--owl-carousel-->
        </div><!--Slider-->
    </div><!-- container -->
</section><!-- arrivalproduct -->
<section class="Shoplocator">
    <div class="blueoverlay"></div> 
    <div class="container">
        <div class="commentop">
            <h3 class="largwhitetext wow zoomInDown" data-wow-duration="0.6s" data-wow-delay="0.2s">Shop Locator</h3>
        </div><!-- commentop -->
        <div class="row addjestindex">
            <div class="col-md-4 locatorblock">
                <select class="form-control">
                    <option>Maharashtra</option>          
                </select>        
            </div><!-- locatorblock -->
            <div class="col-md-4 locatorblock">
                <select class="form-control">
                    <option>Tilak Rod</option>
                    <option>Bajirao Road</option>
                    <option>Viman Nagar</option>
                    <option>Paud Road</option>         
                </select>        
            </div><!-- locatorblock -->
            <div class="col-md-4 locatorblock">
                <input type="text" class="form-control" placeholder="Text input">        
            </div><!-- locatorblock -->
        </div><!-- row -->
    </div><!-- conatiner -->
</section><!-- Shoplocator -->

<section class="arrivalproduct">
    <div class="container">
        <div class="commentop">
            <h2 class="commenheding wow zoomInDown" data-wow-duration="0.6s" data-wow-delay="0.2s">Our Product</h2>
            <p>loreum ispum dolor sit perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>    
        </div><!-- commentop -->
        <div class="row">
            <div class="col-md-4 col-xs-6 porductblock">
                <div class="porductblocks">            
                    <div class="sliderwrap">
                        <div class="productimg">
                            <img src="<?= base_url() ?>assets/images/sandel1.jpg" alt=" " class="img-responsive">
                            <div class="productoverlay">
                                <div class="text">
                                    <div class="content_overlay">
                                        <a class="btn btn-default productbtn" href="#." role="button">View Item</a>
                                    </div><!-- content_overlay -->
                                </div><!-- text -->
                            </div><!-- productoverlay -->
                        </div><!-- productimg -->
                        <div class="productContent">
                            <h4 class="productTitle">At vero eos et accusamus et iusto dignissimos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus iste natus error sit iste natus error sit totam rem...</p>
                            <h5 class="productPrice">&#x20b9;   500</h5>                                       
                        </div><!-- productContent -->
                    </div> <!-- sliderwrap -->                    
                </div><!--porductblocks-->
            </div><!-- porductblock -->
            <div class="col-md-4 col-xs-6 porductblock">
                <div class="porductblocks">            
                    <div class="sliderwrap">
                        <div class="productimg">
                            <img src="<?= base_url() ?>assets/images/sandel2.jpg" alt=" " class="img-responsive">
                            <div class="productoverlay">
                                <div class="text">
                                    <div class="content_overlay">
                                        <a class="btn btn-default productbtn" href="#." role="button">View Item</a>
                                    </div><!-- content_overlay -->
                                </div><!-- text -->
                            </div><!-- productoverlay -->
                        </div><!-- productimg -->
                        <div class="productContent">
                            <h4 class="productTitle">At vero eos et accusamus et iusto dignissimos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus iste natus error sit iste natus error sit totam rem...</p>
                            <h5 class="productPrice">&#x20b9;   500</h5>                                       
                        </div><!-- productContent -->
                    </div> <!-- sliderwrap -->                    
                </div><!--porductblocks-->
            </div><!-- porductblock -->
            <div class="col-md-4 col-xs-6 porductblock">
                <div class="porductblocks">            
                    <div class="sliderwrap">
                        <div class="productimg">
                            <img src="<?= base_url() ?>assets/images/sandel3.jpg" alt=" " class="img-responsive">
                            <div class="productoverlay">
                                <div class="text">
                                    <div class="content_overlay">
                                        <a class="btn btn-default productbtn" href="#." role="button">View Item</a>
                                    </div><!-- content_overlay -->
                                </div><!-- text -->
                            </div><!-- productoverlay -->
                        </div><!-- productimg -->
                        <div class="productContent">
                            <h4 class="productTitle">At vero eos et accusamus et iusto dignissimos</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus iste natus error sit iste natus error sit totam rem...</p>
                            <h5 class="productPrice">&#x20b9;   500</h5>                                       
                        </div><!-- productContent -->
                    </div> <!-- sliderwrap -->                    
                </div><!--porductblocks-->
            </div><!-- porductblock -->
        </div><!-- row -->   
    </div><!-- container -->
</section><!-- arrivalproduct -->
<section class="popularbrand"> 
    <div class="container">
        <div class="commentop">
            <h2 class="commenheding wow zoomInDown" data-wow-duration="0.6s" data-wow-delay="0.2s">Popular Brands</h2>     
        </div><!-- commentop -->
        <div class="running-slider">
            <ul id="scroller">
                <li><img src="<?= base_url() ?>assets/images/brand1.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand2.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand6.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand3.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand4.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand5.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand3.jpg" ></li>
            </ul> 
        </div><!--  running-slider -->
        <div class="running-slider">
            <ul id="scroller2">
                <li><img src="<?= base_url() ?>assets/images/brand1.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand2.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand6.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand3.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand4.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand5.jpg" ></li>
                <li><img src="<?= base_url() ?>assets/images/brand3.jpg" ></li>
            </ul> 
        </div><!--  running-slider -->
    </div><!-- container -->
</section><!-- popularbrand -->
