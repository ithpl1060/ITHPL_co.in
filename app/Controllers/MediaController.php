<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * MediaController
 *
 * Serves uploaded blog images from the writable/uploads/blogs/ directory.
 * This is the standard CI4 pattern for serving user-uploaded files that must
 * survive across Git deployments (writable/ is never tracked or cleaned by Git).
 *
 * Usage in browser: GET /media/blogs/{filename}
 */
class MediaController extends Controller
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    /**
     * Stream a blog image from writable/uploads/blogs/.
     * Falls back to images/Blog.png if the file is missing.
     */
    public function blog(string $filename): ResponseInterface
    {
        // Sanitize: strip any directory traversal attempts
        $filename = basename($filename);

        $filePath = WRITEPATH . 'uploads/blogs/' . $filename;

        if (is_file($filePath)) {
            $mimeType = mime_content_type($filePath) ?: 'image/jpeg';
            return $this->response
                ->setHeader('Content-Type', $mimeType)
                ->setHeader('Cache-Control', 'public, max-age=2592000') // 30 days
                ->setBody(file_get_contents($filePath));
        }

        // Graceful fallback: serve default blog placeholder
        $fallback = FCPATH . 'images/Blog.png';
        if (is_file($fallback)) {
            return $this->response
                ->setHeader('Content-Type', 'image/png')
                ->setHeader('Cache-Control', 'public, max-age=86400')
                ->setBody(file_get_contents($fallback));
        }

        return $this->response->setStatusCode(404);
    }
}
