<?php
/**
 * The front page template
 *
 * @package vivamane
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-emerald-900 via-emerald-800 to-black min-h-[90vh] flex items-center">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="container mx-auto px-6 lg:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white space-y-8">
                    <span class="inline-block px-4 py-2 bg-amber-500/20 text-amber-400 rounded-full text-sm font-medium tracking-wide">
                        Science-Backed Hair Growth
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                        Thicker Hair <br>
                        <span class="text-amber-400">Starts Here</span>
                    </h1>
                    <p class="text-xl text-emerald-100/80 max-w-lg">
                        Premium supplements and serums formulated with clean, natural ingredients to help you achieve the healthy, fuller hair you deserve.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/shop" class="inline-flex items-center px-8 py-4 bg-amber-500 hover:bg-amber-400 text-black font-semibold rounded-full transition-all transform hover:scale-105">
                            Shop Now
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#how-it-works" class="inline-flex items-center px-8 py-4 border-2 border-white/30 hover:border-white text-white font-semibold rounded-full transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <!-- Product Image Placeholder -->
                    <div class="relative">
                        <div class="w-96 h-96 mx-auto bg-gradient-to-br from-amber-400/20 to-emerald-400/20 rounded-full flex items-center justify-center">
                            <span class="text-white/50 text-lg">Product Image</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="bg-neutral-100 py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-16 text-neutral-500">
                <div class="text-center">
                    <div class="text-3xl font-bold text-emerald-800">50K+</div>
                    <div class="text-sm">Happy Customers</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-emerald-800">4.9★</div>
                    <div class="text-sm">Average Rating</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-emerald-800">100%</div>
                    <div class="text-sm">Natural Ingredients</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-emerald-800">90 Day</div>
                    <div class="text-sm">Money Back Guarantee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem / Solution -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-neutral-900 mb-6">
                    Hair Loss Doesn't Have to Be Permanent
                </h2>
                <p class="text-xl text-neutral-600">
                    Whether it's stress, aging, or genetics, our scientifically formulated products work at the root cause to restore your hair's natural thickness and shine.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-neutral-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-3">The Problem</h3>
                    <p class="text-neutral-600">Thinning hair affects confidence and self-esteem. Most products mask the issue without addressing root causes.</p>
                </div>
                <div class="bg-emerald-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-3">Our Solution</h3>
                    <p class="text-neutral-600">Clean, science-backed formulas that nourish follicles from within and stimulate natural hair growth.</p>
                </div>
                <div class="bg-amber-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-3">The Result</h3>
                    <p class="text-neutral-600">Visibly thicker, stronger, healthier hair in as little as 90 days. Confidence restored.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-24 bg-neutral-50">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-neutral-900 mb-4">
                    Our Bestsellers
                </h2>
                <p class="text-xl text-neutral-600">Premium formulas for every hair goal</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                // Get WooCommerce featured products
                if ( class_exists( 'WooCommerce' ) ) {
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 4,
                        'meta_key'       => 'total_sales',
                        'orderby'        => 'meta_value_num',
                        'order'          => 'DESC',
                    );
                    
                    $products = new WP_Query( $args );
                    
                    if ( $products->have_posts() ) :
                        while ( $products->have_posts() ) : $products->the_post();
                            global $product;
                            ?>
                            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                                <div class="aspect-square bg-neutral-100 relative overflow-hidden">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
                                    <?php else : ?>
                                        <div class="w-full h-full flex items-center justify-center text-neutral-400">
                                            <span>Product Image</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="p-6">
                                    <h3 class="font-bold text-lg text-neutral-900 mb-2">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-emerald-700">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <p class="text-neutral-500 text-sm mb-4 line-clamp-2"><?php echo wp_trim_words( get_the_excerpt(), 12 ); ?></p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xl font-bold text-emerald-800"><?php echo $product->get_price_html(); ?></span>
                                        <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="px-4 py-2 bg-emerald-800 hover:bg-emerald-700 text-white text-sm font-medium rounded-full transition-colors">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Placeholder products if no WooCommerce products exist
                        $placeholders = array(
                            array( 'name' => 'Biotin Hair Gummies', 'price' => '$29.99', 'desc' => 'Delicious gummies packed with biotin and vitamins for stronger hair.' ),
                            array( 'name' => 'Hair Growth Serum', 'price' => '$49.99', 'desc' => 'Concentrated serum to stimulate follicles and boost growth.' ),
                            array( 'name' => 'Rosemary Scalp Oil', 'price' => '$34.99', 'desc' => 'Nourishing oil to improve scalp health and circulation.' ),
                            array( 'name' => 'Hair Vitamin Complex', 'price' => '$39.99', 'desc' => 'Complete daily vitamin for optimal hair nutrition.' ),
                        );
                        
                        foreach ( $placeholders as $item ) :
                            ?>
                            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                                <div class="aspect-square bg-neutral-100 relative overflow-hidden flex items-center justify-center">
                                    <span class="text-neutral-400">Product Image</span>
                                </div>
                                <div class="p-6">
                                    <h3 class="font-bold text-lg text-neutral-900 mb-2"><?php echo esc_html( $item['name'] ); ?></h3>
                                    <p class="text-neutral-500 text-sm mb-4"><?php echo esc_html( $item['desc'] ); ?></p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xl font-bold text-emerald-800"><?php echo esc_html( $item['price'] ); ?></span>
                                        <a href="/shop" class="px-4 py-2 bg-emerald-800 hover:bg-emerald-700 text-white text-sm font-medium rounded-full transition-colors">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    endif;
                }
                ?>
            </div>
            
            <div class="text-center mt-12">
                <a href="/shop" class="inline-flex items-center px-8 py-4 bg-emerald-800 hover:bg-emerald-700 text-white font-semibold rounded-full transition-all">
                    View All Products
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-neutral-900 mb-4">
                    How It Works
                </h2>
                <p class="text-xl text-neutral-600">Three simple steps to healthier hair</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                <div class="text-center">
                    <div class="w-20 h-20 bg-emerald-800 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">1</div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-4">Choose Your Products</h3>
                    <p class="text-neutral-600">Select from our range of supplements and topical treatments based on your hair goals.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-emerald-800 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">2</div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-4">Stay Consistent</h3>
                    <p class="text-neutral-600">Use daily as directed. Consistency is key for visible results within 90 days.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-emerald-800 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">3</div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-4">See Results</h3>
                    <p class="text-neutral-600">Watch your hair transform with thicker, stronger, healthier growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients -->
    <section class="py-24 bg-emerald-900 text-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                        Clean Ingredients, <br>
                        <span class="text-amber-400">Real Results</span>
                    </h2>
                    <p class="text-xl text-emerald-100/80 mb-8">
                        Every Vivamane product is formulated with naturally-derived, science-backed ingredients. No harsh chemicals, no fillers, no compromises.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-amber-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Biotin (Vitamin B7)</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-amber-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Rosemary Extract</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-amber-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Saw Palmetto</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-amber-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Keratin Peptides</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-amber-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Zinc & Iron</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-amber-400 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Vitamin E</span>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:flex justify-center">
                    <div class="w-80 h-80 bg-gradient-to-br from-amber-400/20 to-emerald-400/20 rounded-full flex items-center justify-center">
                        <span class="text-white/50">Ingredients Image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-neutral-50">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-neutral-900 mb-4">
                    Real People, Real Results
                </h2>
                <p class="text-xl text-neutral-600">See what our customers are saying</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="flex items-center gap-1 text-amber-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-neutral-700 mb-6">"After just 2 months, I noticed baby hairs growing around my hairline. I was skeptical at first, but Vivamane actually works!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 font-bold">SM</div>
                        <div>
                            <div class="font-semibold text-neutral-900">Sarah M.</div>
                            <div class="text-sm text-neutral-500">Verified Buyer</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="flex items-center gap-1 text-amber-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-neutral-700 mb-6">"My barber asked what I've been doing differently. My hair is noticeably thicker and my bald spot is filling in. Game changer!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 font-bold">JT</div>
                        <div>
                            <div class="font-semibold text-neutral-900">James T.</div>
                            <div class="text-sm text-neutral-500">Verified Buyer</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="flex items-center gap-1 text-amber-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-neutral-700 mb-6">"The rosemary oil smells amazing and my scalp feels so much healthier. Less shedding in just 3 weeks. Highly recommend!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-700 font-bold">AL</div>
                        <div>
                            <div class="font-semibold text-neutral-900">Ashley L.</div>
                            <div class="text-sm text-neutral-500">Verified Buyer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-12 max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-neutral-900 mb-4">
                    Frequently Asked Questions
                </h2>
            </div>
            
            <div class="space-y-4">
                <details class="group bg-neutral-50 rounded-xl">
                    <summary class="flex items-center justify-between p-6 cursor-pointer font-semibold text-neutral-900">
                        How long until I see results?
                        <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600">
                        Most customers notice reduced shedding within 2-4 weeks. Visible new growth typically appears within 60-90 days of consistent use.
                    </div>
                </details>
                
                <details class="group bg-neutral-50 rounded-xl">
                    <summary class="flex items-center justify-between p-6 cursor-pointer font-semibold text-neutral-900">
                        Are your products safe for color-treated hair?
                        <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600">
                        Yes! All Vivamane products are formulated to be safe for color-treated, chemically processed, and all hair types.
                    </div>
                </details>
                
                <details class="group bg-neutral-50 rounded-xl">
                    <summary class="flex items-center justify-between p-6 cursor-pointer font-semibold text-neutral-900">
                        What is your return policy?
                        <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600">
                        We offer a 90-day money-back guarantee. If you're not satisfied with your results, simply contact us for a full refund.
                    </div>
                </details>
                
                <details class="group bg-neutral-50 rounded-xl">
                    <summary class="flex items-center justify-between p-6 cursor-pointer font-semibold text-neutral-900">
                        Do I need a prescription?
                        <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </summary>
                    <div class="px-6 pb-6 text-neutral-600">
                        No prescription needed. All Vivamane products are made with natural, over-the-counter ingredients.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 bg-gradient-to-br from-emerald-900 via-emerald-800 to-black text-white">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                Ready to Transform Your Hair?
            </h2>
            <p class="text-xl text-emerald-100/80 max-w-2xl mx-auto mb-10">
                Join thousands of happy customers who've discovered the Vivamane difference. Your journey to thicker, healthier hair starts today.
            </p>
            <a href="/shop" class="inline-flex items-center px-10 py-5 bg-amber-500 hover:bg-amber-400 text-black font-bold text-lg rounded-full transition-all transform hover:scale-105">
                Shop Now & Save 20%
                <svg class="ml-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <p class="text-emerald-200/60 mt-6 text-sm">Free shipping on orders over $50 • 90-day money-back guarantee</p>
        </div>
    </section>

</main>

<?php
get_footer();