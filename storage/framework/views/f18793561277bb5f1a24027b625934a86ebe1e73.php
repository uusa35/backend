<div class="container-indent nomargin">
    <div class="container-fluid">
        <div class="row">
            <div class="slider-revolution revolution-default">
                <div class="tp-banner-container">
                    <div class="tp-banner revolution">
                        <ul>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-thumb="<?php echo e(asset($s->imgThumbLink)); ?>" data-transition="fade"
                                    data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"
                                    data-title="Slide">
                                    <img src="<?php echo e(asset($s->imageLargeLink)); ?>" alt="slide1"
                                         data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <div class="tp-caption tp-caption1 lft stb"
                                         data-x="center"
                                         data-y="center"
                                         data-hoffset="0"
                                         data-voffset="0"
                                         data-speed="600"
                                         data-start="900"
                                         data-easing="Power4.easeOut"
                                         data-endeasing="Power4.easeIn">
                                        <div class="tp-caption1-wd-1 tt-base-color"><?php echo e($s->title); ?></div>
                                        <div class="tp-caption1-wd-2 tt-white-color"><?php echo e($s->caption); ?></div>
                                        <?php if($s->url): ?>
                                            <div class="tp-caption1-wd-4"><a href="<?php echo e($s->url); ?>"
                                                                             class="btn btn-xl"
                                                                             data-text="<?php echo e($s->title); ?>"><?php echo e($s->title); ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($s->path): ?>
                                            <div class="tp-caption1-wd-4"><a
                                                        href="<?php echo e(storage_path(env('FILES').$s->path)); ?>"
                                                        class="btn btn-xl"
                                                        data-text="<?php echo e($s->title); ?>"><?php echo e($s->title); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>