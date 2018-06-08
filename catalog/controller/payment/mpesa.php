<?php
class ControllerPaymentMpesa extends Controller {
  protected function index() {
    $this->language->load('payment/mpesa');
    $this->data['button_confirm'] = $this->language->get('button_confirm');
    $this->data['action'] = 'https://yourpaymentgatewayurl';
  
    $this->load->model('checkout/order');
    $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
  
    if ($order_info) {
      $this->data['text_config_one'] = trim($this->config->get('text_config_one')); 
      $this->data['text_config_two'] = trim($this->config->get('text_config_two')); 
      $this->data['orderid'] = date('His') . $this->session->data['order_id'];
      $this->data['callbackurl'] = $this->url->link('payment/mpesa/callback');
      $this->data['orderdate'] = date('YmdHis');
      $this->data['currency'] = $order_info['currency_code'];
      $this->data['orderamount'] = $this->currency->format($order_info['total'], $this->data['currency'] , false, false);
      $this->data['billemail'] = $order_info['email'];
      $this->data['billphone'] = html_entity_decode($order_info['telephone'], ENT_QUOTES, 'UTF-8');
      $this->data['billaddress'] = html_entity_decode($order_info['payment_address_1'], ENT_QUOTES, 'UTF-8');
      $this->data['billcountry'] = html_entity_decode($order_info['payment_iso_code_2'], ENT_QUOTES, 'UTF-8');
      $this->data['billprovince'] = html_entity_decode($order_info['payment_zone'], ENT_QUOTES, 'UTF-8');;
      $this->data['billcity'] = html_entity_decode($order_info['payment_city'], ENT_QUOTES, 'UTF-8');
      $this->data['billpost'] = html_entity_decode($order_info['payment_postcode'], ENT_QUOTES, 'UTF-8');
      $this->data['deliveryname'] = html_entity_decode($order_info['shipping_firstname'] . $order_info['shipping_lastname'], ENT_QUOTES, 'UTF-8');
      $this->data['deliveryaddress'] = html_entity_decode($order_info['shipping_address_1'], ENT_QUOTES, 'UTF-8');
      $this->data['deliverycity'] = html_entity_decode($order_info['shipping_city'], ENT_QUOTES, 'UTF-8');
      $this->data['deliverycountry'] = html_entity_decode($order_info['shipping_iso_code_2'], ENT_QUOTES, 'UTF-8');
      $this->data['deliveryprovince'] = html_entity_decode($order_info['shipping_zone'], ENT_QUOTES, 'UTF-8');
      $this->data['deliveryemail'] = $order_info['email'];
      $this->data['deliveryphone'] = html_entity_decode($order_info['telephone'], ENT_QUOTES, 'UTF-8');
      $this->data['deliverypost'] = html_entity_decode($order_info['shipping_postcode'], ENT_QUOTES, 'UTF-8');
  
      if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/payment/mpesa.tpl')){
        $this->template = $this->config->get('config_template') . '/template/payment/mpesa.tpl';
      } else {
        $this->template = 'default/template/payment/mpesa.tpl';
      }
  
      $this->render();
    }
  }
  
  public function callback() {
    if (isset($this->request->post['orderid'])) {
      $order_id = trim(substr(($this->request->post['orderid']), 6));
    } else {
      die('Illegal Access');
    }
  
    $this->load->model('checkout/order');
    $order_info = $this->model_checkout_order->getOrder($order_id);
  
    if ($order_info) {
      $data = array_merge($this->request->post,$this->request->get);
  
      //payment was made successfully
      if ($data['status'] == 'Y' || $data['status'] == 'y') {
        // update the order status accordingly
      }
    }
  }
}