<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
<body>
    <br><br>
   <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form   class="row gy-2 gx-3 align-items-center" action="<?php echo e(route('contact.update', ['id' => $contact->id])); ?>" method="POST">
     
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input type="text" class="form-control" id="autoSizingInput" name="name" value="<?php echo e($contact->name); ?>" required>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">phone</label>
    <input type="text" class="form-control" id="autoSizingInput" name="phone" value="<?php echo e($contact->phone); ?>">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">email</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="email" class="form-control" id="autoSizingInputGroup" name="email" value="<?php echo e(old('email', $contact->email)); ?>" required>
      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Category</label>
    <select class="form-select" id="autoSizingSelect" name="category">
      <option value="work" <?php echo e($contact->category == 'work' ? 'selected' : ''); ?>>Work</option>
      <option value="general" <?php echo e($contact->category == 'general' ? 'selected' : ''); ?>>General</option>
      <option value="family" <?php echo e($contact->category == 'family' ? 'selected' : ''); ?>>Family</option>
      <option value="friends" <?php echo e($contact->category == 'friends' ? 'selected' : ''); ?>>Friends</option>
    </select>
  </div>
 
    <button type="submit" class="btn btn-primary">Edit Contact</button>
     
  <a   class="btn btn-primary" href="<?php echo e(route('contact.delete', ['id' => $contact->id])); ?>" > delete contact</a>
  </div>
   
</form>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
    </html><?php /**PATH D:\كورس لارافيل\contacts\resources\views/edit.blade.php ENDPATH**/ ?>