
<?php if(auth()->guard()->guest()): ?>
    <?php if(is_null(getClientCountry())): ?>
        <div class="modal  fade" id="Modalnewsletter" tabindex="-1" role="dialog" aria-label="myModalLabel"
             aria-hidden="true"
             data-pause=2000>
            <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                    class="icon icon-clear"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-header">
                                <?php echo e(trans('general.choose_your_country')); ?>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e(trans('message.description_country_modal')); ?></h5>
                                <p class="card-text">

                                <div class="tt-add-info">
                                    <div class="tt-table-responsive">
                                        <table class="tt-table-shop-01">
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <a class=href="<?php echo e(route('frontend.country.set',['country_id' => $country->id])); ?>">
                                                            <img class="img-responsive img-sm"
                                                                 src="<?php echo e($country->imageThumbLink); ?>"
                                                                 alt="<?php echo e($country->slug); ?>">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn bnt-lg"
                                                           href="<?php echo e(route('frontend.country.set',['country_id' => $country->id])); ?>">
                                                            <?php echo e($country->slug); ?>

                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
