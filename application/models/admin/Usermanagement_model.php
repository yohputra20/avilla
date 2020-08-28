<?php

class Service_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->username = $this->session->userdata('username');
    }

    function getuser() {

        $db = $this->load->database('default', TRUE);
        $roleid = $this->session->userdata('roleid');

        $balikan = array();
        $sql = "SELECT u.userid, u.username, u.roleid,r.rolename FROM user u left join troles r on u.roleid=r.roleid where u.fdelete='0' order by 1";
        $query = $db->query($sql);

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $edit = "<button style='width:30px;height:30px;'class='btn btn-default btn-sm' onclick=\"editUser('" . $row['userid'] . "')\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>";
                $delete = "<button style='width:30px;height:30px;'class='btn btn-default btn-sm' onclick=\"deleteUser('" . $row['userid'] . "')\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>";

                $chekauth = $this->dbload->chekAuth('userrole', $roleid);
                if (trim($chekauth['action']) == 'w') {
                    $action = '<div style="text-align:center">' . $edit . " " . $delete . '</div>';
                } else {
                    $action = '';
                }
                $json['aaData'][] = array($row['uname'], $row['rolename'], $action);
            }
        } else {
            $json['aaData'] = array();
        }
        return $json;
    }

    function getoneuser($id) {

        $db = $this->load->database('default', TRUE);
        $balikan = array();
        $sql = "SELECT userid, uname, roleid, created FROM itmuser WHERE userid='" . $id . "' order by 1";

        $query = $db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row_array();

            $hsl = $row;
        } else {
            $hsl = '';
        }
        return $hsl;
    }

    function insertUser($data) {

        $db = $this->load->database('default', TRUE);
        $balikan = array();
        $qry = $db->query("select max(userid) + 1 as 'maxid' from itmuser");
        $query = $db->query("select uname from itmuser");
        if ($qry->num_rows() > 0) {
            $row = $qry->row_array();
            $id = $row['maxid'];
        } else {
            $id = 1;
        }

        $sql = "INSERT into itmuser(roleid, uname, active, created) values('" . $data['roleid'] . "','" . $data['uname'] . "','1',getdate())";
        //print_r($sql);die(0);
        $query = $db->query($sql);

        if ($query) {
            $balikan = array(
                'status' => 1,
                'msg' => 'User management has been added'
            );
        } else {
            $balikan = array(
                'status' => 0,
                'msg' => $db->_error_message()
            );
        }
        return $balikan;
    }

    function insertUserVessel($data) {

        $db = $this->load->database('default', TRUE);
        $balikan = array();
        $qry = $db->query("select max(userid) + 1 as 'maxid' from itmuser");
        $query = $db->query("select uname from itmuser");
        if ($qry->num_rows() > 0) {
            $row = $qry->row_array();
            $id = $row['maxid'];
        } else {
            $id = 1;
        }
       
        $password =  sha1($data['passwd']);
        $sql = "INSERT into itmuser(roleid, uname, active, created,password) values('" . $data['roleid'] . "','" . $data['uname'] . "','1',getdate(),'" . $password . "')";
        //print_r($sql);die(0);
        $query = $db->query($sql);

        if ($query) {
            $balikan = array(
                'status' => 1,
                'msg' => 'User management has been added'
            );
        } else {
            $balikan = array(
                'status' => 0,
                'msg' => $db->_error_message()
            );
        }
        return $balikan;
    }

    function updateUser($data) {
        $db = $this->load->database('default', TRUE);
        $balikan = array();
        $sql = "update itmuser set uname='" . $data['uname'] . "', roleid='" . $data['roleid'] . "'  where userid='" . $data['userid'] . "'";
        $query = $db->query($sql);
        if ($query) {
            $balikan = array(
                'status' => 1,
                'msg' => 'User management has been changed'
            );
        } else {
            $balikan = array(
                'status' => 0,
                'msg' => $db->_error_message()
            );
        }
        return $balikan;
    }

    function deleteUser($id) {
        $db = $this->load->database('default', TRUE);
        $balikan = array();
        $sql = "delete from itmuser  where userid='" . $id . "'";
        $query = $db->query($sql);
        if ($query) {
            $balikan = array(
                'status' => 1,
                'msg' => 'User for reminder has been deleted'
            );
        } else {
            $balikan = array(
                'status' => 0,
                'msg' => $db->_error_message()
            );
        }
        return $balikan;
    }

    function getrole($id) {
        $db = $this->load->database('default', TRUE);
        $balikan = array();
//        print_r($id);die(0);
        $sql = "select p.name,r.action,p.permission from permission p left join rolemap r on p.permission=r.permission  where r.roleid='" . $id . "' or r.roleid is null order by 1";
//         print_r($sql);die(0);
        $query = $db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $w = $r = $x = '';
//               
                if (trim($row['action']) == 'w') {
                    $w = 'checked="checked"';
                }
                if (trim($row['action']) == 'r') {
                    $r = 'checked="checked"';
                }
                if (trim($row['action']) == 'x') {
                    $x = 'checked="checked"';
                }
                $json['aaData'][] = array($row['name'], '<div><label class="radio-inline">
  <input type="radio" name="actionRole_' . $row['permission'] . '" id="actionRole_' . $row['permission'] . '" value="w" onclick=\'actionrole("' . $row['permission'] . '","w");\' ' . $w . ' > W
</label>
<label class="radio-inline">
  <input type="radio" name="actionRole_' . $row['permission'] . '" id="actionRole_' . $row['permission'] . '" value="r" onclick=\'actionrole("' . $row['permission'] . '","r");\' ' . $r . ' > R
</label>
<label class="radio-inline">
  <input type="radio" name="actionRole_' . $row['permission'] . '" id="actionRole_' . $row['permission'] . '" value="x" onclick=\'actionrole("' . $row['permission'] . '","x");\' ' . $x . ' > X
</label></div>');
            }
//            }<span style=\"width:50px;float:left;cursor:pointer\"><input style="float:left;margin-right:5px;cursor:pointer" type="radio" name="actionRole_' . $row['permission'] . '" id="actionRole_' . $row['permission'] . '" value="' . $row['action'] . '" onclick=\'actionrole("' . $row['permission'] . '","' . $row['action'] . '");\' >w&nbsp;</span>
        } else {
            $json['aaData'] = array();
        }
        return $json;
    }

    function changeroleaction($data) {
        $db = $this->load->database('default', TRUE);
        $balikan = array();
//        print_r($id);die(0);
		$qry = $db->query("select * from rolemap where roleid='" . $data['roleid'] ."' and permission='". $data['permission'] ."' ");
		if($qry->num_rows()>0){
        $sql = "update rolemap set action='" . $data['action'] . "' where roleid='" . $data['roleid'] . "' and permission='" . $data['permission'] . "'";
        $query = $db->query($sql);
        if ($query) {
            $balikan = array(
                'status' => 1,
                'msg' => 'Role has been Updated'
            );
        } else {
            $balikan = array(
                'status' => 0,
                'msg' => $db->_error_message()
            );
        }
		}else{
			$sql = "insert into rolemap(action,roleid,permission) values('" . $data['action'] . "','" . $data['roleid'] . "','" . $data['permission'] . "')";
        $query = $db->query($sql);
        if ($query) {
            $balikan = array(
                'status' => 1,
                'msg' => 'Role has been Updated'
            );
        } else {
            $balikan = array(
                'status' => 0,
                'msg' => $db->_error_message()
            );
        }
		}
        return $balikan;
    }

    function chekusermanagement($nama) {
        $db = $this->load->database('default', TRUE);
        $balikan = array();
        $sql = "SELECT userid, uname, roleid, created FROM itmuser WHERE uname='" . $nama . "' order by 1";
//print_r($sql);die(0);
        $query = $db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row_array();

            $hsl = $row;
        } else {
            $hsl = array();
        }
        return $hsl;
    }
    function chekAuth($permision, $roleid) {
        $db = $this->load->database('default', TRUE);
        $balikan =  null;
        $sql = "SELECT rm.[rolemapid],rm.[permission],rm.[roleid],rm.[action],p.name
    FROM rolemap rm inner join permission p on rm.permission=p.permission where rm.action in ('w','r') and roleid='" . $roleid . "' and rm.permission='" . strtoupper($permision) . "' order by rm.permission asc";
        $query = $db->query($sql);
        if ($query->num_rows() > 0) {
            $balikan = $query->row_array();
        }

        return $balikan;
    }
}
