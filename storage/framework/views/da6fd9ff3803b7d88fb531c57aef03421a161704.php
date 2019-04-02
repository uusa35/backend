<a href="#" class="tt-back-to-top"><?php echo e(trans('general.back_to_top')); ?></a>
<!-- modal (AddToCartProduct) -->

    
        
            
                
            
            
                
                    
                        
                    
                    
                    
                    
                
                
                    
                        
                            
                                
                            
                            
                                
                                    
                                
                                
                                
                                    
                                
                            
                            
                                
                                    
                                
                            
                        
                        
                            
                                
                                
                                    
                                
                            
                            
                            
                            
                        
                    
                
            
        
    

<!-- modal (quickViewModal) -->
<div class="modal  fade"  id="ModalquickView" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-modal-quickview desctope">
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-6">
                            <div class="tt-mobile-product-slider arrow-location-center">
                                <div><img id="element-image" src="" data-src="" alt=""></div>
                                
                                
                                
                                
                                    
                                        
                                        
                                    
                                
                            </div>
                        </div>
                        <div class="col-12 col-md-7 col-lg-6">
                            <div class="tt-product-single-info">
                                <div class="tt-add-info">
                                    <ul>
                                        <li><span><?php echo e(trans('general.sku')); ?>: <div id="element-sku"></div></span></li>
                                        
                                    </ul>
                                </div>
                                <h2 class="tt-title"><div id="element-name"></div></h2>
                                <div class="tt-price">
                                    <span class="new-price">
                                        <span id="element-price"></span>
                                        <span id="element-currency-name"></span>
                                    </span>
                                </div>
                                <div class="tt-wrapper">
                                    <div id="element-description"></div>
                                </div>
                                
                                    
                                        
                                        
                                            
                                                
                                                    
                                                    
                                                    
                                                
                                            
                                        
                                    
                                    
                                        
                                        
                                            
                                                
                                                    
                                                    
                                                    
                                                
                                            
                                        
                                    
                                    
                                        
                                        
                                            
												
													
												
                                                    
                                                
                                            
												
													
												
                                                    
                                                
                                            
												
													
												
                                                    
                                                
                                            
												
													
												
                                                    
                                                
                                            
												
													
												
                                                    
                                                
                                        
                                    
                                
                                <div class="tt-wrapper">
                                    <div class="tt-row-custom-01">
                                        
                                            
                                                
                                                
                                                
                                            
                                        
                                        <div class="col-item">
                                            <a id="element-url" href="#" class="btn btn-lg"><i class="icon-f-39"></i><?php echo e(trans('general.view')); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modalVideoProduct -->
<div class="modal fade"  id="modalVideoProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-video">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="modal-video-content">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal (ModalSubsribeGood) -->
<div class="modal  fade"  id="ModalSubsribeGood" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-modal-subsribe-good">
                    <i class="icon-f-68"></i> You have successfully signed!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal  fade"  id="chooseTimeModal" tabindex="-1" role="dialog" aria-label="chooseTimeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-modal-subsribe-good">
                    <i class="icon-f-68"></i> <?php echo e(trans('general.choose_time')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
