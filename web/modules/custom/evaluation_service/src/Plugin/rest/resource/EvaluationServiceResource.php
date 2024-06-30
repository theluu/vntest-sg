<?php

namespace Drupal\evaluation_service\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\ClientInterface;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;
use Drupal\Core\Site\Settings;

/**
 * Provides a Resource to get and post data using REST.
 *
 * @RestResource(
 *   id = "evaluation_service_resource",
 *   label = @Translation("Evaluation Service Resource"),
 *   uri_paths = {
 *     "canonical" = "/api/evaluation-service",
 *     "create" = "/api/evaluation-service"
 *   }
 * )
 */
class EvaluationServiceResource extends ResourceBase {

  /**
   * The HTTP client.
   *
   * @var \GuzzleHttp\ClientInterface
   */
  protected $httpClient;

  /**
   * Constructs a new SingaporeIntegrationResource object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param array $serializer_formats
   *   The available serialization formats.
   * @param \Psr\Log\LoggerInterface $logger_channel
   *   The logger channel.
   * @param \GuzzleHttp\ClientInterface $http_client
   *   The HTTP client.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, array $serializer_formats, LoggerInterface $logger_channel, ClientInterface $http_client) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $serializer_formats, $logger_channel);
    $this->httpClient = $http_client;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->getParameter('serializer.formats'),
      $container->get('logger.factory')->get('evaluation_service'),
      $container->get('http_client')
    );
  }
  /**
   * Responds to POST requests.
   *
   * @param array $data
   *   The data to send.
   *
   * @return \Drupal\rest\ResourceResponse
   *   The response containing the data.
   */
  public function post($data) {
    try {
      // Gửi yêu cầu tới OpenAI từ server Singapore
      $response = $this->httpClient->request('POST', 'https://api.openai.com/v1/engines/gpt-4-turbo/completions', [
        'headers' => [
          'Authorization' => 'Bearer ' . Settings::get('openai.api_key'),
          'Content-Type' => 'application/json',
          'OpenAI-Beta' => 'assistants=v1',
        ],
        'json' => [
          'prompt' => $data['text'],
          'max_tokens' => 100
        ]
      ]);

      // Lấy phản hồi từ OpenAI
      $body = $response->getBody()->getContents();
      $result = json_decode($body, TRUE);

      // Trả kết quả lại cho server Hồng Kông
      return new ResourceResponse($result, 200);
    }
    catch (\Exception $e) {
      \Drupal::logger('evaluation_service')->error($e->getMessage());
      return new ResourceResponse(['error' => $e->getMessage()], 500);
    }
  }

  /**
   * Kiểm tra API key.
   *
   * @param Request $request
   *   The request object.
   *
   * @return bool
   *   TRUE nếu API key hợp lệ, FALSE nếu không hợp lệ.
   */
  protected function checkApiKey(Request $request) {
    $apiKey = $request->headers->get('X-API-Key');
    $validApiKey = Settings::get('api_key'); // Thay bằng API key thật của bạn

    return $apiKey === $validApiKey;
  }

}
