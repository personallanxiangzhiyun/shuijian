<?php
/**
 * 自提点管理
 *
 * @author: fanghui
 * @created:
 */
class DeliverModel extends Model {

    protected $trueTableName = 'shuijian_deliver';

    //商户列表
    public function getList($param) {
        //分页参数
        $page = isset($param['page']) ? $param['page'] : 1;
        $pageNum = isset($param['pageNum']) ? $param['pageNum'] : 10;

        $where = "1=1";

        $arrList = $this-> join(' shuijian_shop c ON c.shop_id = shuijian_deliver.deliver_shop')-> where ($where) -> limit($pageNum) -> page ($page) ->field($param['fields']) ->order('deliver_id DESC')-> select();
       //echo M()->_sql();
        $this ->total=  $this -> where ($where) ->field('deliver_id') -> count();
        $this->subtotal = count($arrList);
        //总页数
        $this->pagecount = ceil(($this->total)/$pageNum);

        return $arrList;
    }

    public function nameuniquecheck($value) {
        //分页参数
        $where = "1=1";
        $param = array();
        if($value)
            $where .= " and site_name='" . $value."'";
        $param['fields'] = "*";

        $arrList = $this -> where ($where) -> field($param['fields']) -> select();
        //echo M()->_sql();
        if($arrList)
            return "success";
        else
            return "false";
    }

    //添加
    public function addList($param) {
        $id = intval($param['id']);
        //编辑
        if ($id) {
            $result = $this -> save(array(
                'deliver_id'=>$id,
                'deliver_name' => $param['deliver_name'],
                'deliver_mobile'=>$param['deliver_mobile'],
                'deliver_shop'=>$param['deliver_shop'],
                'deliver_apiCode'=>$param['deliver_apiCode']
            ));
        } else {
            //新增
            $result = $this -> add(array(
                'deliver_name' => $param['deliver_name'],
                'deliver_mobile'=>$param['deliver_mobile'],
                'deliver_shop'=>$param['deliver_shop'],
                'deliver_apiCode'=>$param['deliver_apiCode']
            ));
        }
        //echo M()->_sql();
        if ($result !== FALSE) {
            return array('status'=> 1);
        } else {
            return array('msg'=>'操作失败');
        }
    }

    //删除
    public function delList($id) {
        if (is_array($id)) {
            $where =array('deliver_id' => array('in', $id));
        } else {
            $where = array('deliver_id' => array('in', "$id"));
        }

        $result = $this -> where($where) -> delete();
//        echo M()->_sql();
        if ($result !== FALSE) {
            $data =  1;
        } else {
            $data = 0;
        }
        return $data;
    }
}
