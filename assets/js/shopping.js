function clear_cart() {
    var result = confirm('Bạn muốn xóa giỏ hàng ?');
    if (result) 
        {
            window.location = "<?php echo base_url('shopping/remove/all'); ?>";
        }
    else {
        return false;
        }
}
