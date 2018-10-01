<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/0e91381')) {
            // _assetic_0e91381
            if ($pathinfo === '/css/0e91381.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0e91381',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0e91381',);
            }

            if (0 === strpos($pathinfo, '/css/0e91381_b')) {
                // _assetic_0e91381_0
                if ($pathinfo === '/css/0e91381_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0e91381',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0e91381_0',);
                }

                // _assetic_0e91381_1
                if ($pathinfo === '/css/0e91381_blog-post_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0e91381',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_0e91381_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/0a9d38c')) {
            // _assetic_0a9d38c
            if ($pathinfo === '/js/0a9d38c.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0a9d38c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0a9d38c',);
            }

            if (0 === strpos($pathinfo, '/js/0a9d38c_')) {
                // _assetic_0a9d38c_0
                if ($pathinfo === '/js/0a9d38c_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0a9d38c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0a9d38c_0',);
                }

                // _assetic_0a9d38c_1
                if ($pathinfo === '/js/0a9d38c_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0a9d38c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0a9d38c_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/secure/c')) {
            if (0 === strpos($pathinfo, '/secure/category')) {
                // secure_category_index
                if (rtrim($pathinfo, '/') === '/secure/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_secure_category_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'secure_category_index');
                    }

                    return array (  '_controller' => 'MainBundle\\Controller\\CategoryController::indexAction',  '_route' => 'secure_category_index',);
                }
                not_secure_category_index:

                // secure_category_new
                if ($pathinfo === '/secure/category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_secure_category_new;
                    }

                    return array (  '_controller' => 'MainBundle\\Controller\\CategoryController::newAction',  '_route' => 'secure_category_new',);
                }
                not_secure_category_new:

                // secure_category_show
                if (preg_match('#^/secure/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_secure_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_category_show')), array (  '_controller' => 'MainBundle\\Controller\\CategoryController::showAction',));
                }
                not_secure_category_show:

                // secure_category_edit
                if (preg_match('#^/secure/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_secure_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_category_edit')), array (  '_controller' => 'MainBundle\\Controller\\CategoryController::editAction',));
                }
                not_secure_category_edit:

                // secure_category_delete
                if (preg_match('#^/secure/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_secure_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_category_delete')), array (  '_controller' => 'MainBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_secure_category_delete:

            }

            if (0 === strpos($pathinfo, '/secure/comment')) {
                // secure_comment_index
                if (rtrim($pathinfo, '/') === '/secure/comment') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_secure_comment_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'secure_comment_index');
                    }

                    return array (  '_controller' => 'MainBundle\\Controller\\CommentController::indexAction',  '_route' => 'secure_comment_index',);
                }
                not_secure_comment_index:

                // secure_comment_new
                if ($pathinfo === '/secure/comment/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_secure_comment_new;
                    }

                    return array (  '_controller' => 'MainBundle\\Controller\\CommentController::newAction',  '_route' => 'secure_comment_new',);
                }
                not_secure_comment_new:

                // secure_comment_show
                if (preg_match('#^/secure/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_secure_comment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_comment_show')), array (  '_controller' => 'MainBundle\\Controller\\CommentController::showAction',));
                }
                not_secure_comment_show:

                // secure_comment_edit
                if (preg_match('#^/secure/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_secure_comment_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_comment_edit')), array (  '_controller' => 'MainBundle\\Controller\\CommentController::editAction',));
                }
                not_secure_comment_edit:

                // secure_comment_delete
                if (preg_match('#^/secure/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_secure_comment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_comment_delete')), array (  '_controller' => 'MainBundle\\Controller\\CommentController::deleteAction',));
                }
                not_secure_comment_delete:

            }

        }

        // main_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main_default_index');
            }

            return array (  '_controller' => 'MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'main_default_index',);
        }

        // main_default_index_1
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category(?:/(?P<categoryCode>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'main_default_index_1')), array (  'categoryCode' => NULL,  '_controller' => 'MainBundle\\Controller\\DefaultController::indexAction',));
        }

        // main_default_post
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<postCode>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'main_default_post')), array (  '_controller' => 'MainBundle\\Controller\\DefaultController::postAction',));
        }

        if (0 === strpos($pathinfo, '/se')) {
            // main_default_search
            if ($pathinfo === '/search') {
                return array (  '_controller' => 'MainBundle\\Controller\\DefaultController::searchAction',  '_route' => 'main_default_search',);
            }

            if (0 === strpos($pathinfo, '/secure')) {
                if (0 === strpos($pathinfo, '/secure/post')) {
                    // secure_post_index
                    if (rtrim($pathinfo, '/') === '/secure/post') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_secure_post_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'secure_post_index');
                        }

                        return array (  '_controller' => 'MainBundle\\Controller\\PostController::indexAction',  '_route' => 'secure_post_index',);
                    }
                    not_secure_post_index:

                    // secure_post_new
                    if ($pathinfo === '/secure/post/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_secure_post_new;
                        }

                        return array (  '_controller' => 'MainBundle\\Controller\\PostController::newAction',  '_route' => 'secure_post_new',);
                    }
                    not_secure_post_new:

                    // secure_post_show
                    if (preg_match('#^/secure/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_secure_post_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_post_show')), array (  '_controller' => 'MainBundle\\Controller\\PostController::showAction',));
                    }
                    not_secure_post_show:

                    // secure_post_edit
                    if (preg_match('#^/secure/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_secure_post_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_post_edit')), array (  '_controller' => 'MainBundle\\Controller\\PostController::editAction',));
                    }
                    not_secure_post_edit:

                    // secure_post_delete
                    if (preg_match('#^/secure/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_secure_post_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'secure_post_delete')), array (  '_controller' => 'MainBundle\\Controller\\PostController::deleteAction',));
                    }
                    not_secure_post_delete:

                }

                // main_secure_index
                if (rtrim($pathinfo, '/') === '/secure') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'main_secure_index');
                    }

                    return array (  '_controller' => 'MainBundle\\Controller\\SecureController::indexAction',  '_route' => 'main_secure_index',);
                }

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'MainBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // _logout
        if ($pathinfo === '/secure/logout') {
            return array('_route' => '_logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
