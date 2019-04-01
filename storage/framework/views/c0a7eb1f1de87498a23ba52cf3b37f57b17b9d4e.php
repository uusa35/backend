<?php $__env->startSection('content'); ?>
    <div class="portlet box blue">
        <?php echo $__env->make('backend.partials.forms.form_title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="<?php echo e(route('backend.product.update',$element->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="put">
                <div class="form-body">
                    <h3 class="form-section">Edit Product</h3>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group <?php echo e($errors->has('sku') ? ' has-error' : ''); ?>">
                                <label for="sku" class="control-label">sku *</label>
                                <input id="sku"
                                       type="text"
                                       class="form-control"
                                       name="sku"
                                       value="<?php echo e($element->sku); ?>"
                                       placeholder="name in arabic"
                                       required autofocus>
                                <?php if($errors->has('sku')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('sku')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group <?php echo e($errors->has('name_ar') ? ' has-error' : ''); ?>">
                                <label for="name_ar" class="control-label">Name Arabic*</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name="name_ar"
                                       value="<?php echo e($element->name_ar); ?>"
                                       placeholder="name in arabic"
                                       required autofocus>
                                <?php if($errors->has('name_ar')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('name_ar')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('name_en') ? ' has-error' : ''); ?>">
                                <label for="name_en" class="control-label">Name English*</label>
                                <input id="name_en"
                                       type="text"
                                       class="form-control"
                                       name="name_en"
                                       value="<?php echo e($element->name_en); ?>"
                                       placeholder="name in english"
                                       required autofocus>
                                <?php if($errors->has('name_en')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('name_en')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('price') ? ' has-error' : ''); ?>">
                                <label for="price" class="control-label">price *</label>
                                <input id="price"
                                       type="text"
                                       class="form-control"
                                       name="price"
                                       value="<?php echo e($element->price); ?>"
                                       placeholder="price"
                                       maxlength="5"
                                       required autofocus>
                                <?php if($errors->has('price')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('price')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('sale_price') ? ' has-error' : ''); ?>">
                                <label for="sale_price" class="control-label">sale_price *</label>
                                <input id="sale_price"
                                       type="text"
                                       class="form-control"
                                       name="sale_price"
                                       maxlength="5"
                                       value="<?php echo e($element->sale_price); ?>"
                                       placeholder="sale_price"
                                       autofocus>
                                <?php if($errors->has('sale_price')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('sale_price')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group<?php echo e($errors->has('weight') ? ' has-error' : ''); ?>">
                                <label for="weight" class="control-label">weight *</label>
                                <input id="weight"
                                       type="text"
                                       class="form-control"
                                       name="weight"
                                       maxlength="4"
                                       minlength="1"
                                       value="<?php echo e($element->weight); ?>"
                                       placeholder="weight"
                                       required autofocus>
                                <?php if($errors->has('weight')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('weight')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group<?php echo e($errors->has('start_sale') ? ' has-error' : ''); ?>">
                                <label for="start_sale" class="control-label">start_sale Arabic</label>
                                <input id="start_sale"
                                       type="date"
                                       class="form-control"
                                       name="start_sale"
                                       value="<?php echo e($element->start_sale ? $element->start_sale->format('Y-m-d') : null); ?>"
                                       placeholder="name in arabic"
                                       autofocus>
                                <?php if($errors->has('start_sale')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('start_sale')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="control-label">End Sale Date</label>
                                <div class="input-group date form_datetime">
                                    <input type="text" size="16" readonly class="form-control" name="end_sale"
                                           value="<?php echo e($element->end_sale); ?>">
                                    <span class="input-group-btn">
                                                            <button class="btn default date-set" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" placeholder="image">
                                <label for="form_control_1">Main Image</label>
                                <div class="help-block text-left">
                                    W * H - Best fit ['1080', '1440'] pixels
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="file" class="form-control" name="size_chart_image"
                                       placeholder="size_chart_image">
                                <label for="form_control_1">Image Chart</label>
                                <div class="help-block text-left">
                                    W * H - Best fit 500 x 500 pixels
                                </div>
                                `
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('notes_ar') ? ' has-error' : ''); ?>">
                                <label for="notes_ar" class="control-label">notes_ar arabic</label>
                                <input id="notes_ar"
                                       type="text"
                                       class="form-control"
                                       name="notes_ar"
                                       placeholder="notes_ar arabic"
                                       value="<?php echo e($element->notes_ar); ?>"
                                       autofocus>
                                <?php if($errors->has('notes_ar')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('notes_ar')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('notes_en') ? ' has-error' : ''); ?>">
                                <label for="notes_en" class="control-label">notes_en english</label>
                                <input id="notes_en"
                                       type="text"
                                       class="form-control"
                                       name="notes_en"
                                       value="<?php echo e($element->notes_en); ?>"
                                       placeholder="notes_en arabic"
                                       autofocus>
                                <?php if($errors->has('notes_en')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('notes_en')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('video_url') ? ' has-error' : ''); ?>">
                                <label for="video_url" class="control-label">video_url english</label>
                                <input id="video_url"
                                       type="text"
                                       class="form-control"
                                       name="video_url"
                                       value="<?php echo e($element->video_url); ?>"
                                       placeholder="video_url arabic"
                                       autofocus>
                                <?php if($errors->has('video_url')): ?>
                                    <span class="help-block">
                                        <strong>
                                            <?php echo e($errors->first('video_url')); ?>

                                        </strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">description arabic</label>
                                <textarea type="text" class="form-control" id="description_ar" name="description_ar"
                                          aria-multiline="true" maxlength="500"><?php echo e($element->description_ar); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">description english</label>
                                <textarea type="text" class="form-control" id="description_en" name="description_en"
                                          aria-multiline="true" maxlength="500"><?php echo e($element->description_en); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <hr>
                        <?php if(!$categories->isEmpty()): ?>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Categories</label>
                                    <select multiple="multiple" class="multi-select" id="my_multi_select1"
                                            name="categories[]">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"
                                                    <?php echo e(in_array($category->id,$element->categories->pluck('id')->toArray()) ? 'selected' : null); ?> style="background-color: <?php echo e($category->isParent ? 'lightblue' : null); ?>"><?php echo e($category->name); ?></option>
                                            <?php if(!$category->children->isEmpty()): ?>
                                                <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($child->id); ?>"
                                                            <?php echo e(in_array($child->id,$element->categories->pluck('id')->toArray()) ? 'selected' : null); ?>  style="padding-left: 15px"><?php echo e($child->name); ?></option>
                                                    <?php if(!$child->children->isEmpty()): ?>
                                                        <?php $__currentLoopData = $child->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($subChild->id); ?>"
                                                                    <?php echo e(in_array($subChild->id,$element->categories->pluck('id')->toArray()) ? 'selected' : null); ?>  style="padding-left: 35px"><?php echo e($subChild->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>s
                        <?php endif; ?>
                        <?php if(!$tags->isEmpty()): ?>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Tags</label>
                                    <select multiple="multiple" class="multi-select" id="my_multi_select2"
                                            name="tags[]">
                                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($tag->id); ?>" <?php echo e(in_array($tag->id,$element->tags->pluck('id')->toArray()) ? 'selected' : null); ?> ><?php echo e($tag->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if(!$brands->isEmpty()): ?>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Brands</label>
                                    <select multiple="multiple" class="multi-select" id="my_multi_select3"
                                            name="brands[]">
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($brand->id); ?>" <?php echo e(in_array($brand->id,$element->brands->pluck('id')->toArray()) ? 'selected' : null); ?> ><?php echo e($brand->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <hr>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios3"
                                           <?php echo e($element->active ? 'checked' : null); ?>

                                           value="1"> active</label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios4"
                                           <?php echo e(!$element->active ? 'checked' : null); ?>

                                           value="0">not active</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">on_sale</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="on_sale" id="optionsRadios3"
                                           <?php echo e($element->on_sale ? 'checked' : null); ?>

                                           value="1"> on_sale</label>
                                <label class="radio-inline">
                                    <input type="radio" name="on_sale" id="optionsRadios4"
                                           <?php echo e(!$element->on_sale ? 'checked' : null); ?>

                                           value="0">not on_sale</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">on_sale_on_homepage</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="on_sale_on_homepage" id="optionsRadios3"
                                           <?php echo e($element->on_sale_on_homepage ? 'checked' : null); ?>

                                           value="1"> on_sale_on_homepage</label>
                                <label class="radio-inline">
                                    <input type="radio" name="on_sale_on_homepage" id="optionsRadios4"
                                           <?php echo e(!$element->on_sale_on_homepage ? 'checked' : null); ?>

                                           value="0">not on_sale_on_homepage</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">is_hot_deal</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_hot_deal" id="optionsRadios7"
                                           <?php echo e($element->is_hot_deal ? 'checked' : null); ?>

                                           value="1"> is_hot_deal</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_hot_deal" id="optionsRadios8"
                                           <?php echo e(!$element->is_hot_deal ? 'checked' : null); ?>

                                           value="0">not is_hot_deal</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">on_homepage</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="on_homepage" id="optionsRadios3"
                                           <?php echo e($element->on_homepage ? 'checked' : null); ?>

                                           value="1"> on_homepage</label>
                                <label class="radio-inline">
                                    <input type="radio" name="on_homepage" id="optionsRadios4"
                                           <?php echo e(!$element->on_homepage ? 'checked' : null); ?>

                                           value="0">not on_homepage</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">check_stock</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="check_stock" id="optionsRadios5"
                                           <?php echo e($element->check_stock ? 'checked' : null); ?>

                                           value="1"> check_stock</label>
                                <label class="radio-inline">
                                    <input type="radio" name="check_stock" id="optionsRadios6"
                                           <?php echo e(!$element->check_stock ? 'checked' : null); ?>

                                           value="0">not in check_stock</label>
                                <div class="alert alert-danger text-danger">
                                    <ul>
                                        <li>
                                            If Not whenever a successful order is made. qty will not be decreased
                                            accordingly.
                                        </li>
                                        <li>
                                            if Not Product will be added to cart without checking the current quantity.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo $__env->make('backend.partials.forms._btn-group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Main Image
                            </div>
                            <div class="panel-body">
                                <img class="img-responsive img-thumbnail img-sm"
                                     src="<?php echo e(asset('storage/uploads/images/thumbnail/'.$element->image)); ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <?php if($element->size_chart_image): ?>
                        <div class="col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Chart Image
                                </div>
                                <div class="panel-body">
                                    <img class="img-responsive img-thumbnail img-sm"
                                         src="<?php echo e(asset('storage/uploads/images/thumbnail/'.$element->size_chart_image)); ?>"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>