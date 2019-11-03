<style>
    .cropper-img{
        max-width: 300px;
        max-height: 300px;
        border: 1px solid #ddd;
        box-shadow: 1px 1px 5px 0 #a2958a;
        padding: 6px;
        float: left;
        clear: both;
    }
    .cropper-btn{
        margin-bottom: 10px;
    }
    .cropper-file{
        display: none !important;
    }
    #cropping-img{
        max-width: 100%;
    }
    #cropping-div{
        width: 98%;
        height: 98%;
        margin: 0 auto;
    }
</style>
<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo !$errors->has($errorKey) ? '' : 'has-error'; ?>">

    <label for="<?php echo e($id, false); ?>" class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="input-group">
        <div data-id="<?php echo e($id, false); ?>" class="btn btn-info pull-left cropper-btn">浏览</div>
        <input id="<?php echo e($id, false); ?>-file" <?php echo $attributes; ?> data-id="<?php echo e($id, false); ?>" class="cropper-file" type="file" accept="image/*"/>
        <img id="<?php echo e($id, false); ?>-img" <?php echo $attributes; ?> data-id="<?php echo e($id, false); ?>" class="cropper-img" <?php echo empty($value) ? '' : 'src="'.old($column, $value).'"'; ?>>
        <input id="<?php echo e($id, false); ?>-input" type="hidden" name="<?php echo e($name, false); ?>" value="<?php echo e(old($column, $value), false); ?>" <?php echo $attributes; ?> />
        </div>
        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>

<?php /**PATH C:\xampp\htdocs\flower\vendor\laravel-admin-ext\cropper\src/../resources/views/cropper.blade.php ENDPATH**/ ?>