

<?php $__env->startSection('bar'); ?>
    <span class="float-right">Home / Dashboard</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('connect'); ?>
    <div class="row">
        <div class="col">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($totalPrecription); ?></h5>
                    <p class="card-text">Total Prescription</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="<?php echo e(url('precribtion-history')); ?>" class="text-white"><span>More Info <i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($accept); ?></h5>
                    <p class="card-text">Accept Prescription</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($reject); ?></h5>
                    <p class="card-text">Reject Prescription</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-4">
            <div class="card bg-warning text-dark">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($pending); ?></h5>
                    <p class="card-text">Prepared Quotation</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="<?php echo e(url('prepared-quotation')); ?>" class="text-dark"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 1\php\docs\Laravel-Pharmacy-Management-System\resources\views/user/dashboard.blade.php ENDPATH**/ ?>