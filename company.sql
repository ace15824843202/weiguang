/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : company

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2019-01-30 14:15:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '编号',
  `email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `wechat` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `zhihu` varchar(255) DEFAULT NULL,
  `instagram` varchar(30) DEFAULT NULL COMMENT '微信',
  `content` longtext COMMENT '详情',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 禁用 1 正常',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES ('00000000001', 'skylightconsulting@hotmail.com', 'skylighthelper', 'https://zhuanlan.zhihu.com/skylightconsulting', 'skylightconsulting', '<p>我们是一群来自纽约大学和哥伦比亚大学社工专业毕业的心理咨询师。创建微光咨询，为留学生提供心理知识普及以及计划中的专业心理咨询服务。<br>服务领域：<br>情绪管理，焦虑，抑郁， 创伤<br>亲密关系，行为管理，亲子关系，人际关系，家庭关系<br>跨文化冲突，留学适应，个人成长<br>性别认同，性心理，LGBTQ性少数人群关于性别取向/性别认同探索 <img src=\"/uploads/2019-01-30/201901300116484866.jpg\" style=\"max-width: 100%;\"><img src=\"/uploads/2019-01-30/201901300116534371.jpg\" style=\"max-width: 100%;\"><img src=\"/uploads/2019-01-30/201901300116597065.jpg\" style=\"max-width: 100%;\"><img src=\"/uploads/2019-01-30/201901300117066958.jpg\" style=\"max-width: 100%;\"> </p>', '1');

-- ----------------------------
-- Table structure for article_detail
-- ----------------------------
DROP TABLE IF EXISTS `article_detail`;
CREATE TABLE `article_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `article_id` int(11) DEFAULT NULL COMMENT '文章ID',
  `author` varchar(30) DEFAULT NULL COMMENT '作者',
  `editor` varchar(30) DEFAULT NULL COMMENT '责任编辑',
  `content` longtext COMMENT '文章详情',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_detail
-- ----------------------------
INSERT INTO `article_detail` VALUES ('7', '11', '测试', '测试', '<p>测试测试测试</p><p><img src=\"/uploads/2018-12-13/201812130952258392.jpg\" style=\"max-width:100%;\"><br></p>');
INSERT INTO `article_detail` VALUES ('5', '9', '哈佛女孩', '哈佛女孩', '<p>哈佛女孩哈佛女孩哈佛女孩哈佛女孩哈佛女孩哈佛女孩<img src=\"/uploads/2019-01-27/201901270945005164.jpg\" style=\"max-width: 100%;\"></p><p><br></p>');
INSERT INTO `article_detail` VALUES ('6', '10', '侧石3', '侧石3', '<p>侧石3侧石3侧石3侧石3侧石3</p><p><img src=\"/uploads/2019-01-27/201901270945202400.jpg\" style=\"max-width:100%;\"><br></p>');
INSERT INTO `article_detail` VALUES ('8', '12', '测试2', '测试2', '<p>测试2测试2测试2<img src=\"/uploads/2018-12-13/201812131054032641.jpg\" style=\"max-width: 100%;\"></p>');
INSERT INTO `article_detail` VALUES ('9', '13', 'SC主创007编辑：sc主创', 'SC主创007编辑：sc主创', '<p>哈佛大学(Harvard University)被控在招生中歧视亚裔的诉讼于10月15日在波士顿联邦法庭开审。据悉，该案件审理需要两至三周时间。此案的判决或将对美国社会的多元种族政策造成深远的影响。&nbsp;</p><p>哈佛大学(Harvard University)被控在招生中歧视亚裔的诉讼于10月15日在波士顿联邦法庭开审。据悉，该案件审理需要两至三周时间。此案的判决或将对美国社会的多元种族政策造成深远的影响。<img src=\"/uploads/2019-01-27/201901270945535871.jpg\" style=\"max-width: 100%;\"></p><p><br></p>');

-- ----------------------------
-- Table structure for article_list
-- ----------------------------
DROP TABLE IF EXISTS `article_list`;
CREATE TABLE `article_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '文章标题',
  `addtime` datetime DEFAULT NULL COMMENT '添加时间',
  `desc` varchar(255) DEFAULT NULL COMMENT '描述',
  `type_id` int(11) DEFAULT NULL COMMENT '类型ID',
  `pic` varchar(50) DEFAULT NULL COMMENT '封面图片',
  `top` int(20) DEFAULT '0' COMMENT '是否置顶',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_list
-- ----------------------------
INSERT INTO `article_list` VALUES ('12', '测试2', '2018-12-13 10:54:05', '测试2											\r\n										', '5', '/uploads/2018-12-13/201812131054032641.jpg', '0');
INSERT INTO `article_list` VALUES ('13', '伤心真的会致死吗？', '2018-12-14 19:55:44', '											哈佛大学(Harvard University)被控在招生中歧视亚裔的诉讼于10月15日在波士顿联邦法庭开审。					\r\n																				', '4', '/uploads/2019-01-27/201901270945535871.jpg', '0');
INSERT INTO `article_list` VALUES ('9', '哈佛女孩', '2018-12-13 09:00:06', '											哈佛女孩哈佛女孩哈佛女孩											\r\n																														', '4', '/uploads/2019-01-27/201901270945005164.jpg', '0');
INSERT INTO `article_list` VALUES ('10', '侧石3', '2018-12-13 09:51:22', '											侧石3侧石3测试一											\r\n																														', '4', '/uploads/2019-01-27/201901270945202400.jpg', '1');
INSERT INTO `article_list` VALUES ('11', '测试', '2018-12-13 09:52:29', '测试测试测试	1111										\r\n																														', '5', '/uploads/2018-12-13/201812130952258392.jpg', '0');

-- ----------------------------
-- Table structure for background
-- ----------------------------
DROP TABLE IF EXISTS `background`;
CREATE TABLE `background` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(50) DEFAULT NULL COMMENT '背景图片',
  `content1` varchar(50) NOT NULL COMMENT '文字1',
  `content2` varchar(50) NOT NULL COMMENT '文字2',
  `content3` varchar(50) NOT NULL COMMENT '文字3',
  `content4` varchar(50) NOT NULL COMMENT '文字4',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of background
-- ----------------------------
INSERT INTO `background` VALUES ('1', '/uploads/2019-01-27/201901270944125140.jpg', '微光咨询', '北美专业的心理咨询平台', '“我们不求万丈光芒，只愿一缕微光，温柔陪伴漂泊异乡的你。', '我们倾听，我们懂得，我们在这里！”');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `pic` varchar(50) DEFAULT NULL COMMENT '图片',
  `addtime` datetime DEFAULT NULL COMMENT '添加时间',
  `content_top` varchar(50) DEFAULT NULL COMMENT '文字上',
  `content_bot` varchar(50) DEFAULT NULL COMMENT '文字下',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('7', '/uploads/2019-01-27/201901270940587899.jpg', '2018-12-11 20:12:26', '微光咨询', '北美最专业的心理咨询平台');
INSERT INTO `banner` VALUES ('8', '/uploads/2019-01-27/201901270941144926.jpg', '2018-12-11 20:13:04', '我们是曾经的留学生', '我们懂得');
INSERT INTO `banner` VALUES ('6', '/uploads/2019-01-27/201901270941352519.jpg', '2018-12-11 20:09:12', '渴望生活', '我们在这里倾听');

-- ----------------------------
-- Table structure for bigshot
-- ----------------------------
DROP TABLE IF EXISTS `bigshot`;
CREATE TABLE `bigshot` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `name` varchar(30) DEFAULT NULL COMMENT '姓名',
  `expire` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '经验',
  `zizhi` varchar(200) DEFAULT NULL COMMENT '资质',
  `desc` longtext COMMENT '个人描述',
  `goodat` longtext COMMENT '个人爱好',
  `group` longtext COMMENT '个人成长',
  `workflow` longtext COMMENT '工作流程',
  `language` varchar(30) DEFAULT NULL COMMENT '工作语言',
  `ctat` longtext COMMENT '咨询评率',
  `cost` longtext COMMENT '花费',
  `pic` varchar(50) DEFAULT NULL COMMENT '头像',
  `field` varchar(255) DEFAULT NULL COMMENT '工作领域',
  `area` varchar(255) DEFAULT NULL COMMENT '工作区域',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bigshot
-- ----------------------------
INSERT INTO `bigshot` VALUES ('1', '付聪', '6', '纽约大学（NYU）临床社会工作硕士、美国纽约州执照社工LMSW （097932）,2017/9-2018/5 怀特精神分析学与心理学学院,2018/4-2019/11 性心理学和性教育', '人生是美好，奇妙却又短暂的。经历黑暗岁月，跌倒，爬起来，穿过黑暗，走向光明。我们用一生的时间来认识，了解和学习自己, 倾听我们内心深处的声音。这条路上希望我能陪伴你一同探索，倾听，协助你成为自己想要成为的样子!', '生命过渡期: 青少年到成人的过渡， 环境改变(移民，搬家，升学)， 家人,朋友的去世，以及分离LGBTQ 性少数人群关于性取向/性别认同探索', '寻找内心的声音，深度自我探索，理解认知自己的情绪和潜意识', '<p><br></p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">心理咨询是一个不断认识自我，寻找自我并且与自己和解的过程，心理咨询不是一蹴而就的，而是一个漫长的不断发现自我，完善自我的旅程。希望我能够在这个旅程中陪伴您，帮助您披襟斩棘走出一条属于自己的路。</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">当您认知，感知，接受自己的那一刻，改变已经悄然发生！</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">1.初始访谈:</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">我会想了解来访的主要原因，有些人希望成为更好的自己，有些人希望可以改善情绪状况，有些人希望有一个抒发的管道，有些人面临人际间的问题，甚至，有些人也不知道为什么但觉得需要一些心理的帮助。 在初识访谈这个过程中，我会和您一起去探索，分析，讨论我们咨询的目标和方向。</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">2. 咨询过程：</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">每个人都有自己应对这个世界的模式，它带着我们独特的个人历史和经历，其中包含早期与父母或照顾者的互动体验，以及某些关键事件在我们生命中留下的印记。这个模式里可有很多潜藏的能量和情绪，可能给你当下的生活带来影响或困扰。我们的行为模式是从最初的生命体验中来，也只有在新的体验中才会真正改变。</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">在咨询中，我会为你提供一个放松，私密，安全的咨询环境，认真的倾听，试图去理解你的困惑，感受，想法、以及行为背后的深层意义，并给你支持。同时我也会很重视我们之间的互动和体验，观察我们互动方式与情绪反应模式。 我会与你一起去觉察，体验，并且去思考这过程， 一起去理解你核心的情绪/人际模式 和行为模式，去觉察和处理一些从未被看到情绪和诉求，一起去修复成长过程中受过的创伤，尝试理体验新的应对方式。</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">这个过程需要我们共同的努力，也需要不断摸索，会经历起起伏伏。这是一次旅程，我们一起启程。</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">3.结束：</p><p microsoft=\"\" yahei\",=\"\" simsun;=\"\" font-size:=\"\" 16px;\"=\"\">你可以更好的认识自己的情感和想法，了解自己，接纳自己，聆听内心的声音，作出更自由的选择，走属于自己的路。拥有健康的亲密关系，可以更好的去爱，去生活。</p><p><br></p>', ' 中英双语', '根据具体问题和来访需要，频率可以灵活安排，新个案建议至少一周或两周一次，中长程个案到后期可以减少见面频率或按需问诊。', '600元 （45分钟）', '/static/images/J11.jpg', '1,6,7,8', '2');
INSERT INTO `bigshot` VALUES ('2', '范琳琳', '5', '纽约大学临床社工专业，Phi Alpha Honor Society成员；北京师范大学应用心理以及传播学双学位。曾在纽约西奈山医院临床心理诊所实习，现在纽约大学附属的临床心理诊所工作。拥有纽约及新泽西LCSW执照。截至2018年9月，提供心理咨询超过2700小时，曾接受儿童青少年方向精神分析培训并获得证书，拥有TF-CBT认证以及完成EMDR训练。', '', '', '', '    <p><br></p>', ' 中英双语', '根据具体问题和来访需要，频率可以灵活安排，新个案建议至少一周或两周一次，中长程个案到后期可以减少见面频率或按需问诊。', '600元 （45分钟）', '/uploads/2019-01-28/201901281003124599.jpg', '5,6,7,8', '1');

-- ----------------------------
-- Table structure for top_type
-- ----------------------------
DROP TABLE IF EXISTS `top_type`;
CREATE TABLE `top_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `name` varchar(20) NOT NULL COMMENT '分类名',
  `pid` int(10) unsigned NOT NULL COMMENT '父ID',
  `path` varchar(20) NOT NULL COMMENT '路径',
  `url` varchar(20) DEFAULT NULL COMMENT '地址',
  `order` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of top_type
-- ----------------------------
INSERT INTO `top_type` VALUES ('1', '心理阅读', '0', '0,', 'article', '2');
INSERT INTO `top_type` VALUES ('2', '咨询大咖', '0', '0,', 'bigshot', '3');
INSERT INTO `top_type` VALUES ('3', '关于我们', '0', '0,', 'about', '4');
INSERT INTO `top_type` VALUES ('4', '最新热文', '1', '0,1,', 'article', '1');
INSERT INTO `top_type` VALUES ('5', '心理科普', '1', '0,1,', 'mind', '2');
INSERT INTO `top_type` VALUES ('6', '儿童心理', '1', '0,1,', 'child', '3');
INSERT INTO `top_type` VALUES ('7', '婚恋请感', '1', '0,1,', 'marry', '4');
INSERT INTO `top_type` VALUES ('8', '家庭关系', '1', '0,1,', 'home', '5');
INSERT INTO `top_type` VALUES ('9', '人际交往', '1', '0,1,', 'person', '6');
INSERT INTO `top_type` VALUES ('10', '咨询大咖', '2', '0,2,', 'index', '3');
INSERT INTO `top_type` VALUES ('11', '关于我们', '3', '0,3,', 'index', '4');
INSERT INTO `top_type` VALUES ('17', '首页', '0', '0,', 'index', '1');
INSERT INTO `top_type` VALUES ('15', '测试6', '1', '0,1,', 'article', '8');
INSERT INTO `top_type` VALUES ('16', '测试3', '1', '0,1,', 'article', '7');

-- ----------------------------
-- Table structure for tp_roles
-- ----------------------------
DROP TABLE IF EXISTS `tp_roles`;
CREATE TABLE `tp_roles` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '角色编号',
  `role_name` varchar(30) NOT NULL COMMENT '角色名称',
  `role_rules` text COMMENT '角色权限',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 禁用 1 正常',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1012 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_roles
-- ----------------------------
INSERT INTO `tp_roles` VALUES ('1', '超级管理员', '49,52,53,56,57,58,59,60,61,62,63,67,68,64,65,78,82,81,79,80,1,3,4,5,6,7,8,9,83,84,85,91,92,93,86,109,108,90,110,94,95,96,97,99,100,111,112,113,114,115,116,117,118,119,120', '1');
INSERT INTO `tp_roles` VALUES ('2', '普通管理员', '49,52,53,63,64,65,78,79,80,84,85,92,86,108,90,94,95,123,99,100,111,112,113,116,117,118,58,59,60', '1');
INSERT INTO `tp_roles` VALUES ('3', '普通员工', '49,52,63,64,78,79,84,85,86,90,99,100,111,112,116,117,58,59', '1');

-- ----------------------------
-- Table structure for tp_rules
-- ----------------------------
DROP TABLE IF EXISTS `tp_rules`;
CREATE TABLE `tp_rules` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '权限编号',
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '上级权限编号',
  `rule_name` varchar(30) NOT NULL COMMENT '权限名称',
  `rule_address` varchar(30) DEFAULT NULL COMMENT '权限地址',
  `rule_icon` varchar(30) DEFAULT NULL COMMENT '权限图标',
  `is_menu` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否左侧菜单中显示 0 不显示 1 显示',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0 禁用 1 正常',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_rules
-- ----------------------------
INSERT INTO `tp_rules` VALUES ('67', '63', '导航删除', 'toptype/delete', '', '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('49', '0', '轮播图', 'Banner/index', 'file-image-o', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('68', '63', '导航修改', 'toptype/edit', '', '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('52', '49', '轮播图展示', 'banner/index', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('53', '49', '轮播图添加', 'banner/add', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('82', '78', '文章修改', 'article/edit', '', '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('63', '0', '导航管理', 'toptype/index', 'reorder', '1', '3', '1');
INSERT INTO `tp_rules` VALUES ('64', '63', '导航展示', 'toptype/index', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('65', '63', '导航添加', 'toptype/add', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('81', '78', '文章删除', 'article/delete', '', '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('79', '78', '文章展示', 'article/index', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('80', '78', '文章添加', 'article/add', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('78', '0', '文章管理', 'article/index', 'file-text', '1', '4', '1');
INSERT INTO `tp_rules` VALUES ('1', '0', '系统设置', '', 'car', '1', '0', '1');
INSERT INTO `tp_rules` VALUES ('3', '1', '权限添加', 'rules/add', '', '0', '2', '1');
INSERT INTO `tp_rules` VALUES ('4', '1', '权限删除', 'rules/delete', '', '2', '2', '1');
INSERT INTO `tp_rules` VALUES ('5', '1', '权限修改', 'rules/edit', '', '2', '2', '1');
INSERT INTO `tp_rules` VALUES ('6', '1', '角色管理', 'roles/index', '', '1', '2', '1');
INSERT INTO `tp_rules` VALUES ('7', '1', '角色添加', 'roles/add', '', '2', '2', '1');
INSERT INTO `tp_rules` VALUES ('8', '1', '角色删除', 'roles/delete', '', '2', '2', '1');
INSERT INTO `tp_rules` VALUES ('9', '1', '角色修改', 'roles/edit', '', '2', '2', '1');
INSERT INTO `tp_rules` VALUES ('83', '1', '权限管理', 'rules/index', '', '1', '2', '1');
INSERT INTO `tp_rules` VALUES ('84', '0', '关于我们', 'about/index', 'unlock-alt', '1', '5', '1');
INSERT INTO `tp_rules` VALUES ('85', '84', '内容展示', 'about/index', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('86', '0', '资讯大咖', '', 'graduation-cap', '1', '6', '1');
INSERT INTO `tp_rules` VALUES ('109', '86', '内容修改', 'bigshot/edit', '', '0', '0', '1');
INSERT INTO `tp_rules` VALUES ('94', '0', '员工管理', 'user/index', 'users', '1', '3', '1');
INSERT INTO `tp_rules` VALUES ('108', '86', '内容添加', 'bigshot/add', '', '1', '2', '1');
INSERT INTO `tp_rules` VALUES ('90', '86', '大咖展示', 'bigshot/index', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('91', '84', '内容删除', 'about/delete', '', '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('92', '84', '内容添加', 'about/add', '', '1', '0', '1');
INSERT INTO `tp_rules` VALUES ('93', '84', '内容修改', 'about/edit', '', '0', '0', '1');
INSERT INTO `tp_rules` VALUES ('95', '94', '员工列表', 'user/index', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('96', '94', '员工删除', 'user/delete', '', '0', '2', '1');
INSERT INTO `tp_rules` VALUES ('97', '94', '信息修改', 'user/edit', '', '0', '3', '1');
INSERT INTO `tp_rules` VALUES ('99', '0', '个人中心', 'user/info', 'user', '1', '10', '1');
INSERT INTO `tp_rules` VALUES ('100', '99', '个人信息管理', 'user/info', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('110', '86', '内容删除', 'bigshot/delete', '', '0', '0', '1');
INSERT INTO `tp_rules` VALUES ('111', '0', '区域管理', '', 'puzzle-piece', '1', '9', '1');
INSERT INTO `tp_rules` VALUES ('112', '111', '区域展示', 'area/index', '', '1', '0', '1');
INSERT INTO `tp_rules` VALUES ('113', '111', '区域添加', 'area/add', '', '1', '0', '1');
INSERT INTO `tp_rules` VALUES ('114', '111', '区域修改', 'area/edit', '', '0', '0', '1');
INSERT INTO `tp_rules` VALUES ('115', '111', '区域删除', 'area/delete', '', '0', '0', '1');
INSERT INTO `tp_rules` VALUES ('116', '0', '领域管理', '', 'send', '1', '9', '1');
INSERT INTO `tp_rules` VALUES ('117', '116', '领域展示', 'field/index', '', '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('118', '116', '内容添加', 'field/add', '', '1', '2', '1');
INSERT INTO `tp_rules` VALUES ('119', '116', '内容修改', 'field/edit', '', '0', '3', '1');
INSERT INTO `tp_rules` VALUES ('120', '116', '内容删除', 'field/delete', '', '0', '4', '1');
INSERT INTO `tp_rules` VALUES ('56', '49', '轮播图删除', 'banner/delete', null, '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('57', '49', '轮播图修改', 'banner/edit', null, '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('58', '0', '背景图', '', 'file-image-o', '1', '2', '1');
INSERT INTO `tp_rules` VALUES ('59', '58', '背景图展示', 'background/index', null, '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('60', '58', '背景图添加', 'background/add', null, '1', '1', '1');
INSERT INTO `tp_rules` VALUES ('61', '58', '背景图删除', 'background/delete', null, '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('62', '58', '背景图修改', 'background/edit', null, '0', '1', '1');
INSERT INTO `tp_rules` VALUES ('123', '94', '员工增加', 'user/add', '', '1', '4', '1');

-- ----------------------------
-- Table structure for user_code
-- ----------------------------
DROP TABLE IF EXISTS `user_code`;
CREATE TABLE `user_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色',
  `role_id` smallint(6) DEFAULT NULL,
  `user_name` varchar(30) DEFAULT NULL COMMENT '工号/账号',
  `real_name` varchar(30) DEFAULT NULL COMMENT '真实姓名',
  `user_pwd` varchar(255) DEFAULT NULL COMMENT '密码',
  `user_img` varchar(255) DEFAULT NULL COMMENT '头像',
  `status` tinyint(4) DEFAULT '1' COMMENT '是否禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_code
-- ----------------------------
INSERT INTO `user_code` VALUES ('1', '1', 'zhangsan', '李四2', '3fa7aafab2688494a22174d7ee2ebeee', 'user.png', '1');
INSERT INTO `user_code` VALUES ('2', '2', 'zqs43511', '张三', '3fa7aafab2688494a22174d7ee2ebeee', 'user.png', '1');
INSERT INTO `user_code` VALUES ('3', '3', 'ceshi', '李四', '3fa7aafab2688494a22174d7ee2ebeee', 'user.png', '1');
INSERT INTO `user_code` VALUES ('4', '1', 'ace', 'ace官官', 'e10adc3949ba59abbe56e057f20f883e', '20190127\\efb05bb9a9d16089291c3c109b203fd6.jpg', '1');
INSERT INTO `user_code` VALUES ('6', '3', 'ace2', 'ace测试', 'e10adc3949ba59abbe56e057f20f883e', 'user.png', '1');

-- ----------------------------
-- Table structure for work_area
-- ----------------------------
DROP TABLE IF EXISTS `work_area`;
CREATE TABLE `work_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(50) DEFAULT NULL COMMENT '工作区域',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of work_area
-- ----------------------------
INSERT INTO `work_area` VALUES ('1', '旧金山');
INSERT INTO `work_area` VALUES ('2', '纽约');
INSERT INTO `work_area` VALUES ('3', '澳大利亚');
INSERT INTO `work_area` VALUES ('7', '北京');

-- ----------------------------
-- Table structure for work_field
-- ----------------------------
DROP TABLE IF EXISTS `work_field`;
CREATE TABLE `work_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field` varchar(50) DEFAULT NULL COMMENT '工作领域',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of work_field
-- ----------------------------
INSERT INTO `work_field` VALUES ('1', '留学生咨询');
INSERT INTO `work_field` VALUES ('2', '成人咨询');
INSERT INTO `work_field` VALUES ('3', '儿童咨询');
INSERT INTO `work_field` VALUES ('5', '行为问题');
INSERT INTO `work_field` VALUES ('6', '亲密关系');
INSERT INTO `work_field` VALUES ('7', '情绪压力');
INSERT INTO `work_field` VALUES ('8', '个人成长');
