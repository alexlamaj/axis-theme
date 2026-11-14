
<?php foreach (axis_get_services() as $axis_service) : ?>

    <div class="service-popup" id="service-popup-<?php echo esc_attr($axis_service['key']) ?>" data-service-id="<?php echo esc_attr($axis_service['id']); ?>" data-service-key="<?php echo esc_attr($axis_service['key']); ?>" role="dialog" aria-modal="true" aria-labelledby="service-popup-title-<?php echo esc_attr($axis_service['key']); ?>" inert>

        <div class="service-popup-overlay" data-service-close></div>

        <div class="service-popup-card">

            <button type="button" class="service-popup-close" data-service-close aria-label="<?php esc_attr_e('Close', 'axis-theme'); ?>"></button>
            <div class="service-popup-image"><?php echo $axis_service['image'] ? axis_icon($axis_service['image']) : ''; ?></div>

            <div class="service-popup-content">

                <div class="service-popup-title" id="service-popup-title-<?php echo esc_attr($axis_service['key']); ?>">
                    <?php echo esc_html($axis_service['title']); ?>
                </div>

                <?php if ($axis_service['text']) : ?>
                    <div class="service-popup-text"><?php echo esc_html($axis_service['text']); ?></div>
                <?php endif; ?>

                <?php if (!empty($axis_service['list'])) : ?>
                    <ul class="service-popup-list">
                        <?php foreach ((array) $axis_service['list'] as $axis_item) : ?>
                            <li><?php echo esc_html($axis_item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="service-popup-actions">
                    <a href="<?php echo esc_url($axis_service['projects_url']); ?>" class="service-popup-button"><?php _e('View Projects', 'axis-theme'); ?></a>
                    <?php if ($axis_service['redirect']) : ?>
                        <a href="<?php echo esc_url($axis_service['redirect']); ?>" class="service-popup-btn-sec"><?php _e('Visit the Operating Rooms Site', 'axis-theme'); ?></a>
                    <?php endif; ?>
                </div>

            </div>

        </div>

    </div>

<?php endforeach; ?>