

<?php $__env->startSection('bar'); ?>
    <span class="text-muted float-right">Home / Precription History</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('connect'); ?>
    <div class="card">
        <div class="card-header">
            <span class="font-weight-bold">Precription History</span>
            <a href="<?php echo e(url('user-dashboard')); ?>" class="btn btn-primary float-right">Back</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Note</th>
                        <th>Delivery Address</th>
                        <th colspan="5" class="text-center">Images</th>
                    </tr>
                </thead>

                <?php $i=1; ?>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($row->note); ?></td>
                            <td><?php echo e($row->address); ?></td>
                            <td class="text-center"><a href="<?php echo e(asset($row->image1)); ?>" target="_blank"><img
                                        src="<?php echo e(asset($row->image1)); ?>" alt="" width="50px" height="50px"
                                        class="rounded-circle"></a>
                            </td>
                            <td class="text-center"><a href="<?php echo e(asset($row->image2)); ?>" target="_blank"><img
                                        src="<?php echo e(asset($row->image2)); ?>" alt="" width="50px" height="50px"
                                        class="rounded-circle"></a>
                            </td>
                            <td class="text-center"><a href="<?php echo e(asset($row->image3)); ?>" target="_blank"><img
                                        src="<?php echo e(asset($row->image3)); ?>" alt="" width="50px" height="50px"
                                        class="rounded-circle"></a>
                            </td>
                            <td class="text-center"><a href="<?php echo e(asset($row->image4)); ?>" target="_blank"><img
                                        src="<?php echo e(asset($row->image4)); ?>" alt="" width="50px" height="50px"
                                        class="rounded-circle"></a>
                            </td>
                            <td class="text-center"><a href="<?php echo e(asset($row->image5)); ?>" target="_blank"><img
                                        src="<?php echo e(asset($row->image5)); ?>" alt="" width="50px" height="50px"
                                        class="rounded-circle"></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td class="text-center text-danger" colspan="8">No Data Record</td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 1\php\docs\Laravel-Pharmacy-Management-System\resources\views/user/precribtion-history.blade.php ENDPATH**/ ?>