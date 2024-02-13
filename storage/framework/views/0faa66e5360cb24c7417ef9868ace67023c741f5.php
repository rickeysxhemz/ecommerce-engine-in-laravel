<?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-gd">
                <div class="product-card">
                    <div class="product-thumb" >
                        <?php if(!$item->is_stock()): ?>
                            <div class="product-badge bg-secondary border-default text-body
                            "><?php echo e(__('out of stock')); ?></div>
                        <?php endif; ?>
                        <?php if($item->previous_price && $item->previous_price !=0): ?>
                        <div class="product-badge product-badge2 bg-info"> -<?php echo e(PriceHelper::DiscountPercentage($item)); ?></div>
                        <?php endif; ?>
                            <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" alt="Product">
                            <div class="product-button-group"><a class="product-button wishlist_store" href="<?php echo e(route('user.wishlist.store',$item->id)); ?>" title="<?php echo e(__('Wishlist')); ?>"><i class="icon-heart"></i></a>
                                <a data-target="<?php echo e(route('fornt.compare.product',$item->id)); ?>" class="product-button product_compare" href="javascript:;" class="<?php echo e(__('Compare')); ?>"><i class="icon-repeat"></i></a>
                                <?php echo $__env->make('includes.item_footer',['sitem' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                    </div>
                    <div class="product-card-body">
                        <div class="product-category"><a href="<?php echo e(route('front.catalog').'?category='.$item->category->slug); ?>"><?php echo e($item->category->name); ?></a></div>
                        <h3 class="product-title"><a href="<?php echo e(route('front.product',$item->slug)); ?>">
                            <?php echo e(strlen(strip_tags($item->name)) > 35 ? substr(strip_tags($item->name), 0, 35) : strip_tags($item->name)); ?>

                        </a></h3>
                        <div class="rating-stars">
                        <i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i>
                        </div>
                        <h4 class="product-price">
                            <?php if($item->previous_price !=0): ?>
                            <del><?php echo e(PriceHelper::setPreviousPrice($item->previous_price)); ?></del>
                            <?php endif; ?>
                            <?php echo e(PriceHelper::grandCurrencyPrice($item)); ?>

                            </h4>
                    </div>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="card">
                <div class="card-body text-center">
                    <?php echo e(__('No Product Found')); ?>

                </div>
            </div>
            <?php endif; ?>

            <script type="text/javascript" src="<?php echo e(asset('assets/front/js/extraindex.js')); ?>"></script>
<?php /**PATH /home/dealmulr/public_html/core/resources/views/includes/normal_product.blade.php ENDPATH**/ ?>