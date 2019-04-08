<?php $__env->startSection('breadcrumbs'); ?>
<?php echo e(Breadcrumbs::render('backend.product.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="portlet-body">
                <?php echo $__env->make('backend.partials._admin_instructions',['title' => trans('general.products') ,'message' => trans('message.admin_product_message')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="portlet-body form">
                    <form class="horizontal-form" role="form" method="POST" action="<?php echo e(route('backend.product.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-body">
                            <h3 class="form-section"><?php echo e(trans('general.create_product')); ?></h3>
                            <div class="mt-element-step">
                                <div class="row step-default">
                                    <div class="col-md-4 bg-grey mt-step-col <?php echo e(Route::currentRouteName() === 'backend.product.create' ? 'active' : null); ?>">
                                        <div class="mt-step-number bg-white font-grey">1</div>
                                        <div class="mt-step-title uppercase font-grey-cascade"><?php echo e(trans('general.create_product')); ?></div>
                                        <div class="mt-step-content font-grey-cascade"><?php echo e(trans('message.create_product')); ?></div>
                                    </div>
                                    <div class="col-md-4 bg-grey mt-step-col <?php echo e(Route::currentRouteName() === 'backend.attribute.create' ? 'active' : null); ?>">
                                        <div class="mt-step-number bg-white font-grey">2</div>
                                        <div class="mt-step-title uppercase font-grey-cascade"><?php echo e(trans('general.add_attribute')); ?></div>
                                        <div class="mt-step-content font-grey-cascade">different Colors , Sizes ,
                                            Qunatities for
                                            each product
                                        </div>
                                    </div>
                                    <div class="col-md-4 bg-grey mt-step-col <?php echo e(Route::currentRouteName() === 'backend.gallery.create' ? 'active' : null); ?>">
                                        <div class="mt-step-number bg-white font-grey">3</div>
                                        <div class="mt-step-title uppercase font-grey-cascade"><?php echo e(trans('general.create_gallery')); ?></div>
                                        <div class="mt-step-content font-grey-cascade"><?php echo e(trans('general.create_gallery_for_product')); ?></div>
                                    </div>
                                </div>
                                <br />
                                <br />
                            </div>
                            <br>
                            
                            <div class="portlet box blue ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i> <?php echo e(trans('general.product_main_details')); ?>

                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group <?php echo e($errors->has('sku') ? ' has-error' : ''); ?>">
                                                    <label for="sku" class="control-label"><?php echo e(trans('general.sku')); ?>

                                                        *</label>
                                                    <input id="sku" type="text" class="form-control" name="sku" value="<?php echo e(old('sku')); ?>" placeholder="<?php echo e(trans('general.sku')); ?>" required autofocus>
                                                    <?php if($errors->has('sku')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('sku')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.sku')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group <?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                                    <label for="name_ar" class="control-label"><?php echo e(trans('general.name_arabic')); ?>

                                                        *</label>
                                                    <input id="name_ar" type="text" class="form-control" name="name_ar" value="<?php echo e(old('name_ar')); ?>" placeholder="<?php echo e(trans('general.name_arabic')); ?>" required autofocus>
                                                    <?php if($errors->has('name_ar')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('name_ar')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.name_ar')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group<?php echo e($errors->has('name_en') ? ' has-error' : ''); ?>">
                                                    <label for="name_en" class="control-label"><?php echo e(trans('general.name_english')); ?>

                                                        *</label>
                                                    <input id="name_en" type="text" class="form-control" name="name_en" value="<?php echo e(old('name_en')); ?>" placeholder="<?php echo e(trans('general.name_english')); ?>" required autofocus>
                                                    <?php if($errors->has('name_en')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('name_en')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.name_en')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group<?php echo e($errors->has('delivery_time') ? ' has-error' : ''); ?>">
                                                    <label for="delivery_time" class="control-label"><?php echo e(trans('general.delivery_time')); ?>

                                                        *</label>
                                                    <input id="delivery_time" type="text" class="form-control" name="delivery_time" value="<?php echo e(old('delivery_time')); ?>" placeholder="<?php echo e(trans('general.delivery_time')); ?>" required autofocus>
                                                    <?php if($errors->has('delivery_time')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('delivery_time')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.delivery_time')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group<?php echo e($errors->has('price') ? ' has-error' : ''); ?>">
                                                    <label for="price" class="control-label"><?php echo e(trans('general.price')); ?>

                                                        *</label>
                                                    <input id="price" type="text" class="form-control" name="price" value="<?php echo e(old('price')); ?>" placeholder="<?php echo e(trans('general.price')); ?>" maxlength="5" required autofocus>
                                                    <?php if($errors->has('price')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('price')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.price')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group<?php echo e($errors->has('weight') ? ' has-error' : ''); ?>">
                                                    <label for="weight" class="control-label"><?php echo e(trans('general.weight')); ?>

                                                        *</label>
                                                    <input id="weight" type="text" class="form-control" name="weight" value="<?php echo e(old('weight')); ?>" placeholder="<?php echo e(trans('general.weight')); ?>" required autofocus>
                                                    <?php if($errors->has('weight')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('weight')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.weight')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group<?php echo e($errors->has('sale_price') ? ' has-error' : ''); ?>">
                                                    <label for="sale_price" class="control-label"><?php echo e(trans('general.sale_price')); ?></label>
                                                    <input id="sale_price" type="text" class="form-control" name="sale_price" maxlength="5" value="<?php echo e(old('sale_price')); ?>" placeholder="<?php echo e(trans('general.sale_price')); ?>" autofocus>
                                                    <?php if($errors->has('sale_price')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('sale_price')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.sale_price')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="portlet box blue ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="row">


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="form_control_1"><?php echo e(trans('general.image_chart')); ?></label>
                                                    <input type="file" class="form-control" name="size_chart_image" placeholder="<?php echo e(trans('general.image_chart')); ?>">
                                                    <div class="help-block text-left">
                                                        W * H - Best fit 500 x 500 pixels
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description" class="control-label"><?php echo e(trans('general.description_arabic')); ?></label>
                                                    <textarea type="text" class="form-control" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500" <?php echo e(old('description_ar')); ?>></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description" class="control-label"><?php echo e(trans('general.description_english')); ?></label>
                                                    <textarea type="text" class="form-control" id="description_en" name="description_en" aria-multiline="true" maxlength="500"><?php echo e(old('description_en')); ?></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <hr>
                                            <div class="col-md-6">
                                                <div class="form-group<?php echo e($errors->has('notes_ar') ? ' has-error' : ''); ?>">
                                                    <label for="notes_ar" class="control-label"><?php echo e(trans('general.notes_arabic')); ?></label>
                                                    <input id="notes_ar" type="text" class="form-control" name="notes_ar" value="<?php echo e(old('notes_ar')); ?>" placeholder="<?php echo e(trans('general.notes_arabic')); ?> " autofocus>
                                                    <?php if($errors->has('notes_ar')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('notes_ar')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.notes_ar')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group<?php echo e($errors->has('notes_en') ? ' has-error' : ''); ?>">
                                                    <label for="notes_en" class="control-label"><?php echo e(trans('general.notes_english')); ?></label>
                                                    <input id="notes_en" type="text" class="form-control" name="notes_en" value="<?php echo e(old('notes_en')); ?>" placeholder="<?php echo e(trans('general.notes_english')); ?>" autofocus>
                                                    <?php if($errors->has('notes_en')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('notes_en')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.notes_en')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group<?php echo e($errors->has('keywords') ? ' has-error' : ''); ?>">
                                                    <label for="keywords" class="control-label"><?php echo e(trans('general.keywords')); ?></label>
                                                    <input id="keywords" type="text" class="form-control" name="keywords" value="<?php echo e(old('keywords')); ?>" placeholder="<?php echo e(trans('general.keywords')); ?>" autofocus>
                                                    <?php if($errors->has('keywords')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('keywords')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.notes_en')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_control_1"><?php echo e(trans('general.main_image')); ?></label>
                                                    <input type="file" class="form-control" name="image" placeholder="<?php echo e(trans('general.main_image')); ?>" required>
                                                    <div class="help-block text-left">
                                                        W * H - Best fit ['1080', '1440'] pixels
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group<?php echo e($errors->has('video_url_one') ? ' has-error' : ''); ?>">
                                                    <label for="video_url_one" class="control-label"><?php echo e(trans('general.video_url_one')); ?></label>
                                                    <input id="video_url_one" type="text" class="form-control" name="video_url_one" value="<?php echo e(old('video_url_one')); ?>" placeholder="<?php echo e(trans('general.video_url_one')); ?>" autofocus>
                                                    <?php if($errors->has('video_url_one')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('video_url_one')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.video_url_one')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group<?php echo e($errors->has('video_url_two') ? ' has-error' : ''); ?>">
                                                    <label for="video_url_two" class="control-label"><?php echo e(trans('general.video_url_two')); ?></label>
                                                    <input id="video_url_two" type="text" class="form-control" name="video_url_two" value="<?php echo e(old('video_url_two')); ?>" placeholder="<?php echo e(trans('general.video_url_two')); ?>" autofocus>
                                                    <?php if($errors->has('video_url_two')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('video_url_two')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.video_url_two')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group<?php echo e($errors->has('start_sale') ? ' has-error' : ''); ?>">
                                                    <label for="start_sale" class="control-label"><?php echo e(trans('general.start_sale_date')); ?></label>
                                                    <div class="input-group date form_datetime">
                                                        <input type="text" readonly style="direction: ltr !important;" class="form-control" name="start_sale" value="<?php echo e(old('start_sale') ? old('start_sale') : '01 January 2019 - 07:55'); ?>" required>
                                                        <span class="input-group-btn"><button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button></span>
                                                    </div>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.start_sale_date')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label"><?php echo e(trans('general.end_sale_date')); ?></label>
                                                    <div class="input-group date form_datetime">
                                                        <input type="text" class="form-control" readonly style="direction: ltr !important;" name="end_sale" value="<?php echo e(old('end_sale') ? old('end_sale') : '01 January 2019 - 07:55'); ?>" required>
                                                        <span class="input-group-btn"><button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button></span>
                                                    </div>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.end_sale_date')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group<?php echo e($errors->has('quantity') ? ' has-error' : ''); ?>">
                                                    <label for="quantity" class="control-label"><?php echo e(trans('general.quantity')); ?></label>
                                                    <input id="quantity" type="text" class="form-control" name="quantity" maxlength="5" value="<?php echo e(old('quantity')); ?>" placeholder="<?php echo e(trans('general.quantity')); ?>" autofocus>
                                                    <?php if($errors->has('quantity')): ?>
                                                    <span class="help-block">
                                                        <strong>
                                                            <?php echo e($errors->first('quantity')); ?>

                                                        </strong>
                                                    </span>
                                                    <?php endif; ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.quantity')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>






                            <div class="portlet box blue ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="row">
                                            <hr>
                                            <?php if(!$categories->isEmpty()): ?>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label"><?php echo e(trans('general.categories')); ?></label>
                                                    <select multiple="multiple" class="multi-select" id="my_multi_select1" name="categories[]">
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($category->id); ?>" style="background-color: <?php echo e($category->isParent ? 'lightblue' : null); ?>"><?php echo e($category->name); ?></option>
                                                        <?php if(!$category->children->isEmpty()): ?>
                                                        <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($child->id); ?>" style="padding-left: 15px"><?php echo e($child->name); ?></option>
                                                        <?php if(!$child->children->isEmpty()): ?>
                                                        <?php $__currentLoopData = $child->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($subChild->id); ?>" style="padding-left: 35px"><?php echo e($subChild->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.categories_instructions')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if(!$tags->isEmpty()): ?>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label"><?php echo e(trans('general.tags')); ?></label>
                                                    <select multiple="multiple" class="multi-select" id="my_multi_select2" name="tags[]">
                                                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.tags_instructions')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="single" class="control-label"><?php echo e(trans('general.owner')); ?></label>
                                                    <select id="" class="form-control select2">
                                                        <option value=""><?php echo e(trans('general.choose_user')); ?></option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->slug_en); ?>"><?php echo e($user->slug_en); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                    </select>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.owner_instructions')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="single" class="control-label"><?php echo e(trans('general.shipment_package')); ?></label>
                                                    <select id="" name="shipment_id" class="form-control select2" required>
                                                        <option value=""><?php echo e(trans('choose_product_package_grade')); ?></option>
                                                        <?php $__currentLoopData = $shipment_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipment_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($shipment_package->slug_en); ?>"><?php echo e($shipment_package->slug_en); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.shipment_instructions')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="brand_id" class="control-label"><?php echo e(trans('general.brand')); ?></label>
                                                    <select id="" name="brand_id" class="form-control select2">
                                                        <option value=""><?php echo e(trans('general.choose_brand')); ?></option>
                                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->slug); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <span class="help-block">
                                                        <strong><?php echo e(trans('message.brand_instructions')); ?></strong>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portlet box blue ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i> <?php echo e(trans('general.more_details')); ?>

                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="row">
                                            <hr>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.active')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="active" id="optionsRadios3" value="1">
                                                        active</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="active" id="optionsRadios4" checked value="0">not
                                                        active</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.active_instructions')); ?></strong>
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.home_delivery_available')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="home_delivery_available" id="optionsRadios3" value="1">
                                                        home_delivery_available</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="home_delivery_available" id="optionsRadios4" checked value="0">not
                                                        home_delivery_available</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.home_delivery_instructions')); ?></strong>
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.shipment_available')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="shipment_available" id="optionsRadios3" value="1">
                                                        shipment_available</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="shipment_available" id="optionsRadios4" checked value="0">not
                                                        shipment_available</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.shipment_available_instructions')); ?></strong>
                                                </span>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.exclusive')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="exclusive" id="optionsRadios3" value="1">
                                                        exclusive</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="exclusive" id="optionsRadios4" checked value="0">not
                                                        exclusive</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.exclusive_instructions')); ?></strong>
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.on_sale_on_homepage')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="on_sale_on_homepage" id="optionsRadios3" value="1">
                                                        on_sale_on_homepage</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="on_sale_on_homepage" id="optionsRadios4" checked value="0">not on_sale_on_homepage</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.on_sale_homepage_instructions')); ?></strong>
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.on_homepage')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="on_homepage" id="optionsRadios3" value="1">
                                                        on_homepage</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="on_homepage" id="optionsRadios4" checked value="0">not
                                                        on_homepage</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.on_homepage_instructions')); ?></strong>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.is_available')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_available" id="optionsRadios3" value="1">
                                                        is_available</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_available" id="optionsRadios4" checked value="0">not
                                                        is_available</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.is_available_instructions')); ?></strong>
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.is_hot_deal')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_hot_deal" id="optionsRadios7" value="1">
                                                        is_hot_deal</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_hot_deal" id="optionsRadios8" checked value="0">not
                                                        is_hot_deal</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.hot_deal_instructions')); ?></strong>
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.on_sale')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="on_sale" id="optionsRadios3" value="1">
                                                        on_sale</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="on_sale" id="optionsRadios4" checked value="0">not
                                                        on_sale</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.on_sale_instructions')); ?></strong>
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold"><?php echo e(trans('general.on_new')); ?></label></br>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="on_new" id="optionsRadios3" value="1">
                                                        on_new</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="on_new" id="optionsRadios4" checked value="0">not
                                                        on_new</label>
                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.on_new_instructions')); ?></strong>
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sbold">

                                                        <?php echo e(trans('general.check_stock')); ?></label></br>
                                                    <label class="radio-inline" data-toggle="tooltip" data-placement="bottom" data-html="true" title=" If Not whenever a successful order is made. qty will not be decreased
                                        accordingly.">
                                                        <input type="radio" data-toggle="tooltip" data-placement="bottom" title="hello" name="check_stock" id="optionsRadios5" value="1">
                                                        check_stock</label>
                                                    <label class="radio-inline" data-toggle="tooltip" data-placement="bottom" data-html="true" title=" if Not Product will be added to cart without checking the current quantity.">
                                                        <input type="radio" name="check_stock" id="optionsRadios6" checked value="0">not
                                                        in
                                                        check_stock</label>

                                                </div>
                                                <span class="help-block">
                                                    <strong><?php echo e(trans('message.check_stock_instructions')); ?></strong>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions right">
                            
                            <a href="<?php echo url()->previous(); ?>" class="btn default">Cancel</a>
                            
                            
                            
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save"></i> Next
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>