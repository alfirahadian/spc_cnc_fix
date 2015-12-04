<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Timeline_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
	public function add_timeline()
	{
		$data=array(
			'username'=>$this->session->userdata('user_name'),
            'caption'=>$this->input->post('caption'),
			'location'=>$this->input->post('location'));
		$this->db->insert('timeline',$data);
	}

    public function get_post(){
        $list_timeline = $this->db->order_by("id", "desc")->get('timeline');
        $num = $list_timeline->num_rows();


        if($num>0){
            return $list_timeline->result();
        }
        else{
            return 0;
        }
    return $list_timeline;
    }

}
?>