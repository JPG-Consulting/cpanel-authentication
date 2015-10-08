<?php
/**
 * cPanel
 *
 * @link      http://github.com/jpg-consulting/cpanel-authentication
 * @copyright Copyright (c) 2015 Juan Pedro Gonzalez Gutierrez
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace CPanel\Authentication;

/**
 * Provides an API for authentication and identity management
 */
interface AuthenticationServiceInterface
{
    /**
     * Authenticates and provides an authentication result
     *
     * @return Result
     */
    public function authenticate();

    /**
     * Returns true if and only if an identity is available
     *
     * @return bool
     */
    public function hasIdentity();

    /**
     * Returns the authenticated identity or null if no identity is available
     *
     * @return mixed|null
     */
    public function getIdentity();

    /**
     * Clears the identity
     *
     * @return void
     */
    public function clearIdentity();
}
