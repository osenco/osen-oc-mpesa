<?php
class ModelPaymentMpesa extends Model {
  public function getMethod($address, $total) {
    $this->load->language('payment/mpesa');
  
    $method_data = array(
      'code'     => 'mpesa',
      'title'    => $this->language->get('text_title'),
      'sort_order' => $this->config->get('mpesa_sort_order')
    );
  
    return $method_data;
  }
}