<?php

$_menus=[
    '站点介绍'=>'#',
    '工具集'=>[
        'IP域名'=>[
            'IP查询'=>'#',
            '域名反查'=>'#',
            '解析响应速度'=>'#',
            'IP查询'=>'#',
        ],
        '游戏'=>[
            '猜数字'=>'#',
            '讲故事'=>'#',
            '卡牌'=>'#',
        ],
        '翻译'=>[
            '百度'=>'#',
            '必应'=>'#',
            '谷歌'=>'#',
        ],
        '日历'=>[
            '万年历'=>'#',
            '日程安排'=>'#',
        ],
        '文档查询'=>[
            'PHP'=>'#',
            'GO'=>'#',
            'Node'=>'#',
        ],
        '代码格式化'=>[
            'PHP格式化'=>'#',
            'html格式化'=>'#',
            'js格式化'=>'#',
        ],
        '正则资源'=>[
            '练习器'=>'#',
            '成果积累'=>'#',
        ],
        '网页代理'=>[
            '体验'=>'#',
            'VIP'=>'#',
            '使用说明'=>'#',
        ],
        '密文服务'=>[
            '加密'=>'#',
            '解密'=>'#',
            '使用说明'=>'#',//(可发送加密后的密文邮件给好友，好友填写密钥和加密内容到工具即可解密)
        ],
        '思绪'=>[
            '可与他人聊天'=>'#',
            '可自己倒出思绪'=>'#',
            '可未来提醒自己相关思绪、想法'=>'#',
        ],
    ],
    '机器学习'=>[
        '算法demo'=>[
            '待完善'=>'#',
        ],
        '内容提取'=>[
            '根据内容代码特征提取'=>'#',
            '根据内容分布特征提取'=>'#',
        ],
        '自我学习'=>'#',//能根据不断发现的数据来进行趋势判断和维度分析
        '自我迭代'=>'#',//自己生成自己，能判断生成后的优良与否，能替换自身
    ],
    '心境心性'=>[
        '音乐'=>'#',//音乐(冥想，瑜伽)
        '练习'=>'#',//练习(冥想、瑜伽、打坐、祷告、催眠、放松的教程)
        '太极'=>'#',
        '催眠'=>'#',
    ],
    '我的心愿'=>[
        '许下心愿'=>'#',//许下心愿(可由别人帮忙达成)
        '别人的心愿'=>'#',//别人的心愿(可帮别人达成，达成后，别人会收到提醒)
    ],
    '作品集'=>[
        '物联网'=>[
            '车友圈'=>'http://4g.womenxing.com',//简单模拟实时轨迹 和历史轨迹(任何一天)
        ],
        '百货商城'=>[
            '点点来'=>'http://www.ddlbuy.com',
            '聚康360'=>'http://www.jk360.com',
            'shopnc'=>'#',
            'shopex'=>'#',
            'ecshop'=>'#',
            'yii2shop'=>'#',//yincart
            'laravelshop'=>'#',//
            '淘宝客'=>'#',
        ],
        '内容管理系统'=>[
            'phpcms'=>'#',
            'yii2cms'=>'#',
            'ftpdisk'=>'#',
            'webdisk'=>'#',
        ],
    ],
    '文库'=>[
        '技术积累'=>'http://clh021.github.io',
        '生活体会'=>'http://clh021.github.io/diary',
        '好文收藏'=>'#',
    ],
    '关于我'=>[
        '个人简历'=>'#',
        '作品集'=>'#',//各个作品开发过程，使用技术，负责领域及其功能介绍
        '我和爱妻'=>'#',//和平妹妹的生活照，结婚照做成精美视频放上去
        '幸福一家人'=>'#',//把一家人，包括爷爷奶奶，尚宝宝的视频放上去
    ],
];
$i=0;
function getIndex(){
    global $i;
    $i++;
    return $i;
}
function getlis($_m,$depth=0){
    $_ul= 0==$depth ? '<ul id="menu-lianghong" class="sidebar-menu">' : '<ul class="treeview-menu">';
    foreach($_m as $k => $v) {
        $_li='';
        if(is_array($v)) {
            $_li.='<li id="nav-menu-item-'.getIndex().'" class="dropdown  menu-item-even menu-item-depth-'.$depth.' menu-item menu-item-type-custom menu-item-object-custom">';
            $_li.='<a href="#" class="menu-link main-menu-link"><i class="fa fa-chevron-right"></i><span>'.$k.'</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>';
            $depth++;
            $_li.=getlis($v,$depth);
        } else {
            $_li.='<li id="nav-menu-item-'.getIndex().'" class="dropdown  menu-item-even menu-item-depth-'.$depth.' menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">';
            $_li.='<a href="'.$v.'" class="menu-link main-menu-link"><i class="fa fa-chevron-right"></i><span>'.$k.'</span></a>';
        }
        $_li.='</li>';
        $_ul.=$_li;
    }
    return $_ul.'</ul>';
}
echo getlis($_menus);
return;