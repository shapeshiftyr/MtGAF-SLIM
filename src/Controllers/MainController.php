<?php

namespace App\Controllers;

use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use \Interop\Container\ContainerInterface as ContainerInterface;

class MainController
{
    private $view;
    private $logger;
    protected $table;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;;
    }

    public function home($request, $response, $args) {
        // your code
        // to access items in the container... $this->container->get('');
        return '';
    }
    public function card($request, $response, $args) {
        $s3 = new \Aws\S3\S3Client([
            'version' => 'latest',
            'region'  => 'us-east-2',
            'bucket_endpoint' => true
        ]);

        $image = $s3->getObject([
            'Bucket' => 'mtgaf',
            'Key'    => 'mtgaf/'.$args['set'].'/'.$args['card'].'.xlhq.jpg',
        ]);

        $response->write(file_get_contents($image['@metadata']['effectiveUri']));
        return $response->withHeader('Content-type', 'image/jpeg');
    }

    public function setCard($request, $response, $args) {
        $s3 = new \Aws\S3\S3Client([
            'version' => 'latest',
            'region'  => 'us-east-2',
            'bucket_endpoint' => true
        ]);

        $image = $s3->getObject([
            'Bucket' => 'mtgaf',
            'Key'    => 'mtgaf/'.$args['set'].'/'.$args['card'].'.xlhq.jpg',
        ]);

        $response->write(file_get_contents($image['@metadata']['effectiveUri']));
        return $response->withHeader('Content-type', 'image/jpeg');
    }

    public function setCardLang($request, $response, $args) {
        $s3 = new \Aws\S3\S3Client([
            'version' => 'latest',
            'region'  => 'us-east-2',
            'bucket_endpoint' => true
        ]);

        $image = $s3->getObject([
            'Bucket' => 'mtgaf',
            'Key'    => 'mtgaf/'.$args['set'].'/'.$args['card'].'.xlhq.jpg',
        ]);

        $response->write(file_get_contents($image['@metadata']['effectiveUri']));
        return $response->withHeader('Content-type', 'image/jpeg');
    }
}