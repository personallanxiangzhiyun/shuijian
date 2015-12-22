<?php
if(in_array($_SERVER['HTTP_HOST'],array("ilocal.boqii.com"))) {

}elseif(in_array($_SERVER['HTTP_HOST'],array("itest.boqii.com"))){

} elseif(in_array($_SERVER['HTTP_HOST'],array("i1.boqii.com"))){

} elseif(in_array($_SERVER['HTTP_HOST'],array("i.boqii.com"))){

}
	
return array(
	'LOG_OPERATION'=>array( //操作位置统计
		'1'=>'日志管理=>日志管理',
		'2'=>'相册管理=>相册信息管理',
		'3'=>'相册管理=>图片管理',
		'4'=>'微博管理=>微博内容管理',
		'5'=>'微博管理=>微博评论管理',
		'6'=>'评论管理=>日志评论管理',
		'7'=>'宠物管理=>宠物管理',
		'8'=>'评论管理=>图片评论管理',
		'9'=>'推荐位管理=>热门话题',
		'10'=>'推荐位管理=>热门话题排序',
		'11'=>'标签管理=>标签管理',
		'12'=>'标签管理=>标签编辑',
		'13'=>'敏感词管理=>敏感词管理',
		'14'=>'广告管理=>广告管理',
		'15'=>'后台成员管理=>成员管理',
		'16'=>'日志管理=>日志编辑',
		'17'=>'意见反馈管理=>意见反馈管理',
        '18'=>'兑奖中心管理=>兑换中心',
        '19'=>'兑奖中心管理=>添加奖品',
		'20'=>'百科内容管理=>文章管理',
		'21'=>'百科内容管理=>帖子管理',
		'22'=>'评论管理=>百科文章评论管理',
		'23'=>'评论管理=>百科帖子评论管理',
		'24'=>'百科分类管理=>分类',
		'25'=>'百科用户管理=>用户列表',
		'26'=>'百科用户管理=>添加成员',
		'27'=>'百科分类管理=>小组',
		'28'=>'推荐位管理=>栏目管理',
		'29'=>'推荐位管理=>论坛推荐',
		'30'=>'推荐位管理=>栏目列表',
		'31'=>'百科词条管理=>分类管理',
		'32'=>'百科词条管理=>词条管理',
		'33'=>'搜索管理=>关键词管理',
		'34'=>'搜索管理=>新增关键词',
		'35'=>'搜索管理=>编辑关键词',
		'36'=>'APP配置=>发现首页banner配置'
	),
	'FONT_POSITION'=>array(//前台小组操作位置
		'1'=>'小组聚合页',
		'2'=>'小组成员列表页',
		'3'=>'帖子内容页',
	),
	'LOG_OPERATION_TYPE'=>array( //操作类型
		'1'=>'增',
		'2'=>'删',
		'3'=>'改'
	),
	'FONT_LOG_OPERATION_TYPE'=>array(//操作类型
		'1'=>'增',
		'2'=>'删',
		'3'=>'改',
		'4'=>'移动',
		'5'=>'置顶',
		'6'=>'取消置顶',
	),

	'PET_TYPE'=>array( //宠物状态
		'0'=>'正常',
		'1'=>'征婚',
		'2'=>'需要被领养',
		'3'=>'已经去世了',
		'4'=>'已送人',
		'5'=>'已走失',
		'6'=>'希望出售/转让'
	),
	
	'NOTICE_DIR'=>array(	//站内信提示类型
		'1'=>array(
			'name'=>'日志',
			'model'=>'UcDiary',
			'column'=>'title',
			'where'=>'id',
			'other'=>'cretime'
		),
		'2'=>array(
			'name'=>'微博',
			'model'=>'UcWeibo',
			'column'=>'weibo_content',
			'where'=>'id',
			'other'=>'weibo_time'
		),
		'3'=>array(
			'name'=>'日志评论',
			'model'=>'UcDiaryComment',
			'column'=>'content',
			'where'=>'id',
			'other'=>'dateline'
		),
		'4'=>array(
			'name'=>'图片评论',
			'model'=>'UcPhotoComment',
			'column'=>'content',
			'where'=>'id',
			'other'=>'dateline'
		),
		'5'=>array(
			'name'=>'微博评论',
			'model'=>'UcWeiboReply',
			'column'=>'message',
			'where'=>'id',
			'other'=>'dateline'
		),
		'6'=>array(
			'name'=>'相册',
			'model'=>'UcAlbum',
			'column'=>'title',
			'where'=>'id',
			'other'=>'dateline'
		),
		'7'=>array(
			'name'=>'图片',
			'model'=>'UcPhoto',
			'column'=>'photo_name',
			'where'=>'photo_id',
			'other'=>'cretime'
		),
		'8'=>array(
			'name'=>'宠物头像',
			'model'=>'UcUserPet',
			'column'=>'petname',
			'where'=>'id',
			'other'=>'cretime'
		),
		'9'=>array(
			'name'=>'宠物',
			'model'=>'UcUserPet',
			'column'=>'petname',
			'where'=>'id',
			'other'=>'cretime'
		),
		'10'=>array(
			'name'=>'文章评论',
			'model'=>'BkArticleComment',
			'column'=>'content',
			'where'=>'id',
			'other'=>'create_time'
		),
		'11'=>array(
			'name'=>'帖子',
			'model'=>'BkThread',
			'column'=>'content',
			'where'=>'id',
			'other'=>'create_time'
		),
		'12'=>array(
			'name'=>'帖子评论',
			'model'=>'BkThreadComment',
			'column'=>'content',
			'where'=>'id',
			'other'=>'create_time'
		)
	),
	'NO_ALLOW'=>array(
		'1'=>'输入相册名称关键字',
	    '2'=>'输入用户呢称或id',
		'3'=>'输入标题关键字',
		'4'=>'输入操作者关键字',
		'5'=>'输入评论内容关键字',
		'6'=>'输入日记标题关键字',
		'7'=>'输入微博关键字',
		'8'=>'输入微博ID',
		'9'=>'输入相册ID',
		'10'=>'输入图片标题关键字',
		'11'=>'输入宠物呢称关键字',
		'12'=>'输入标签名关键字',
		'13'=>'输入创建人关键字',
		'14'=>'输入添加人关键字',
		'15'=>'输入敏感词关键字',
		'16'=>'输入广告标题关键字',
		'17'=>'输入帖子标题关键字',
		'18'=>'输入文章标题关键字',
		'19'=>'输入用户呢称',
		'20'=>'输入内容关键字',
		'21'=>'输入用户ID',
		'22'=>'输入问题标题关键字',
		'23'=>'输入回答内容关键字'

	),

	'THE_COLUMN'=>array( //栏目划分
		'1'=>'个人栏目',
		'11'=>'百科标签'//,
		//'12'=>'商户分类',
		//'13'=>'症状'
	),

	'THE_DATE'=>array( //最近时间段内
		'1'=>array(
			'name'=>'一天',
			'days'=>1
		),
		'2'=>array(
			'name'=>'一周',
			'days'=>7
		),
		'3'=>array(
			'name'=>'一个月',
			'days'=>30
		),
		'4'=>array(
			'name'=>'三个月',
			'days'=>90
		),
		'5'=>array(
			'name'=>'半年',
			'days'=>180
		),
		'6'=>array(
			'name'=>'一年',
			'days'=>360
		)
	),
	'SPENDING'=>array( //宠物月开销
		'0'=>'0-100元',
		'1'=>'100-200元',
		'2'=>'200-500元',
		'3'=>'500元以上'
	),
	
	'AD_POSITION'=>array(
		'10000'=>'1-12首页右上',
		'10001'=>'1-13百科小组页面左上',
		'10002'=>'1-14百科小组页面右下',
		'10003'=>'1-15百科成员列表页右下',
		'10004'=>'1-16百科专家页右下',
		'10005'=>'1-17百科文章内容页右下',
		'10006'=>'1-18百科帖子内容页右下',
		'10007'=>'1-19百科专家页左上',
		'10008'=>'1-20个人中心啊呜右侧小广告',
		'10009'=>'1-21个人中心他人啊呜中间横幅广告',
		'10010'=>'1-22百科宠物详细页右下广告',
		'10011'=>'百科宠物品种大全首页底广告',
		'10012'=>'百科宠物品种大全狗狗分类页底广告',
		'10013'=>'百科宠物品种大全猫猫分类页底广告',
		'10014'=>'百科宠物品种大全兔兔分类页底广告',
		'10015'=>'百科宠物品种大全鱼鱼分类页底广告',
		'10016'=>'百科宠物品种大全龟分类页底广告',
		'10017'=>'百科宠物品种大全小宠分类页底广告'
	),
	'RBAC'=>array(
		'1'=>'操作日志', 
		'2'=>'日记管理', 
		'3'=>'相册管理', 
		'4'=>'微博管理',
		'5'=>'评论管理', 
		'6'=>'宠物管理',
		'7'=>'标签管理',
		'8'=>'敏感词管理',
		'9'=>'广告管理',
		'10'=>'推荐位管理',
		'11'=>'后台成员管理',
		'12'=>'意见反馈管理',
        '13'=>'兑奖中心管理',
		'14'=>'百科内容管理',
		'15'=>'百科分类管理',
		'16'=>'百科专家小编管理',
		'17'=>'站内信管理',
		'18'=>'专题管理',
        '19'=>'友情链接管理',
		'20'=>'百科宠物管理',
		'21'=>'抽奖管理',
		'22'=>'资讯管理',
		'23'=>'招聘管理',
		'24'=>'搜索管理',
		'25'=>'APP配置'
	),
	'PUSH_TYPE'=>array(
		'1'=>'热门主题',
		'2'=>'百科知识',
		'3'=>'系统公告'
	),
	'REDIS_KEY'=>array(
		'userinfo'=>$redis_prefix.':public:userinfo:',
		'userExtend'=>$redis_prefix.':user:extend',
        'homePublish'=>$redis_prefix.'home:publish',
        'publish'=>$redis_prefix.':vet:publish:',
		'petViews'=>$redis_prefix.':baike:pet:views',
		'threadViews'=>$redis_prefix.':baike:thread:views',
		'articleViews'=>$redis_prefix.':baike:article:views',
	),

    'ZT_TYPE'=>array(
        '5'=>'狗狗',
        '6'=>'猫咪',
        '7'=>'小宠',
        '8'=>'水族',
        '9'=>'爬虫',
        '10'=>'植物',
        '11'=>'节日',
        '12'=>'活动',
        '13'=>'其他'
    ) ,
    'PET_TYPE'=>array(
        '1'=>'狗狗',
        '2'=>'猫咪',
        '3'=>'小宠',
        '4'=>'水族'
    ) ,
    // 1为大首页,2为网站友情链接页,3为论坛,4百科,5宠物服务,6宠物资讯,7百科宠物大全
    'HELP_TYPE' => array(
        '1'=>'大首页',
        '2'=>'网站友情链接页',
        '3'=>'论坛',
        '4'=>'百科',
        '5'=>'宠物服务',
		'6'=>'宠物资讯',
		'7'=>'百科宠物大全'
    ),
    'TAG_LIMIT' => array(
        '1'=>'根标签',
        '2'=>'未分类'
    )

);
?>