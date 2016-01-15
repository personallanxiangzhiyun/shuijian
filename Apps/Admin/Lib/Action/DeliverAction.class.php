<?php
/*
*物流管理控制器
*/
class DeliverAction extends ExtendAction{

    /*
    *主体页面
    */
    public function deliver_list(){
        $arrAssign = array();
        $deliverModel = D('Deliver');
        $data = $this -> _get('data');
        $shopcity = $this -> _get('shop_city');
        $shopName = $this -> _get('shopName');
        $arrAssign['data'] = $data;
        //分页参数
        $data['page']= isset($_GET['page']) ? $_GET['page'] : 1;
        $data['pageNum'] = 10;

        $data['shopcity'] = $shopcity;
        $data['shopName'] = $shopName;
        // 字段
        $data['fields'] = '*';

        // 当前url地址
        $url='/iadmin.php/Deliver/deliver_list?';
        // 查询条件
        $url.="page=";

        // 获取列表
        $arrList = $deliverModel -> getList($data);
        $arrAssign['arrList'] = $arrList;

        // 获取分页信息
        $pageHtml = $this->page($url,$deliverModel->pagecount, $data['pageNum'],$data['page'],$deliverModel->subtotal);
        $this->assign('pageHtml',$pageHtml);

        foreach ($arrAssign as $key => $val) {
            $this -> assign($key,$val);
        }

        $this->display('deliver_list');
    }

    public function all_city(){
        //获取城市列表
        $cityModel = D('City');
        $dat_c = array();
        $dat_c['fields'] = '*';
        $cityList = $cityModel -> getList($dat_c);
        $this -> ajaxReturn($cityList);
    }

    public function site_edit(){
        // URL参数
        $data = $this -> _post('data');
        // 新增
        $siteModel = D('Site');
        $result = $siteModel -> addList($data);
        if ($result) {
            $this->ajaxReturn(array('title'=>'success','data'=>$result));
        }else {
            echo "<script>alert('操作失败!');history.back();</script>";
        }
    }

    /**
     * 删除
     */
    public function ajaxDelList () {
        $shopModel = D('Shop');
        // 待删除友链id字符串（英文逗号串接）
        $ids = $this->_post('id');

        // 分割友链id字符串
        $idArr = array_filter(explode(',',$ids));
        // 删除友链
        $result =$shopModel -> delList($idArr) ;
        if ($result) {
            $this->ajaxReturn(array('title'=>'success'));
        }else {
            echo "<script>alert('操作失败!');history.back();</script>";
        }
    }


    public function name_unique_check(){

        $value = $this -> _post('value');
        $siteModel = D('Site');
        $result = $siteModel -> nameuniquecheck($value);
        $this->ajaxReturn($result);
    }

    public function ship_time_add(){
        $data['shopId'] = $this -> _post('shopId');
        $data['weekDays'] = implode(',',$this -> _post('weekDays'));
        $data['todayArrive'] = $this -> _post('todayArrive');
        $data['sendAfterDays'] = $this -> _post('sendAfterDays');
        $data['todayTimeBeginHour'] = $this -> _post('startHour');
        $data['todayTimeBeginMinute'] = $this -> _post('startMinute');
        $data['todayTimeBeginSecond'] = $this -> _post('startSecond');
        $data['sendTimeBeginHour'] = $this -> _post('sendTimeBeginHour');
        $data['sendTimeBeginMinute'] = $this -> _post('sendTimeBeginMinute');
        $data['sendTimeEndHour'] = $this -> _post('sendTimeEndHour');
        $data['sendTimeEndMinute'] = $this -> _post('sendTimeEndMinute');
        $data['chooseCount'] = $this -> _post('chooseCount');
        $ShopShipTimeModel = D('ShopShipTime');
        $result = $ShopShipTimeModel -> addList($data);
        if ($result) {
            $this->ajaxReturn(array('title'=>'success'));
        }else {
            echo "<script>alert('操作失败!');history.back();</script>";
        }
    }

    public function ship_time_edit(){
        $data['id'] = $this -> _post('shipTimeId');
        $data['shopId'] = $this -> _post('shopId');
        $data['weekDays'] = implode(',',$this -> _post('weekDays'));
        $data['todayArrive'] = $this -> _post('todayArrive');
        $data['sendAfterDays'] = $this -> _post('sendAfterDays');
        $data['todayTimeBeginHour'] = $this -> _post('startHour');
        $data['todayTimeBeginMinute'] = $this -> _post('startMinute');
        $data['todayTimeBeginSecond'] = $this -> _post('startSecond');
        $data['sendTimeBeginHour'] = $this -> _post('sendTimeBeginHour');
        $data['sendTimeBeginMinute'] = $this -> _post('sendTimeBeginMinute');
        $data['sendTimeEndHour'] = $this -> _post('sendTimeEndHour');
        $data['sendTimeEndMinute'] = $this -> _post('sendTimeEndMinute');
        $data['chooseCount'] = $this -> _post('chooseCount');
        $ShopShipTimeModel = D('ShopShipTime');
        $result = $ShopShipTimeModel -> addList($data);
        if ($result) {
            $this->ajaxReturn(array('title'=>'success'));
        }else {
            echo "<script>alert('操作失败!');history.back();</script>";
        }
    }


    public function  map($shopid){
        $ShopMapModel = D('ShopMap');
        $data['shopid'] = $shopid;
        // 获取列表
        $arrList = $ShopMapModel -> getList($data);
        $arrR=array();
        foreach($arrList as $key=>$value){
            $arr[]=array($value['labelInfo'],$value['shipAreaId']);
            $arr[]=json_decode($value['lngAndLat']);
            $arrR[] = $arr;
        }
        //print_r($arrR);
        $this -> assign('mapresult',json_encode($arrR));
        $this->display('shop_map');
    }

    public function  add_map(){
        $data['shopId'] = $this -> _post('shopId');
        $data['labelInfo'] = $this -> _post('labelInfo');
        $data['lngAndLat'] = $this -> _post('lngAndLat');
        $data['lngAndLatSize'] = $this -> _post('lngAndLatSize');
        $ShopMapModel = D('ShopMap');
        $result = $ShopMapModel -> addList($data);
        if ($result) {
            $this->ajaxReturn(array('title'=>'success','data'=>$result['result']));
        }else {
            echo "<script>alert('操作失败!');history.back();</script>";
        }
    }

    public function  edit_map(){
        $data['id'] = $this -> _post('shipAreaId');
        $data['shopId'] = $this -> _post('shopId');
        $data['labelInfo'] = $this -> _post('labelInfo');
        $data['lngAndLat'] = $this -> _post('lngAndLat');
        $data['lngAndLatSize'] = $this -> _post('lngAndLatSize');
        $ShopMapModel = D('ShopMap');
        $result = $ShopMapModel -> addList($data);
        if ($result) {
            $this->ajaxReturn(array('title'=>'success','data'=>$result['result']));
        }else {
            echo "<script>alert('操作失败!');history.back();</script>";
        }
    }

    public function  del_map(){
        $ShopMapModel = D('ShopMap');
        // 待删除友链id字符串（英文逗号串接）
        $ids = $this->_post('shipAreaId');

        // 分割友链id字符串
        $idArr = array_filter(explode(',',$ids));
        // 删除友链
        $result =$ShopMapModel -> delList($idArr) ;
        if ($result) {
            $this->ajaxReturn(array('title'=>'success'));
        }else {
            echo "<script>alert('操作失败!');history.back();</script>";
        }
    }
}
