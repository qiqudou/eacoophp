版本日志


#v1.0.1
新增用户等级机制，VIP机制，认证机制；  
优化前端VIP标示，认证标示；  
优化数据库卸载残留数据；  


#v1.0.2
优化分辨率适配，兼容手机，IPAD，PC；
更新用户注册钩子，调用方法 hook(RegisterUser,['uid'=>$uid])，$uid是用户uid
修正后台用户管理错误，eacoo_micro_topics_users新增两个字段，分别为level_integration，vip_integration


#v1.0.3
修正内容页分辨率适配；  
新增文章内容回复可见；  
修正上版本错误； 


#v1.0.4
修复日回帖排行，周回帖排行，重复出现同一个用户的BUG； 
修复自己不可见隐藏内容；   
新增个人中心，我的帖子列表/编辑帖子；  
新增前台发帖功能；  
新增前端获取用户发帖数钩子{:hook('MicroTopicsUserPost',['uid' => $uid])}


#v1.0.5
修正安装错误；  
修正模板大小写敏感错误；  

