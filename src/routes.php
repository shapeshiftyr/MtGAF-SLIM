<?php
$app->get('/', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/{set}/{card}', function ($request, $response, $args) {
    $s3 = new Aws\S3\S3Client([
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
});
