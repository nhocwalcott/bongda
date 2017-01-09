<?php
class Shopping extends CI_Controller {
    function __construct()
    {
        
        parent::__construct();
        $this->load->view('frontend/templates/header');
        $this->load->model('articles_model');
        $this->load->library('cart');
        $this->load->model('shopping_model');
        $this->load->helper('form');
        $this->cart->product_name_rules = "\d\D";      
    }

    function index(){
        $this->load->library('pagination');
        $this->db->select('*');                  
        $this->db->from('cart');
        $this->db->order_by('id desc');          
        $offset=$this->uri->segment(2);    
        $limit= 10;        
        $this->db->limit($limit, $offset);
        $query_poster = $this->db->get();   
// pagination        
        $config['base_url'] = site_url() . '/shopping/';
        $config['total_rows'] = $this->db->count_all('cart');
        $config['uri_segment']  = 2;
        $config['per_page'] = $limit;
        $config['prev_link']    = '&lt;';
        $config['next_link']    = '&gt;';
        $config['last_link']    = 'Cuối';
        $config['first_link']   = 'Đầu';
        $this->pagination->initialize($config);
        $paginator=$this->pagination->create_links();  
// End pagination                      
       
         $ndata = array(
             'popular_news' => $this->articles_model->getListArticles(16,0),
            'paginator'     =>$paginator,
            'post'          =>$query_poster,
            'title'          => "Trang bóng đá trực tuyến",
            'keywords'       => "Bóng đá, trực tuyến",
            'description'    => "Kênh bóng đá trực tuyến hiện nay còn đang chưa được phát triển, người hâm mộ chưa được tiếp xúc với giả đấu 1 cách dễ dàng"
            );     
              
        $this->load->view('frontend/tickets/tem-shopping',$ndata);
         
        }

    function add()
    {
        $this->load->helper('form');
        if($this->input->post('action')){
            $this->load->library('form_validation');
            $insert_data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'qty' => 1
            );
            $this->cart->insert($insert_data);
        }
        redirect(base_url()."shopping");
    }

    function remove($rowid)
    {
        $this->load->helper('form');
   
        if ($rowid==="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array(
                    'rowid' => $rowid,
                    'qty' => 0
                );
            
            $this->cart->update($data);
            }
        redirect(base_url()."shopping");
    }

    function update_cart()
    {
        $this->load->helper('form');

        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
            {
                $rowid = $cart['rowid'];
                $price = $cart['price'];
                $amount = $price * $cart['qty'];
                $qty = $cart['qty'];
                
                $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'amount' => $amount,
                'qty' => $qty
                );       
            
                $this->cart->update($data);
            }
       redirect(base_url()."shopping");
    }
        
    function billing_view()
        {
             $ndata = array(
                 'popular_news' => $this->articles_model->getListArticles(16,0),
                'title'          => "Trang bóng đá trực tuyến",
                'keywords'       => "Bóng đá, trực tuyến",
                'description'    => "Kênh bóng đá trực tuyến hiện nay còn đang chưa được phát triển, người hâm mộ chưa được tiếp xúc với giả đấu 1 cách dễ dàng"
                );         
            $this->load->view('frontend/tickets/tem-thanhtoan',$ndata);
        }

    function save_order()
        {
            $this->load->helper('form');
       
            $customer = array(

                'name'          => $this->input->post('name'),
                'email'         => $this->input->post('email'),
                'phone'         => $this->input->post('phone'),
                'address'       => $this->input->post('address'),
                'date'          => date('Y-m-d')
            );
        
            $cust_id = $this->shopping_model->insert_thanhtoan($customer);
            
            $order = array(
                'date' => date('Y-m-d'),
                'customerid' => $cust_id
            );

            $ord_id = $this->shopping_model->insert_order($order);
            $popular_news = $this->articles_model->getListArticles(16,0);
            $data['popular_news'] = $popular_news;
            if ($cart = $this->cart->contents()):
                foreach ($cart as $item):
                    $order_detail = array(
                    'orderid' => $ord_id,
                    'productid' => $item['id'],
                    'quantity' => $item['qty'],
                    'price' => $item['price']
                );  
                $cust_id = $this->shopping_model->insert_order_detail($order_detail);
                endforeach;
            endif;
            $this->load->view('frontend/tickets/tem-success', $data);
            
        }       
} 
?>