{{--<div class="form-actions">--}}
{{--<div class="col-lg-3 col-lg-push-9">--}}
{{--<button type="submit" id="submit" class="btn green btn-circle-left">Submit</button>--}}
{{--<a href="{!! url()->previous() !!}" class="btn red btn-circle-right">Cancel</a>--}}
{{--</div>--}}
{{--</div>--}}
<div class="form-actions pull-left">
    {{--<button type="button" class="btn default">Cancel</button>--}}
    <a href="{!! url()->previous() !!}" class="btn default">{{ trans('general.cancel') }}</a>
    <button type="submit" class="btn blue">
        <i class="fa fa-check"></i> {{ trans('general.save') }}
    </button>
</div>
