<?php $__env->startSection('title'); ?>
    <title><?php echo e(config('app.name') .' '. $settings->company_ar .' '. $settings->company_en); ?></title>
<?php echo $__env->yieldSection(); ?>
<meta http-equiv="Content-type" charset="utf-8" content="text/html; charset=utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="<?php echo e(config('app.name')); ?>" content="E-commerce">
<meta name="theme-color" content="<?php echo e($settings->main_theme_color); ?>">
<meta name="description" content="<?php echo e(trans('general.meta_description') . $settings->company_ar . $settings->company_en . trans('general.app_keywords')); ?>">
<meta name="keywords" content="<?php echo e(trans('general.app_keywords')); ?>"/>
<meta name="author" content="<?php echo e(trans('general.app_author')); ?>">
<meta name="country" content="<?php echo e($settings->country); ?>">
<meta name="mobile" content="<?php echo e($settings->mobile); ?>">
<meta name="phone" content="<?php echo e($settings->phone); ?>">
<meta name="logo" content="<?php echo e(asset(env('LARGE').$settings->logo)); ?>">
<meta name="email" content="<?php echo e($settings->email); ?>">
<meta name="address" content="<?php echo e($settings->address); ?>">
<meta name="name" content="<?php echo e($settings->company); ?>">
<meta name="lang" content="<?php echo e(app()->getLocale()); ?>">
<meta name="google-site-verification" content="fy3pTvV0z024nR79nukGxw-tnOmJ2F5BnMeayo-g4-c" />
<link rel="shortcut icon" href="<?php echo e(asset('images/logo.ico')); ?>"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('images/logo.jpg')); ?>">
<link href="<?php echo e(asset('images/logo.jpg')); ?>" rel="shortcut icon" type="image/jpg">
