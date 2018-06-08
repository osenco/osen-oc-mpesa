<form action="<?php echo $action; ?>" method="post">
  <input type="hidden" name="text_config_one" value="<?php echo $text_config_one; ?>" />
  <input type="hidden" name="text_config_two" value="<?php echo $text_config_two; ?>" />
  <input type="hidden" name="orderid" value="<?php echo $orderid; ?>" />
  <input type="hidden" name="callbackurl" value="<?php echo $callbackurl; ?>" />
  <input type="hidden" name="orderdate" value="<?php echo $orderdate; ?>" />
  <input type="hidden" name="currency" value="<?php echo $currency; ?>" />
  <input type="hidden" name="orderamount" value="<?php echo $orderamount; ?>" />
  <input type="hidden" name="billemail" value="<?php echo $billemail; ?>" />
  <input type="hidden" name="billphone" value="<?php echo $billphone; ?>" />
  <input type="hidden" name="billaddress" value="<?php echo $billaddress; ?>" />
  <input type="hidden" name="billcountry" value="<?php echo $billcountry; ?>" />
  <input type="hidden" name="billprovince" value="<?php echo $billprovince; ?>" />
  <input type="hidden" name="billcity" value="<?php echo $billcity; ?>" />
  <input type="hidden" name="billpost" value="<?php echo $billpost; ?>" />
  <input type="hidden" name="deliveryname" value="<?php echo $deliveryname; ?>" />
  <input type="hidden" name="deliveryaddress" value="<?php echo $deliveryaddress; ?>" />
  <input type="hidden" name="deliverycity" value="<?php echo $deliverycity; ?>" />
  <input type="hidden" name="deliverycountry" value="<?php echo $deliverycountry; ?>" />
  <input type="hidden" name="deliveryprovince" value="<?php echo $deliveryprovince; ?>" />
  <input type="hidden" name="deliveryemail" value="<?php echo $deliveryemail; ?>" />
  <input type="hidden" name="deliveryphone" value="<?php echo $deliveryphone; ?>" />
  <input type="hidden" name="deliverypost" value="<?php echo $deliverypost; ?>" />
  
  <div class="buttons">
    <div class="right">
      <input type="submit" value="<?php echo $button_confirm; ?>" class="button" />
    </div>
  </div>
</form>