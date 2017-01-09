<section id="main-body-wrapper" class="container">
    <div class="row" id="main-body">
        
        <!--Left-->
        <div class="col-md-12">
            <?php
            $grand_total = 0;
            if ($cart = $this->cart->contents()):
                foreach ($cart as $item):
                    $grand_total = $grand_total + $item['subtotal'];
                endforeach;
            endif;
            ?>
            <section>
                <div id="bill_info">
                    <form name="billing" method="post" action="<?php echo base_url('shopping/save_order'); ?>">
                        <input type="hidden" name="command"/>
                        <div align="center">
                            <h1 align="center">Thông tin thanh toán</h1>
                            <table border="0" cellpadding="2px">
                                <tbody>
                                <tr><td>Tổng tiền:</td><td><strong style="color: white; padding-left: 10px;"> <?php echo number_format($grand_total); ?> vnđ</strong></td></tr>
                                <tr><td>Your Name:</td><td><input style="color:#000000;" type="text" name="name" required=""/></td></tr>
                                <tr><td>Email:</td><td><input style="color:#000000;" type="text" name="email" required=""/></td></tr>
                                <tr><td>Phone:</td><td><input style="color:#000000;" type="text" name="phone" required=""/></td></tr>
                                <tr><td>Address:</td><td><textarea style="color:#000000;" name="address" cols="35" rows="5"  required=""></textarea></td></tr>
                                <tr>
                                    <td><a class="fg-button teal" id="back" href="<?php echo base_url('shopping'); ?>">
                                            Shopping
                                        </a>
                                    </td>
                                    <td><input class="fg-button teal" type="submit" value="Gửi thông tin"/></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</section>
<?php $this->load->view('frontend/templates/footer');?>