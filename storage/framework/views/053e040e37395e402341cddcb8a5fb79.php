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
  <h3 class="text-xl">Welcome to Contact Page! <3</h3>
  <p>Please reach out on one of my social media :</p>
  <ul>
    <li>
        <a href="https://www.instagram.com/helsa__putri/" target="_blank" style="text-decoration: underline;">
            <i class="fab fa-instagram"></i> Instagram
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com/in/helsa-putri-21b38424a/" target="_blank" style="text-decoration: underline;">
            <i class="fab fa-linkedin"></i> LinkedIn
        </a>
    </li>
    <li>
        <a href="https://github.com/helsasp" target="_blank" style="text-decoration: underline;">
            <i class="fab fa-github"></i> GitHub
        </a>
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
<?php endif; ?><?php /**PATH C:\laragon\www\laravel11\resources\views/contact.blade.php ENDPATH**/ ?>