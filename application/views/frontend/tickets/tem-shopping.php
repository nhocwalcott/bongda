
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript">
    function clear_cart() {
        var result = confirm('Bạn muốn xóa hết số lượng vé đã đặt???');
        if (result)
        {
            window.location = "<?php echo base_url('shopping/remove/all'); ?>";
        }
        else {
            return false;
        }
    }
</script>
<section id="main-body-wrapper" class="container">
    <div class="row" id="main-body">

        <!--Left-->
        <div class="col-md-12">
            <section id="cart">
                <div id="heading">
                    <h2 style="text-align: center;color:#000000;">ĐẶT VÉ </h2>
                </div>
                <div id="text">
                    <?php
                    $cart_check = $this->cart->contents();
                    if(empty($cart_check)) {
                        echo 'Bạn chưa đặt vé trên hệ thống!';
                    } ?>
                </div>
                <table id="table" border="0" cellpadding="10px" cellspacing="1px">
                    <?php
                    if ($cart = $this->cart->contents()): ?>
                        <tr id= "main_heading" style="color:#000000;">
                            <td>Số thứ tự</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá</td>
                            <td>Số lượng</td>
                            <td>Thành tiền</td>
                            <td>Xóa sản phẩm</td>
                        </tr>
                        <?php
                        echo form_open('shopping/update_cart');
                        $grand_total = 0;
                        $i = 1;
                        foreach ($cart as $item):
                            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                            ?>
                            <tr style="color:#000000;">
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo number_format($item['price']); ?> vnđ </td>
                            <td><?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?></td>
                            <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td><?php echo number_format($item['subtotal']) ?> vnđ </td>
                            <td>
                                <a href="<?php echo base_url('shopping/remove/' . $item['rowid']); ?>">
                                    <img src="<?php echo base_url('assets/images/cart_cross.jpg'); ?>" width='25px' height='20px'/>
                                </a>
                            </td>
                        <?php endforeach; ?>
                        </tr>
                        <tr>
                            <td><b style="color:#000000;">Tổng tiền: <?php echo number_format($grand_total); ?> vnđ</b></td>
                            <?php // "clear cart" button call javascript confirmation message ?>
                            <td colspan="5" align="right"><input  class ='fg-button teal' type="button" value="Xóa vé" onclick="clear_cart()"/>
                                <?php //submit button. ?>
                                <input class ='fg-button teal'  type="submit" value="Update số lượng"/>
                                <?php echo form_close(); ?>
                                <input class ='fg-button teal' type="button" value="Thanh toán" onclick="window.location = '<?php echo base_url('shopping/billing_view') ?>'"/></td>
                        </tr>
                    <?php endif; ?>
                </table>
            </section>
            <div class="homeproduct">

                <?php foreach($post->result() as $row): ?>
                    <a class="proditem" href="#">
                        <figure>
                            <img src="<?php echo base_url('assets/images/'.$row->img); ?>" alt="<?php echo $row->name; ?>" width="120" height="120"/>
                            <span class="textkm"><?php echo $row->title; ?></span>
                            <h4>Price: <?php echo $row->price; ?></h4>
                            <h3><?php echo $row->name; ?></h3>


                            <!--  <input type="hidden" name="id" value="<?php echo $row->id; ?>"/>
                      <input type="hidden" name="name" value="<?php echo $row->name; ?>"/>
                      <input type="hidden" name="price" value="<?php echo $row->price; ?>"/>   -->
                            <form action="<?php echo base_url();?>shopping/add" method="post" accept-charset="utf-8">
                                <?php $name = $row->name;?>
                                <?php $id = $row->id;?>
                                <?php $price = $row->price;?>
                                <input type="hidden" name="id" value="<?php echo $id;?>"/>
                                <input type="hidden" name="name" value="<?php echo $name; ?>"/>
                                <input type="hidden" name="price" value="<?php echo $price;?>"/>
                                <p id="add_button">
                                    <input type="submit" name="action" value="Đặt vé" class="fg-button teal"/></p>
                            </form>
                        </figure>
                    </a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('frontend/templates/footer');?>