
<?php $__env->startSection('content'); ?>
<style>
   textarea,select,input {
        box-shadow: none !important;
    }
</style>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit User Details (<?php echo e($edit->rand_id); ?>)</h1>
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <strong><?php echo e($message); ?></strong>
        </div>
        <?php endif; ?>
        <?php if($message = Session::get('error')): ?>
        <div class="alert alert-danger alert-block">
            <strong><?php echo e($message); ?></strong>
        </div>
        <?php endif; ?>
    </div><!-- End Page Title -->
    <form action="<?php echo e(route('SuperAdmin.Form.Update',['id'=>$edit->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-6 mt-2">
                <label class="form-label">School Name</label>
                <input type="text" name="school_name" class="form-control" placeholder="Enter School Name" maxlength="60" value="<?php echo e($edit->school_name ?? ''); ?>">
                <?php $__errorArgs = ['school_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-lg-6 mt-2">
                <label class="form-label"></label>Contact Person Name</label>
                <input type="text" name="contact_person_name" class="form-control" placeholder="Enter Contact Person Name" maxlength="25" value="<?php echo e($edit->name ?? ''); ?>">
                <?php $__errorArgs = ['contact_person_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-lg-6 mt-2">
                <label class="form-label">Mobile No.</label>
                <input type="text" name="mobile_no" class="form-control" placeholder="Enter Mobile No." minlength="10" maxlength="10" pattern="[0-9]*" value="<?php echo e($edit->phone ?? ''); ?>">
                <?php $__errorArgs = ['mobile_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-lg-6 mt-2">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" maxlength="30" value="<?php echo e($edit->email ?? ''); ?>">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-lg-6 mt-2">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" maxlength="30" value="<?php echo e($edit->conform_password ?? ''); ?>">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-lg-6 mt-2">
                <label class="form-label">Confirm Password</label>
                <input type="text" name="confirm_password" class="form-control" placeholder="Enter Confirm Password" maxlength="30" value="<?php echo e($edit->conform_password ?? ''); ?>">
                <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-lg-6 mt-2">
                <label class="form-label">School Address</label>
                <textarea type="text" name="address" class="form-control" placeholder="Enter School Address" maxlength="60"><?php echo e($edit->add ?? ''); ?></textarea>
                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-lg-6 mt-2">
                <label class="form-label">Login Status</label>
                <select name="user_block" class="form-control">
                    <option value="0" <?php echo e($edit->user_block == '0' ? "selected" : ""); ?>>Active</option>
                    <option value="1" <?php echo e($edit->user_block == '1' ? "selected" : ""); ?>>Blocked</option>
                </select>
                <?php $__errorArgs = ['plan_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button type="submit" class="btn btn-primary mt-4 w-25" style="float: right;">Update</button>
            </div>
        </div>
        </div>
        </div>
    </section>
</form>
</main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('super-admin.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/btschool.in/public_html/resources/views/super-admin/edit.blade.php ENDPATH**/ ?>