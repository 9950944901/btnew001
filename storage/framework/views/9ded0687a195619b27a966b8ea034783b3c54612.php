
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('SCHOOL.Home')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Staff Attendance</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="dashboard ">
      <form action="<?php echo e(route('Staff.Attend')); ?>" method="post">
        <?php echo csrf_field(); ?>
      <section class="section dashboard">
        <h5 class="mt-3" style="font-size: 17px;">Staff</h5>
        
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <input type="date" name="date" class="form-control my-3" value="<?php echo e(date('Y-m-d')); ?>">
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            
              <table class="table table-bordered table-striped">
                <thead>
                  <tr class="" style="font-size: 13px; color: #012970; ">
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Attendance</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr id="task-1" class="task-list-row test-font" data-task-id="1" data-user="Platinum">
                    <td><?php echo e($value->staff_id); ?></td>
                    <input type="hidden" name="staff_id[]" value="<?php echo e($value->staff_id); ?>">
                    <input type="hidden" name="id[]" value="<?php echo e($value->id); ?>">
                    <td><?php echo e($value->firstname); ?> <?php echo e($value->lastname); ?></td>
                    <td>
                      <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Present" > <label>Present</label> &nbsp;
                      <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Late" > <label>Late</label> &nbsp;
                      <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Absent" > <label>Absent</label> &nbsp;
                      <input type="radio" name="attendance[<?php echo e($value->id); ?>]" required value="Half Day" > <label>Half Day</label> &nbsp;
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>  
              <div class="text-right mb-2">
                
              <button type="submit" class="btn btn-primary px-5">Save</button>
            </div>
         
          </div>
        </div>
      </section>
    </form>
    </div>

  </main><!-- End #main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u640337273/domains/btschool.in/public_html/resources/views/school/human-resource/addent.blade.php ENDPATH**/ ?>