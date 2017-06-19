<?php
class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news($slug = FALSE) {
        if($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_news() {
        $this->load->helper('url');
        $this->load->helper('date_helper');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $findResult = $this->find_slug($slug);

        if(isset($findResult)) {
            return "same data";
        }

        $datestring = '%Y%m%d';
        $date = mdate($datestring);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
            'date' => $date
        );
        $this->db->insert('news', $data);
        return "Record cretae successfully";
    }

    private function find_slug($slug = FALSE) {
        $query = $this->db->get_where('news', array('slug =' => $slug));
        $row = $query->row_array();
        return $row;
    }

    public function update() {
        $this->load->helper('url');
        $this->load->helper('date_helper');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $recordToUpdate = $this->input->post('update');

        $datestring = '%Y%m%d';
        $date = mdate($datestring);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
            'date' => $date
        );

        $this->db->where('slug', $recordToUpdate);
        $this->db->limit(1); 
        $this->db->update('news', $data);
        return "Record update successfully";
    }
}
?>