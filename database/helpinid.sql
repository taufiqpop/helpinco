/*
 Navicat Premium Data Transfer

 Source Server         : MySQL (Local)
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : helpinid

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 06/12/2024 21:25:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for actions
-- ----------------------------
DROP TABLE IF EXISTS `actions`;
CREATE TABLE `actions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of actions
-- ----------------------------
INSERT INTO `actions` VALUES (1, 'view', '2024-07-03 00:16:10', NULL);
INSERT INTO `actions` VALUES (2, 'create', '2024-07-03 00:16:10', NULL);
INSERT INTO `actions` VALUES (3, 'update', '2024-07-03 00:16:10', NULL);
INSERT INTO `actions` VALUES (4, 'delete', '2024-07-03 00:16:10', NULL);
INSERT INTO `actions` VALUES (5, 'download', '2024-07-03 00:16:10', NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for menu_roles
-- ----------------------------
DROP TABLE IF EXISTS `menu_roles`;
CREATE TABLE `menu_roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int UNSIGNED NOT NULL,
  `role_id` int UNSIGNED NOT NULL,
  `action_id` int UNSIGNED NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menu_roles
-- ----------------------------
INSERT INTO `menu_roles` VALUES (1, 1, 1, 1, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (2, 1, 1, 2, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (3, 1, 1, 3, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (4, 1, 1, 4, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (5, 1, 1, 5, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (6, 2, 1, 1, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (7, 2, 1, 2, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (8, 2, 1, 3, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (9, 2, 1, 4, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (10, 2, 1, 5, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (11, 3, 1, 1, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (12, 3, 1, 2, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (13, 3, 1, 3, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (14, 3, 1, 4, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (15, 3, 1, 5, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (16, 4, 1, 1, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (17, 4, 1, 2, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (18, 4, 1, 3, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (19, 4, 1, 4, 1, '2024-07-03 00:16:10', NULL);
INSERT INTO `menu_roles` VALUES (20, 4, 1, 5, 1, '2024-07-03 00:16:10', NULL);

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int UNSIGNED NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_order` int UNSIGNED NULL DEFAULT NULL,
  `link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `icon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_active` tinyint NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, NULL, 'Beranda', 'beranda', 1, 'dashboard', 'bx bx-home-circle', 1, '2024-07-03 00:16:10', '2024-11-19 01:08:07', NULL);
INSERT INTO `menus` VALUES (2, NULL, 'Pengguna', 'pengguna', 2, 'users', 'bx bx-user', 1, '2024-07-03 00:16:10', '2024-11-19 01:08:07', NULL);
INSERT INTO `menus` VALUES (3, NULL, 'Manajemen Menu', 'manajemen_menu', 3, 'manajemen-menu', 'bx bx-food-menu', 1, '2024-07-03 00:16:10', '2024-11-19 01:08:07', NULL);
INSERT INTO `menus` VALUES (4, NULL, 'Otoritas', 'otoritas', 4, 'otoritas', 'bx bx-check-shield', 1, '2024-07-03 00:16:10', '2024-11-19 01:08:07', NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2022_06_25_061319_create_roles_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_06_25_061544_create_actions_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_06_25_061702_create_user_roles_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_06_25_062431_create_menus_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_06_25_062843_create_menu_roles_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_active` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Administrator', 'administrator', 1, '2024-07-03 00:16:10', '2024-11-10 18:24:51', NULL);

-- ----------------------------
-- Table structure for user_roles
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED NULL DEFAULT NULL,
  `role_id` int UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user_roles
-- ----------------------------
INSERT INTO `user_roles` VALUES (1, 1, 1, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_active` int NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Taufiq Pop', 'taufiqpop999@gmail.com', 'taufiqpop', '$2y$10$pHiphGOUPQ01c00LiRjCP.wS70lwk3E3BYknewV0heMZv0PCQSYZ.', 'hutaowangy', NULL, NULL, 1, '2024-07-03 00:16:10', '2024-11-20 00:43:10', NULL);

SET FOREIGN_KEY_CHECKS = 1;
