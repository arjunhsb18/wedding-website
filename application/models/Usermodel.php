<?php 
class Usermodel extends CI_Model {

        private $_table = 'ucapan';
        public $kode_pemesan;
        public $name;
        public $ucapan;
        public $kehadiran;
        public $jumlah_hadir;

        public function __construct(){
             parent::__construct();
             $this->load->database(); 
         }

        public function rules(){
            return [
                ['field' => 'name',
                'label' => 'Nama',
                'rules' => 'required'],
        
                ['field' => 'ucapan',
                'label' => 'Ucapan',
                'rules' => 'required'],
                
                ['field' => 'hadir',
                'label' => 'Hadir',
                'rules' => 'required'], 

                ['field' => 'jumlah_hadir',
                'label' => 'Jumlah yang hadir',
                'rules' => 'required']
            ];
        }
        public function getNumRows($table,$name){
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where('kode_pemesan',$name);
            return $this->db->count_all_results();
        }
        public function jumlahKonfirmasiHadir($name){
            $this->db->select('*');
            $this->db->from('ucapan');
            $this->db->where('kode_pemesan',$name);
            $this->db->where('kehadiran',1);
            return $this->db->count_all_results();
        }
        public function jumlahHadir($name){
            $this->db->select_sum('jumlah_hadir');
            $this->db->from('ucapan');
            $this->db->where('kode_pemesan',$name);
            return $this->db->get()->result()[0]->jumlah_hadir;
        }
        public function getUcapanByName($name){
            $this->db->where('kode_pemesan',$name);
            $query = $this->db->get('ucapan');
            return $query->result();
        }
        public function getLinkByName($name){
            $this->db->where('kode_pemesan',$name);
            $this->db->order_by("id", "desc");
            $this->db->limit(10, 0);
            $query = $this->db->get('link');
            return $query->result();
        }
        public function simpanucapan($data){
            return $this->db->insert('ucapan', $data);
        }
        public function simpanlink($data){
            return $this->db->insert('link', $data);
        }
        public function hapusLink($id){
            $this->db->where('id', $id);
            $this->db->delete('link');
        }

        public function getUsers() {          
               $data = $this->db->query('SELECT * FROM city') ;
               print_r($data);
         }    
     
}
  
?>