DROP TABLE IF EXISTS `eacoo_micro_topics`;
DROP TABLE IF EXISTS `eacoo_micro_topics_comment`;
DROP TABLE IF EXISTS `eacoo_micro_topics_users`;
DELETE FROM `eacoo_term_relationships` WHERE `table`='micro_topics';