<?php
/**
 * Get all required functions files
 *
 * @package Virtue Theme
 */

define( 'OPTIONS_SLUG', 'virtue_premium' );
define( 'LANGUAGE_SLUG', 'virtue' );
define( 'VIRTUE_PREMIUM_PATH', __FILE__ );
load_theme_textdomain( 'virtue', get_template_directory() . '/languages' );

/*
 * Init Theme Options
 */
require_once trailingslashit( get_template_directory() ) . 'themeoptions/class-virtue-theme-options.php'; // Theme options class.
require_once trailingslashit( get_template_directory() ) . 'themeoptions/framework.php'; // Options framework
require_once trailingslashit( get_template_directory() ) . 'themeoptions/options.php'; // Options framework
require_once trailingslashit( get_template_directory() ) . 'themeoptions/options/virtue_extension.php'; // Options framework extension.
require_once trailingslashit( get_template_directory() ) . 'kt-framework/extensions.php'; // Remove options from the admin.

/*
 * Init Theme Startup/Core utilities
 */
require_once trailingslashit( get_template_directory() ) . 'lib/utils.php'; // Utility functions.
require_once trailingslashit( get_template_directory() ) . 'lib/init.php'; // Initial theme setup and constants.
require_once trailingslashit( get_template_directory() ) . 'lib/classes/class-virtue-sidebar.php'; // Sidebar class.
require_once trailingslashit( get_template_directory() ) . 'lib/classes/class-virtue-sidebar-id.php'; // Sidebar class.
require_once trailingslashit( get_template_directory() ) . 'lib/config.php'; // Configuration.
require_once trailingslashit( get_template_directory() ) . 'lib/cleanup.php'; // Cleanup
require_once trailingslashit( get_template_directory() ) . 'lib/custom-nav.php'; // Nav Options
require_once trailingslashit( get_template_directory() ) . 'lib/nav.php'; // Custom nav modifications
require_once trailingslashit( get_template_directory() ) . 'lib/cmb2/init.php'; // Custom metaboxes
require_once trailingslashit( get_template_directory() ) . 'lib/metaboxes/virtue-cmb-extensions.php'; // Custom metaboxes
require_once trailingslashit( get_template_directory() ) . 'lib/aq_resizer.php'; // Resize on the fly
require_once trailingslashit( get_template_directory() ) . 'lib/elementor/elementor-support.php'; // elementor support
require_once trailingslashit( get_template_directory() ) . 'lib/classes/class-kadence-image-processing.php'; // Image processing
require_once trailingslashit( get_template_directory() ) . 'lib/classes/class-virtue-get-image.php'; // Resize images
require_once trailingslashit( get_template_directory() ) . 'lib/classes/class-virtue-lazy-load.php'; // Lazy Load for images
require_once trailingslashit( get_template_directory() ) . 'lib/classes/class-virtue-plugin-check.php'; // Plugin Check
require_once trailingslashit( get_template_directory() ) . 'lib/image_functions.php'; // Image Functions
require_once trailingslashit( get_template_directory() ) . 'lib/taxonomy-meta-class.php'; // Taxonomy meta boxes
require_once trailingslashit( get_template_directory() ) . 'lib/taxonomy-meta.php'; // Taxonomy meta boxes
require_once trailingslashit( get_template_directory() ) . 'lib/comments.php'; // Custom comments modifications.
require_once trailingslashit( get_template_directory() ) . 'lib/post-types.php'; // Post Types.
require_once trailingslashit( get_template_directory() ) . 'lib/vendor/class-mobile-detect.php'; // Mobile Detect.
require_once trailingslashit( get_template_directory() ) . 'lib/build-slider.php'; // Build Slider Functions.
require_once trailingslashit( get_template_directory() ) . 'lib/admin/virtue-plugins-activate.php'; // Plugin Activation.
require_once trailingslashit( get_template_directory() ) . 'kt-framework/status.php'; // System status.
require_once trailingslashit( get_template_directory() ) . 'kt-framework/gfont-downloader.php'; // System status.
require_once trailingslashit( get_template_directory() ) . 'lib/depreciated.php'; // depreciated filters and functions.

/*
 * Init Shortcodes
 */
require_once locate_template('/lib/kad_shortcodes/shortcodes.php'); // Shortcodes
require_once locate_template('/lib/kad_shortcodes/carousel_shortcodes.php');   				// Carousel Shortcodes
require_once locate_template('/lib/kad_shortcodes/custom_carousel_shortcodes.php');   		// Carousel Shortcodes
require_once locate_template('/lib/kad_shortcodes/testimonial_shortcodes.php');   			// Carousel Shortcodes
require_once locate_template('/lib/kad_shortcodes/testimonial_form_shortcode.php');   		// Carousel Shortcodes
require_once locate_template('/lib/kad_shortcodes/blog_shortcodes.php');   					// Blog Shortcodes
require_once locate_template('/lib/kad_shortcodes/image_menu_shortcodes.php'); 				// image menu Shortcodes
require_once locate_template('/lib/kad_shortcodes/portfolio_shortcodes.php'); 				// Portfolio Shortcodes
require_once locate_template('/lib/kad_shortcodes/portfolio_type_shortcodes.php'); 			// Portfolio Shortcodes
require_once locate_template('/lib/kad_shortcodes/staff_shortcodes.php'); 					// Staff Shortcodes
require_once locate_template('/lib/kad_shortcodes/gallery.php');      						// Gallery Shortcode

/*
 * Init Widgets
 */
require_once trailingslashit( get_template_directory() ) . '/lib/premium_widgets.php'; 					// Premium Widgets
require_once trailingslashit( get_template_directory() ) . '/lib/widgets.php';         					// Sidebars and widgets main

/*
 * Template Hooks
 */
require_once trailingslashit( get_template_directory() ) . 'lib/pagebuilder/pagebuilder.php';          					// Pagebuilder functions
require_once trailingslashit( get_template_directory() ) . 'lib/pagebuilder/animations.php';          					// pagebuilder animations
require_once trailingslashit( get_template_directory() ) . 'lib/pagebuilder/prebuilt_layouts.php';          				// pagebuilder layouts
require_once trailingslashit( get_template_directory() ) . 'lib/custom.php';          					// Custom functions
require_once trailingslashit( get_template_directory() ) . 'lib/breadcrumbs.php';         				// Breadcrumbs
require_once trailingslashit( get_template_directory() ) . 'lib/template-hooks.php'; // Template Hooks.

require_once trailingslashit( get_template_directory() ) . 'lib/woocommerce/woo-core-hooks.php'; 				// Woocommerce core functions
require_once trailingslashit( get_template_directory() ) . 'lib/woocommerce/woo-archive-hooks.php'; 				// Woocommerce archive functions
require_once trailingslashit( get_template_directory() ) . 'lib/woocommerce/woo-single-product-hooks.php'; 		// Woocommerce single_product functions
require_once trailingslashit( get_template_directory() ) . 'lib/woo-account.php'; 								// Woocommerce account page functions

/**
 * Load Scripts
 */
require_once trailingslashit( get_template_directory() ) . 'lib/admin-scripts.php';    				// Admin Scripts
require_once trailingslashit( get_template_directory() ) . 'lib/scripts.php';        					// Scripts and stylesheets
require_once trailingslashit( get_template_directory() ) . 'lib/custom_css.php'; 						// Fontend Custom CSS

/**
 * Updater
 */
require_once trailingslashit( get_template_directory() ) . 'kt-framework/kadence-api-manager/kadence-api-manager.php'; // Load API.
require_once trailingslashit( get_template_directory() ) . 'lib/admin/virtue-dashboard.php'; // Load Dashboard.
require_once trailingslashit( get_template_directory() ) . 'kadence-update-checker/kadence-update-checker.php'; // Updater.
require_once trailingslashit( get_template_directory() ) . 'kt-framework/kt-theme-updates.php'; // Load Update class.

/**
 * Admin Shortcode Btn
 */
function virtue_shortcode_init() {
	if ( is_admin() ) {
		if ( kad_is_edit_page() ) {
			require_once locate_template( '/lib/kad_shortcodes.php' );
		}
	}
}
add_action( 'init', 'virtue_shortcode_init' );


/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * @param string $sep Разделитель. По умолчанию ' » '.
 * @param array $l10n Для локализации. См. переменную `$default_l10n`.
 * @param array $args Опции. Смотрите переменную `$def_args`.
 *
 * @return void Выводит на экран HTML код
 *
 * version 3.3.3
 */
function kama_breadcrumbs($sep = ' / ', $l10n = array(), $args = array())
{
    $kb = new Kama_Breadcrumbs;
    echo $kb->get_crumbs($sep, $l10n, $args);
}

class Kama_Breadcrumbs
{

    public $arg;

    // Локализация
    static $l10n = [
        'home' => 'Главная',
        'paged' => 'Страница %d',
        '_404' => 'Ошибка 404',
        'search' => 'Результаты поиска по запросу - <b>%s</b>',
        'author' => 'Архив автора: <b>%s</b>',
        'year' => 'Архив за <b>%d</b> год',
        'month' => 'Архив за: <b>%s</b>',
        'day' => '',
        'attachment' => 'Медиа: %s',
        'tag' => 'Записи по метке: <b>%s</b>',
        'tax_tag' => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
        // tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
        // Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
    ];

    // Параметры по умолчанию
    static $args = [
        // выводить крошки на главной странице
        'on_front_page' => true,
        // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
        'show_post_title' => true,
        // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
        'show_term_title' => true,
        // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
        'title_patt' => '<span class="kb_title">%s</span>',
        // показывать последний разделитель, когда заголовок в конце не отображается
        'last_sep' => true,
        // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
        // или можно указать свой массив разметки:
        // array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
        'markup' => 'schema.org',
        // приоритетные таксономии, нужно когда запись в нескольких таксах
        'priority_tax' => ['category'],
        // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
        // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
        // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
        // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
        'priority_terms' => [],
        // добавлять rel=nofollow к ссылкам?
        'nofollow' => false,

        // служебные
        'sep' => '',
        'linkpatt' => '',
        'pg_end' => '',
    ];

    function get_crumbs($sep, $l10n, $args)
    {
        global $post, $wp_post_types;

        self::$args['sep'] = $sep;

        // Фильтрует дефолты и сливает
        $loc = (object)array_merge(apply_filters('kama_breadcrumbs_default_loc', self::$l10n), $l10n);
        $arg = (object)array_merge(apply_filters('kama_breadcrumbs_default_args', self::$args), $args);

        $arg->sep = '<span class="kb_sep">' . $arg->sep . '</span>'; // дополним

        // упростим
        $sep = &$arg->sep;
        $this->arg = &$arg;

        // микроразметка ---
        if (1) {
            $mark = &$arg->markup;

            // Разметка по умолчанию
            if (!$mark) {
                $mark = [
                    'wrappatt' => '<div class="kama_breadcrumbs">%s</div>',
                    'linkpatt' => '<a href="%s">%s</a>',
                    'sep_after' => '',
                ];
            } // rdf
            elseif ($mark === 'rdf.data-vocabulary.org') {
                $mark = [
                    'wrappatt' => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
                    'linkpatt' => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
                    'sep_after' => '</span>', // закрываем span после разделителя!
                ];
            } // schema.org
            elseif ($mark === 'schema.org') {
                $mark = [
                    'wrappatt' => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span class="breadcrumb-item">%s</span></div>',
                    'linkpatt' => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumb-item" href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
                    'sep_after' => '',
                ];
            } elseif (!is_array($mark)) {
                die(__CLASS__ . ': "markup" parameter must be array...');
            }

            $wrappatt = $mark['wrappatt'];
            $arg->linkpatt = $arg->nofollow ? str_replace('<a ', '<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
            $arg->sep .= $mark['sep_after'] . "\n";
        }

        $linkpatt = $arg->linkpatt; // упростим

        $q_obj = get_queried_object();

        // может это архив пустой таксы
        $ptype = null;
        if (!$post) {
            if (isset($q_obj->taxonomy)) {
                $ptype = $wp_post_types[get_taxonomy($q_obj->taxonomy)->object_type[0]];
            }
        } else {
            $ptype = $wp_post_types[$post->post_type];
        }

        // paged
        $arg->pg_end = '';
        $paged_num = get_query_var('paged') ?: get_query_var('page');
        if ($paged_num) {
            $arg->pg_end = $sep . sprintf($loc->paged, (int)$paged_num);
        }

        $pg_end = $arg->pg_end; // упростим

        $out = '';

        if (is_front_page()) {
            return $arg->on_front_page ? sprintf($wrappatt, ($paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home)) : '';
        } // страница записей, когда для главной установлена отдельная страница.
        elseif (is_home()) {
            $out = $paged_num ? (sprintf($linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title)) . $pg_end) : esc_html($q_obj->post_title);
        } elseif (is_404()) {
            $out = $loc->_404;
        } elseif (is_search()) {
            $out = sprintf($loc->search, esc_html($GLOBALS['s']));
        } elseif (is_author()) {
            $tit = sprintf($loc->author, esc_html($q_obj->display_name));
            $out = ($paged_num ? sprintf($linkpatt, get_author_posts_url($q_obj->ID, $q_obj->user_nicename) . $pg_end, $tit) : $tit);
        } elseif (is_year() || is_month() || is_day()) {
            $y_url = get_year_link($year = get_the_time('Y'));

            if (is_year()) {
                $tit = sprintf($loc->year, $year);
                $out = ($paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit);
            } // month day
            else {
                $y_link = sprintf($linkpatt, $y_url, $year);
                $m_url = get_month_link($year, get_the_time('m'));

                if (is_month()) {
                    $tit = sprintf($loc->month, get_the_time('F'));
                    $out = $y_link . $sep . ($paged_num ? sprintf($linkpatt, $m_url, $tit) . $pg_end : $tit);
                } elseif (is_day()) {
                    $m_link = sprintf($linkpatt, $m_url, get_the_time('F'));
                    $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
                }
            }
        } // Древовидные записи
        elseif (is_singular() && $ptype->hierarchical) {
            $out = $this->_add_title($this->_page_crumbs($post), $post);
        } // Таксы, плоские записи и вложения
        else {
            $term = $q_obj; // таксономии

            // определяем термин для записей (включая вложения attachments)
            if (is_singular()) {
                // изменим $post, чтобы определить термин родителя вложения
                if (is_attachment() && $post->post_parent) {
                    $save_post = $post; // сохраним
                    $post = get_post($post->post_parent);
                }

                // учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
                $taxonomies = get_object_taxonomies($post->post_type);
                // оставим только древовидные и публичные, мало ли...
                $taxonomies = array_intersect($taxonomies, get_taxonomies([
                    'hierarchical' => true,
                    'public' => true,
                ]));

                if ($taxonomies) {
                    // сортируем по приоритету
                    if (!empty($arg->priority_tax)) {

                        usort($taxonomies, static function ($a, $b) use ($arg) {
                            $a_index = array_search($a, $arg->priority_tax);
                            if ($a_index === false) {
                                $a_index = 9999999;
                            }

                            $b_index = array_search($b, $arg->priority_tax);
                            if ($b_index === false) {
                                $b_index = 9999999;
                            }

                            return ($b_index === $a_index) ? 0 : ($b_index < $a_index ? 1 : -1); // меньше индекс - выше
                        });
                    }

                    // пробуем получить термины, в порядке приоритета такс
                    foreach ($taxonomies as $taxname) {

                        if ($terms = get_the_terms($post->ID, $taxname)) {
                            // проверим приоритетные термины для таксы
                            $prior_terms = &$arg->priority_terms[$taxname];

                            if ($prior_terms && count($terms) > 2) {

                                foreach ((array)$prior_terms as $term_id) {
                                    $filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
                                    $_terms = wp_list_filter($terms, [$filter_field => $term_id]);

                                    if ($_terms) {
                                        $term = array_shift($_terms);
                                        break;
                                    }
                                }
                            } else {
                                $term = array_shift($terms);
                            }

                            break;
                        }
                    }
                }

                // вернем обратно (для вложений)
                if (isset($save_post)) {
                    $post = $save_post;
                }
            }

            // вывод

            // все виды записей с терминами или термины
            if ($term && isset($term->term_id)) {
                $term = apply_filters('kama_breadcrumbs_term', $term);

                // attachment
                if (is_attachment()) {
                    if (!$post->post_parent) {
                        $out = sprintf($loc->attachment, esc_html($post->post_title));
                    } else {
                        if (!$out = apply_filters('attachment_tax_crumbs', '', $term, $this)) {
                            $_crumbs = $this->_tax_crumbs($term, 'self');
                            $parent_tit = sprintf($linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent));
                            $_out = implode($sep, [$_crumbs, $parent_tit]);
                            $out = $this->_add_title($_out, $post);
                        }
                    }
                } // single
                elseif (is_single()) {
                    if (!$out = apply_filters('post_tax_crumbs', '', $term, $this)) {
                        $_crumbs = $this->_tax_crumbs($term, 'self');
                        $out = $this->_add_title($_crumbs, $post);
                    }
                } // не древовидная такса (метки)
                elseif (!is_taxonomy_hierarchical($term->taxonomy)) {
                    // метка
                    if (is_tag()) {
                        $out = $this->_add_title('', $term, sprintf($loc->tag, esc_html($term->name)));
                    } // такса
                    elseif (is_tax()) {
                        $post_label = $ptype->labels->name;
                        $tax_label = $GLOBALS['wp_taxonomies'][$term->taxonomy]->labels->name;
                        $out = $this->_add_title('', $term, sprintf($loc->tax_tag, $post_label, $tax_label, esc_html($term->name)));
                    }
                } // древовидная такса (рибрики)
                elseif (!$out = apply_filters('term_tax_crumbs', '', $term, $this)) {
                    $_crumbs = $this->_tax_crumbs($term, 'parent');
                    $out = $this->_add_title($_crumbs, $term, esc_html($term->name));
                }
            } // влоежния от записи без терминов
            elseif (is_attachment()) {
                $parent = get_post($post->post_parent);
                $parent_link = sprintf($linkpatt, get_permalink($parent), esc_html($parent->post_title));
                $_out = $parent_link;

                // вложение от записи древовидного типа записи
                if (is_post_type_hierarchical($parent->post_type)) {
                    $parent_crumbs = $this->_page_crumbs($parent);
                    $_out = implode($sep, [$parent_crumbs, $parent_link]);
                }

                $out = $this->_add_title($_out, $post);
            } // записи без терминов
            elseif (is_singular()) {
                $out = $this->_add_title('', $post);
            }
        }

        // замена ссылки на архивную страницу для типа записи
        $home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype);

        if ('' === $home_after) {
            // Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
            if ($ptype && $ptype->has_archive && !in_array($ptype->name, ['post', 'page', 'attachment'])
                && (is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)))
            ) {
                $pt_title = $ptype->labels->name;

                // первая страница архива типа записи
                if (is_post_type_archive() && !$paged_num) {
                    $home_after = sprintf($this->arg->title_patt, $pt_title);
                } // singular, paged post_type_archive, tax
                else {
                    $home_after = sprintf($linkpatt, get_post_type_archive_link($ptype->name), $pt_title);

                    $home_after .= (($paged_num && !is_tax()) ? $pg_end : $sep); // пагинация
                }
            }
        }

        $before_out = sprintf($linkpatt, home_url(), $loc->home) . ($home_after ? $sep . $home_after : ($out ? $sep : ''));

        $out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg);

        $out = sprintf($wrappatt, $before_out . $out);

        return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg);
    }

    function _page_crumbs($post)
    {
        $parent = $post->post_parent;

        $crumbs = [];
        while ($parent) {
            $page = get_post($parent);
            $crumbs[] = sprintf($this->arg->linkpatt, get_permalink($page), esc_html($page->post_title));
            $parent = $page->post_parent;
        }

        return implode($this->arg->sep, array_reverse($crumbs));
    }

    function _tax_crumbs($term, $start_from = 'self')
    {
        $termlinks = [];
        $term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
        while ($term_id) {
            $term = get_term($term_id, $term->taxonomy);
            $termlinks[] = sprintf($this->arg->linkpatt, get_term_link($term), esc_html($term->name));
            $term_id = $term->parent;
        }

        if ($termlinks) {
            return implode($this->arg->sep, array_reverse($termlinks));
        }

        return '';
    }

    // добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
    function _add_title($add_to, $obj, $term_title = '')
    {

        // упростим...
        $arg = &$this->arg;
        // $term_title чиститься отдельно, теги моугт быть...
        $title = $term_title ?: esc_html($obj->post_title);
        $show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

        // пагинация
        if ($arg->pg_end) {
            $link = $term_title ? get_term_link($obj) : get_permalink($obj);
            $add_to .= ($add_to ? $arg->sep : '') . sprintf($arg->linkpatt, $link, $title) . $arg->pg_end;
        } // дополняем - ставим sep
        elseif ($add_to) {
            if ($show_title) {
                $add_to .= $arg->sep . sprintf($arg->title_patt, $title);
            } elseif ($arg->last_sep) {
                $add_to .= $arg->sep;
            }
        } // sep будет потом...
        elseif ($show_title) {
            $add_to = sprintf($arg->title_patt, $title);
        }

        return $add_to;
    }

}


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    wp_enqueue_style( 'custom-css', '/wp-content/themes/virtue_premium/assets/css/custom.css' );
    wp_enqueue_style( 'slick-css', '/wp-content/themes/virtue_premium/assets/css/slick.css' );
    wp_enqueue_style( 'slick-theme', '/wp-content/themes/virtue_premium/assets/css/slick-theme.css' );
    wp_enqueue_script( 'custom-js', '/wp-content/themes/virtue_premium/assets/js/custom.js' );
    wp_enqueue_script( 'slick-js', '/wp-content/themes/virtue_premium/assets/js/slick.js' );

    wp_enqueue_script( 'jquery.maskedinput', '/wp-content/themes/virtue_premium/assets/js/jquery.mask.js' );
}

//add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
//function theme_name_scripts(){
//    wp_enqueue_script( 'custom', '/wp-content/themes/virtue_premium/assets/js/custom.js' );
//}
