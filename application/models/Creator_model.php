<?php


class creator_model extends CI_Model
{



    function getCreator($id = null)
    {

        if ($id) {
            $this->db->where('id_creator', $id);
        }
        $this->db->select('*');
        $this->db->from('tb_creator');
        $this->db->join('tb_users', 'tb_users.email  = tb_creator.id_creator');
        $result = $this->db->get();

        return $result;
    }
}
