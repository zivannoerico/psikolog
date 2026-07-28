<?php if($paginator->hasPages()): ?>
    <nav class="pagination-nav" role="navigation" aria-label="Navigasi halaman">

        
        <p class="pagination-info">
            Menampilkan
            <?php if($paginator->firstItem()): ?>
                <strong><?php echo e($paginator->firstItem()); ?></strong> — <strong><?php echo e($paginator->lastItem()); ?></strong>
            <?php else: ?>
                <?php echo e($paginator->count()); ?>

            <?php endif; ?>
            dari <strong><?php echo e($paginator->total()); ?></strong> artikel
        </p>

        
        <ul class="pagination-list">

            
            <li>
                <?php if($paginator->onFirstPage()): ?>
                    <span class="pagination-btn pagination-btn--disabled" aria-disabled="true" aria-label="Halaman sebelumnya">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
                    </span>
                <?php else: ?>
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="pagination-btn" rel="prev" aria-label="Halaman sebelumnya">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
                    </a>
                <?php endif; ?>
            </li>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                    <li>
                        <span class="pagination-btn pagination-btn--dots" aria-disabled="true"><?php echo e($element); ?></span>
                    </li>
                <?php endif; ?>

                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <?php if($page == $paginator->currentPage()): ?>
                                <span class="pagination-btn pagination-btn--active" aria-current="page"><?php echo e($page); ?></span>
                            <?php else: ?>
                                <a href="<?php echo e($url); ?>" class="pagination-btn" aria-label="Halaman <?php echo e($page); ?>"><?php echo e($page); ?></a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <li>
                <?php if($paginator->hasMorePages()): ?>
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="pagination-btn" rel="next" aria-label="Halaman berikutnya">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                <?php else: ?>
                    <span class="pagination-btn pagination-btn--disabled" aria-disabled="true" aria-label="Halaman berikutnya">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
                    </span>
                <?php endif; ?>
            </li>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH D:\psikolog\resources\views/vendor/pagination/default.blade.php ENDPATH**/ ?>