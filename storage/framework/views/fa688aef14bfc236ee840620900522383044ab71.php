

<?php $__env->startSection('bar'); ?>
    <span class="text-muted float-right">Home / Prepared Quotation</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('connect'); ?>
    <div class="card">
        <div class="card-header">
            <span class="font-weight-bold">Prepared Quotation</span>
            <a href="<?php echo e(url('user-dashboard')); ?>" class="btn btn-primary float-right">Back</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Item Orders</th>
                        <th>Note</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=1; ?>
                    <?php $total=0; ?>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($row->note); ?></td>
                            <td><?php echo e($row->amount); ?></td>
                            <td>
                                <?php if($row->status == 0): ?>
                                <div class="btn btn-warning rounded-pill px-4">
                                    Pending
                                </div>
                                <?php elseif($row->status == 1): ?>
                                <div class="btn btn-success rounded-pill px-4">
                                    Accept
                                </div>
                                <?php elseif($row->status == 2): ?>
                                <div class="btn btn-danger rounded-pill px-4">
                                    Reject
                                </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($row->status == 0): ?>
                                <a href="<?php echo e(url('quoation-details')); ?>/<?php echo e($row->order_id); ?>" class="btn btn-primary">View</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="text-danger text-center">No Data Records</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 1\php\docs\Laravel-Pharmacy-Management-System\resources\views/user/prepared-quotation.blade.php ENDPATH**/ ?>