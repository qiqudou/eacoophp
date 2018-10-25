CREATE TABLE `eacoo_micro_topics`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '发布者UID',
  `category_id` int(11) NOT NULL COMMENT '分类ID',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '标题',
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `respond_visible` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '回复可见内容',
  `cover` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '封面图片',
  `img` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '图片',
  `view` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '阅读量',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '评论量',
  `recommend` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '是否推荐 0不推荐 1推荐',
  `overhead` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '是否置顶 0不置顶 1置顶',
  `essence` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '是否精华 0默认 1精华',
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '状态，-1软删 0禁用 1正常 2审核中 3审核失败',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '微话题表' ROW_FORMAT = Dynamic;

--评论表
CREATE TABLE `eacoo_micro_topics_comment`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL COMMENT '帖子ID',
  `uid` int(11) NOT NULL COMMENT '发布者UID',
  `pid` int(11) NOT NULL DEFAULT 0 COMMENT '父级ID，用于楼中楼',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1' COMMENT '状态，-1软删  1正常',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '微话题评论表' ROW_FORMAT = Dynamic;

--用户拓展表
CREATE TABLE `eacoo_micro_topics_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户UID',
  `level` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '用户等级',
  `level_integration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '用户等级积分',
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '用户角色，0默认用户，1官方',
  `vip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '是否VIP 0否，其他整数都是等级',
  `vip_integration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT 'VIP等级积分',
  `vip_start_time` int(11) NULL DEFAULT NULL COMMENT 'VIP开始时间',
  `vip_end_time` int(11) NULL DEFAULT NULL COMMENT 'VIP结束时间',
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '是否认证',
  `author_info` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '认证信息',
  `author_img` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '认证图片信息，多张用逗号分隔',
  `update_time` int(11) NULL DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '微话题会员其他信息表' ROW_FORMAT = Dynamic;

-- 把默认会员表的uid复制到论坛会员表的uid里面
insert into eacoo_micro_topics_users(uid) select uid from eacoo_users;