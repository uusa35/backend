
<div class="modal  fade" id="Modalnewsletter" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"
     data-pause=2000>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(trans('general.search_your_occasion')); ?>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e(trans('general.sub_title_your_occasion')); ?></h5>
                        <p class="card-text">
                            <?php echo e(trans('message.search_your_occasion')); ?>

                        </p>
                        <br>
                        <?php echo $__env->make('frontend.wokiee.four.partials._search_form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php if(env('APP_CASE') === 'evento'): ?>
                            <div class="row">
                                <div class="tt-offset-35 container-indent element-padding-bottom">
                                    <div class="container">
                                        <div class="row tt-services-listing">
                                            <?php $__currentLoopData = $categoriesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-xs-12 col-md-6 col-lg-4">
                                                    <a href="<?php echo request()->fullUrlWithQuery(['service_category_id' => $category->id]); ?>"
                                                       class="tt-services-block">
                                                        <div class="badge-light">

                                                            <img class="img-responsive img-xs" src="<?php echo e($category->imageThumbLink); ?>" alt="<?php echo e($category->name); ?>">
                                                        </div>
                                                        <div class="tt-col-description">
                                                            <div class="tt-title <?php echo e(request('service_category_id') == $category->id ? 'text-warning' : null); ?>"><?php echo e($category->name); ?></div>
                                                            <div><?php echo e(trans('general.services_count')); ?> : <?php echo e($category->services->count()); ?> </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>