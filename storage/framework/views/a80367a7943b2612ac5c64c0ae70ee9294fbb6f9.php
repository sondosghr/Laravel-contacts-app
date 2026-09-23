<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <br><br>
    <a class="btn btn-primary" href="<?php echo e(route('contact.create')); ?>" role="button">create contact</a>
    <br><br><br><br><br><br><br>

    <ul class="list-group">
         <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <!-- <li class="list-group-item"><?php echo e($contact->name); ?></li> -->
   <div class="list-group">
 
  <a href="<?php echo e(route('contact.edit', ['id' => $contact->id])); ?>" class="list-group-item list-group-item-action"><?php echo e($contact->name); ?></a>
 
</div>
 
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


</body>        

 </html>   <?php /**PATH D:\كورس لارافيل\contacts\resources\views\index.blade.php ENDPATH**/ ?>