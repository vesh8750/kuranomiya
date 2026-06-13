<?php
defined('ABSPATH') || exit;

/**
 * Build a URL for a WordPress Page template with optional query args and pagination.
 *
 * @param string      $page_url          Permalink of the archive page.
 * @param array       $query_args        Filter/sort query arguments.
 * @param int         $page              Target page number.
 * @param string|null $page_query_param  When set, pagination is appended as a query
 *                                       argument (e.g. column_pg=2). Required when the
 *                                       page slug conflicts with a CPT rewrite base.
 *                                       When null, uses /page/N/ path segments.
 */
function kuranomiya_build_page_template_url(
    string $page_url,
    array $query_args = [],
    int $page = 1,
    ?string $page_query_param = null
): string {
    $query_args = array_filter(
        $query_args,
        static fn($value) => $value !== null && $value !== ''
    );

    if ($page > 1) {
        if ($page_query_param !== null) {
            $query_args[$page_query_param] = $page;

            return add_query_arg($query_args, $page_url);
        }

        $url = trailingslashit($page_url) . 'page/' . $page . '/';

        return $query_args ? add_query_arg($query_args, $url) : $url;
    }

    return $query_args ? add_query_arg($query_args, $page_url) : $page_url;
}

/**
 * Build a smart pagination item list with ellipsis for large page counts.
 *
 * @return array<int|string> Page numbers or the string 'ellipsis'.
 */
function kuranomiya_get_pagination_items(int $current, int $total): array {
    if ($total <= 1) {
        return [];
    }

    if ($total <= 7) {
        return range(1, $total);
    }

    $items = [1];

    $start = max(2, $current - 2);
    $end   = min($total - 1, $current + 2);

    if ($current <= 4) {
        $start = 2;
        $end   = min($total - 1, 5);
    }

    if ($current >= $total - 3) {
        $start = max(2, $total - 4);
        $end   = $total - 1;
    }

    if ($start > 2) {
        $items[] = 'ellipsis';
    }

    for ($i = $start; $i <= $end; $i++) {
        $items[] = $i;
    }

    if ($end < $total - 1) {
        $items[] = 'ellipsis';
    }

    $items[] = $total;

    return $items;
}

/**
 * Render archive pagination matching the purchase record design.
 *
 * @param callable(int): string $page_url Returns the URL for a given page number.
 */
function kuranomiya_render_archive_pagination(int $current, int $total, callable $page_url): void {
    if ($total <= 1) {
        return;
    }

    $current = max(1, min($current, $total));
    $items   = kuranomiya_get_pagination_items($current, $total);

    $link_class      = 'w-9 h-9 sm:w-10 sm:h-10 flex flex-shrink-0 items-center justify-center bg-white text-[#B57A3F] border border-[#DED7C7] hover:bg-[#F6F2E9] transition-colors shadow-xs';
    $active_class    = 'w-9 h-9 sm:w-10 sm:h-10 flex flex-shrink-0 items-center justify-center bg-[#B57A3F] text-white cursor-pointer transition-colors shadow-xs';
    $disabled_class  = 'opacity-40 cursor-not-allowed pointer-events-none';
    $ellipsis_class  = 'w-9 h-9 sm:w-10 sm:h-10 flex flex-shrink-0 items-center justify-center text-[#B57A3F] select-none';
    $nav_label_class = 'sr-only';

    ?>
    <nav
        class="flex max-w-full flex-wrap items-center justify-end gap-1.5 sm:gap-2 font-sans font-medium text-[14px] md:text-[15px]"
        aria-label="<?php esc_attr_e('Pagination', 'kuranomiya'); ?>">
        <?php if ($current > 1) : ?>
            <a href="<?php echo esc_url($page_url($current - 1)); ?>"
                class="<?php echo esc_attr($link_class); ?>"
                aria-label="<?php esc_attr_e('Previous page', 'kuranomiya'); ?>">
                <span class="<?php echo esc_attr($nav_label_class); ?>"><?php esc_html_e('Previous', 'kuranomiya'); ?></span>
                <span aria-hidden="true">&lsaquo;</span>
            </a>
        <?php else : ?>
            <span class="<?php echo esc_attr($link_class . ' ' . $disabled_class); ?>"
                aria-disabled="true">
                <span class="<?php echo esc_attr($nav_label_class); ?>"><?php esc_html_e('Previous', 'kuranomiya'); ?></span>
                <span aria-hidden="true">&lsaquo;</span>
            </span>
        <?php endif; ?>

        <?php foreach ($items as $item) : ?>
            <?php if ($item === 'ellipsis') : ?>
                <span class="<?php echo esc_attr($ellipsis_class); ?>" aria-hidden="true">&hellip;</span>
            <?php elseif ((int) $item === $current) : ?>
                <span class="<?php echo esc_attr($active_class); ?>" aria-current="page">
                    <?php echo esc_html((string) $item); ?>
                </span>
            <?php else : ?>
                <a href="<?php echo esc_url($page_url((int) $item)); ?>"
                    class="<?php echo esc_attr($link_class); ?>">
                    <?php echo esc_html((string) $item); ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>

        <?php if ($current < $total) : ?>
            <a href="<?php echo esc_url($page_url($current + 1)); ?>"
                class="<?php echo esc_attr($link_class); ?>"
                aria-label="<?php esc_attr_e('Next page', 'kuranomiya'); ?>">
                <span class="<?php echo esc_attr($nav_label_class); ?>"><?php esc_html_e('Next', 'kuranomiya'); ?></span>
                <span aria-hidden="true">&rsaquo;</span>
            </a>
        <?php else : ?>
            <span class="<?php echo esc_attr($link_class . ' ' . $disabled_class); ?>"
                aria-disabled="true">
                <span class="<?php echo esc_attr($nav_label_class); ?>"><?php esc_html_e('Next', 'kuranomiya'); ?></span>
                <span aria-hidden="true">&rsaquo;</span>
            </span>
        <?php endif; ?>
    </nav>
    <?php
}
