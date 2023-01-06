<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h2 class="text-center text-primary">Student Data</h3>
	</center>

	<table class="table table-bordered table-striped">
		<thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Name</th>
                <th scope="col">Score</th>
            </tr>
		</thead>
		<tbody>
            <?php
            $no = 0;
            ?>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e(++$no); ?></th>
            <td><?php echo e($s->NIM); ?></td>
            <td><?php echo e($s->Name); ?></td>
            <td><?php echo e($s->Score); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</body>
</html>
<?php /**PATH D:\Tegar Folder\Semester 3\Statistik\UAS\resources\views/backpage/printDataStudentPDF.blade.php ENDPATH**/ ?>