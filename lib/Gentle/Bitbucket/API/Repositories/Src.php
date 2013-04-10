<?php

/*
 * This file is part of the bitbucket-api package.
 *
 * (c) Alexandru G. <alex@gentle.ro>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gentle\Bitbucket\API\Repositories;

use Gentle\Bitbucket\API;

/**
 * Src class
 *
 * Allows you to browse directories and view files.
 *
 * NOTE: This is read-only!
 *
 * @author  Alexandru G.    <alex@gentle.ro>
 */
class Src extends API\Api
{
    /**
     * Get a list of repo source
     *
     * @access public
     * @param  string $account  The team or individual account owning the repository.
     * @param  string $repo     The repository identifier.
     * @param  string $revision A value representing the revision or branch to list.
     * @param  string $path     The path can be a filename or a directory path.
     * @return mixed
     */
    public function get($account, $repo, $revision, $path)
    {
        return $this->requestGet(
            sprintf('repositories/%s/%s/src/%s/%s', $account, $repo, $revision, $path)
        );
    }
}
