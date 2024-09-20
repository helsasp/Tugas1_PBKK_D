<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
  <h3 class="text-xl">Welcome to Blog! <3</h3>
  <h3>List of Blog</h3>
  <ul>
    <li>
      <h2>Blog 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi illo laborum ipsa eaque veniam, cum harum obcaecati esse ex vel. Velit unde natus dignissimos inventore molestiae amet, iusto laudantium nostrum.</p>
    </li>
    <li>
      <h2>Blog 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi illo laborum ipsa eaque veniam, cum harum obcaecati esse ex vel. Velit unde natus dignissimos inventore molestiae amet, iusto laudantium nostrum.</p>
    </li>
    <li>
      <h2>Blog 3</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi illo laborum ipsa eaque veniam, cum harum obcaecati esse ex vel. Velit unde natus dignissimos inventore molestiae amet, iusto laudantium nostrum.</p>
    </li>
  </ul>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\laravel11\resources\views/blog.blade.php ENDPATH**/ ?>