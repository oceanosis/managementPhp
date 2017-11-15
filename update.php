<?php



require 'aws.phar';
date_default_timezone_set('Europe/Istanbul');

//$sdk = new Aws\Sdk([
//    'region'   => 'us-east-1',
//    'version'  => 'latest',
//    'endpoint' => 'http://localhost:8000' // Dynamodb Endpoint
//]);


use Aws\DynamoDb\DynamoDbClient;

$client = new DynamoDbClient([
    'profile' => 'default',
    'region'  => 'us-east-1',
    'version' => 'latest'
    'endpoint' => 'http://localhost:8000' // Dynamodb Endpoint
]);

#$result = $client->describeTable(array(
#    'TableName' => 'management'
#));
#
#echo $result;
#
#$response = $client->putItem(array(
#    'TableName' => 'management',
#    'Item' => array(
#        'Name'   => array('S' => 'email'),
#        'Value'  => array('S' => 'dumluufuk@gmail.com')
#    )
#));

#echo $response;

$response = $client->query(array(
    'TableName' => 'management',
    'KeyConditionExpression' => 'Name = :v_hash and Value = :v_range',
    'ExpressionAttributeValues' =>  array (
        ':v_hash'  => array('S' => 'email'),
        ':v_range' => array('S' => 'dumluufuk@gmail.com')
    )
));

echo $response;
?>
