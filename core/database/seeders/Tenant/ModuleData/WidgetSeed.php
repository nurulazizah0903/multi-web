<?php

namespace Database\Seeders\Tenant\ModuleData;

use Illuminate\Support\Facades\DB;

class WidgetSeed
{
    public static function execute()
    {
        DB::statement("INSERT INTO `widgets` (`id`, `widget_area`, `widget_order`, `widget_location`, `widget_name`, `widget_content`, `created_at`, `updated_at`)
VALUES
	(4,NULL,1,'blog_sidebar','BlogCategoryWithSearchWidget','a:8:{s:2:\"id\";s:1:\"4\";s:11:\"widget_name\";s:28:\"BlogCategoryWithSearchWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:12:\"blog_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:11:\"title_en_US\";s:10:\"Categories\";s:8:\"title_ar\";N;s:14:\"category_items\";s:1:\"4\";}','2022-10-11 10:41:46','2022-10-11 10:41:48'),
	(5,NULL,2,'blog_sidebar','TenantRecentBlogPostWidget','a:8:{s:2:\"id\";s:1:\"5\";s:11:\"widget_name\";s:26:\"TenantRecentBlogPostWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:12:\"blog_sidebar\";s:12:\"widget_order\";s:1:\"2\";s:18:\"heading_text_en_US\";s:13:\"Popular Blogs\";s:15:\"heading_text_ar\";N;s:10:\"blog_items\";s:1:\"5\";}','2022-10-11 13:44:48','2022-10-12 04:46:36'),
	(6,NULL,1,'service_sidebar','TenantServiceCategoryWithSearchWidget','a:8:{s:2:\"id\";s:1:\"6\";s:11:\"widget_name\";s:37:\"TenantServiceCategoryWithSearchWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:15:\"service_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:11:\"title_en_US\";N;s:8:\"title_ar\";N;s:14:\"category_items\";s:1:\"4\";}','2022-10-12 11:00:29','2022-10-12 11:05:12'),
	(7,NULL,2,'service_sidebar','TenantRecentServiceWidget','a:8:{s:2:\"id\";s:1:\"7\";s:11:\"widget_name\";s:25:\"TenantRecentServiceWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:15:\"service_sidebar\";s:12:\"widget_order\";s:1:\"2\";s:18:\"heading_text_en_US\";s:15:\"Recent Services\";s:15:\"heading_text_ar\";N;s:10:\"blog_items\";s:1:\"4\";}','2022-10-12 11:41:23','2022-10-12 13:01:02'),
	(8,NULL,7,'service_sidebar','TenantQuerySubmitWidget','a:6:{s:11:\"widget_name\";s:23:\"TenantQuerySubmitWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:15:\"service_sidebar\";s:12:\"widget_order\";s:1:\"3\";s:18:\"heading_text_en_US\";s:22:\"Do you have any query?\";s:15:\"heading_text_ar\";N;}','2022-10-12 12:22:31','2022-10-17 07:14:02'),
	(9,NULL,1,'donation_acitvities_sidebar','TenantRecentDonationActivitiesWidget','a:8:{s:2:\"id\";s:1:\"9\";s:11:\"widget_name\";s:36:\"TenantRecentDonationActivitiesWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:27:\"donation_acitvities_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:18:\"heading_text_en_US\";s:21:\"Our recent Activities\";s:15:\"heading_text_ar\";s:29:\"أنشطتنا الأخيرة\";s:10:\"blog_items\";s:1:\"4\";}','2022-10-17 07:15:43','2022-10-17 07:30:45'),
	(10,NULL,2,'donation_acitvities_sidebar','TenantDonationActivityCategoryWidget','a:8:{s:2:\"id\";s:2:\"10\";s:11:\"widget_name\";s:36:\"TenantDonationActivityCategoryWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:27:\"donation_acitvities_sidebar\";s:12:\"widget_order\";s:1:\"2\";s:18:\"widget_title_en_US\";s:10:\"Categories\";s:15:\"widget_title_ar\";N;s:14:\"category_items\";s:1:\"6\";}','2022-10-17 07:27:48','2022-10-17 07:29:01'),
	(11,NULL,1,'donation_sidebar','TenantDonationCategoryWidget','a:8:{s:2:\"id\";s:2:\"11\";s:11:\"widget_name\";s:28:\"TenantDonationCategoryWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:16:\"donation_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:18:\"widget_title_en_US\";s:10:\"Categories\";s:15:\"widget_title_ar\";N;s:14:\"category_items\";s:1:\"6\";}','2022-10-18 06:39:39','2022-10-18 06:39:42'),
	(12,NULL,2,'donation_sidebar','TenantRecentDonationWidget','a:8:{s:2:\"id\";s:2:\"12\";s:11:\"widget_name\";s:26:\"TenantRecentDonationWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:16:\"donation_sidebar\";s:12:\"widget_order\";s:1:\"2\";s:18:\"heading_text_en_US\";s:16:\"Recent Donations\";s:15:\"heading_text_ar\";N;s:10:\"blog_items\";s:1:\"4\";}','2022-10-18 06:39:52','2022-10-18 06:41:09'),
	(13,NULL,1,'event_sidebar','TenantEventCategoryWithSearchWidget','a:7:{s:11:\"widget_name\";s:35:\"TenantEventCategoryWithSearchWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:13:\"event_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:11:\"title_en_US\";s:10:\"Categories\";s:8:\"title_ar\";s:8:\"فئات\";s:14:\"category_items\";s:1:\"5\";}','2022-11-07 05:33:37','2022-11-07 05:33:37'),
	(14,NULL,2,'event_sidebar','TenantRecentEventsWidget','a:7:{s:11:\"widget_name\";s:24:\"TenantRecentEventsWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:13:\"event_sidebar\";s:12:\"widget_order\";s:1:\"2\";s:18:\"heading_text_en_US\";s:13:\"Recent Events\";s:15:\"heading_text_ar\";s:29:\"الأحداث الأخيرة\";s:10:\"blog_items\";s:1:\"5\";}','2022-11-07 05:34:06','2022-11-07 05:34:06'),
	(15,NULL,1,'job_sidebar','TenantJobCategoryWithSearchWidget','a:7:{s:11:\"widget_name\";s:33:\"TenantJobCategoryWithSearchWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:11:\"job_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:11:\"title_en_US\";s:10:\"Categories\";s:8:\"title_ar\";s:8:\"فئات\";s:14:\"category_items\";s:1:\"5\";}','2022-11-07 05:35:39','2022-11-07 05:35:39'),
	(16,NULL,2,'job_sidebar','TenantRecentJobsWidget','a:8:{s:2:\"id\";s:2:\"16\";s:11:\"widget_name\";s:22:\"TenantRecentJobsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:11:\"job_sidebar\";s:12:\"widget_order\";s:1:\"2\";s:18:\"heading_text_en_US\";s:11:\"Recent Jobs\";s:15:\"heading_text_ar\";s:29:\"الوظائف الحديثة\";s:10:\"blog_items\";s:1:\"4\";}','2022-11-07 05:36:02','2022-11-07 05:36:03'),
	(17,NULL,2,'knowledgebase_sidebar','TenantRecentKnowledgebaseWidget','a:7:{s:11:\"widget_name\";s:31:\"TenantRecentKnowledgebaseWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:21:\"knowledgebase_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:18:\"heading_text_en_US\";s:15:\"Recent Articles\";s:15:\"heading_text_ar\";s:31:\"المقالات الأخيرة\";s:10:\"blog_items\";s:1:\"3\";}','2022-11-08 12:36:22','2022-11-08 12:38:21'),
	(18,NULL,1,'knowledgebase_sidebar','TenantKnowledgebaseCategoryWithSearchWidget','a:8:{s:2:\"id\";s:2:\"18\";s:11:\"widget_name\";s:43:\"TenantKnowledgebaseCategoryWithSearchWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:21:\"knowledgebase_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:11:\"title_en_US\";s:10:\"Categories\";s:8:\"title_ar\";s:8:\"فئات\";s:14:\"category_items\";s:1:\"4\";}','2022-11-08 12:38:44','2022-11-08 12:39:21'),
	(19,NULL,1,'footer_donation','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"19\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:15:\"footer_donation\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:146:\"Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus .\";s:14:\"description_ar\";s:120:\"مساعدة اليوم مساعدة الغد الخيريةمساعدة اليوم مساعدة الغد الخيرية\";s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"232\";}','2022-11-10 04:59:18','2022-11-10 05:17:05'),
	(20,NULL,2,'footer_donation','TenantNavigationMenuWidget','a:8:{s:2:\"id\";s:2:\"20\";s:11:\"widget_name\";s:26:\"TenantNavigationMenuWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:15:\"footer_donation\";s:12:\"widget_order\";s:1:\"2\";s:18:\"widget_title_en_US\";s:8:\"Navigate\";s:15:\"widget_title_ar\";s:12:\"التنقل\";s:7:\"menu_id\";s:1:\"2\";}','2022-11-10 05:39:33','2022-11-10 05:41:07'),
	(21,NULL,8,'footer_donation','TenantFooterCustomLink','a:8:{s:2:\"id\";s:2:\"21\";s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:15:\"footer_donation\";s:12:\"widget_order\";s:1:\"3\";s:11:\"title_en_US\";s:8:\"About us\";s:8:\"title_ar\";s:21:\"معلومات عنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:5:{i:0;s:10:\"Who we are\";i:1;s:16:\"Who we are they?\";i:2;s:21:\"Our far goal to reach\";i:3;s:20:\"Freequently required\";i:4;s:18:\"Anonimous products\";}s:18:\"repeater_url_en_US\";a:5:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";}s:17:\"repeater_title_ar\";a:5:{i:0;s:21:\"معلومات عنا\";i:1;s:21:\"معلومات عنا\";i:2;s:21:\"معلومات عنا\";i:3;s:21:\"معلومات عنا\";i:4;s:21:\"معلومات عنا\";}s:15:\"repeater_url_ar\";a:5:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";}}}','2022-11-10 06:43:29','2022-11-10 07:21:11'),
	(22,NULL,9,'footer_donation','TenantContactInfoWidget','a:13:{s:2:\"id\";s:2:\"22\";s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:15:\"footer_donation\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:21:\"معلومات عنا\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2022-11-10 06:51:43','2022-11-10 07:21:11'),
	(23,NULL,1,'footer_event','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"23\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:12:\"footer_event\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:137:\"I had I was very sad this day. There were friendly people at the bar that engaged with me. Interactions with people was very well needed.\";s:14:\"description_ar\";s:199:\"لقد كنت حزينا جدا هذا اليوم. كان هناك أشخاص ودودون في الحانة تعاملوا معي. كانت هناك حاجة ماسة للتفاعل مع الناس.\";s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"233\";}','2022-11-10 07:23:25','2022-11-10 07:24:46'),
	(25,NULL,2,'footer_event','TenantFooterRecentEventsWidget','a:7:{s:11:\"widget_name\";s:30:\"TenantFooterRecentEventsWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:12:\"footer_event\";s:12:\"widget_order\";s:1:\"2\";s:18:\"heading_text_en_US\";s:13:\"Recent Events\";s:15:\"heading_text_ar\";s:29:\"الأحداث الأخيرة\";s:10:\"blog_items\";s:1:\"2\";}','2022-11-10 07:44:47','2022-11-10 07:44:47'),
	(26,NULL,3,'footer_event','TenantNavigationMenuWidget','a:7:{s:11:\"widget_name\";s:26:\"TenantNavigationMenuWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:12:\"footer_event\";s:12:\"widget_order\";s:1:\"3\";s:18:\"widget_title_en_US\";s:11:\"Other Pages\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:7:\"menu_id\";s:1:\"2\";}','2022-11-10 07:46:35','2022-11-10 07:46:35'),
	(27,NULL,4,'footer_event','TenantContactInfoWidget','a:13:{s:2:\"id\";s:2:\"27\";s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:12:\"footer_event\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2022-11-10 07:46:58','2022-11-10 07:47:03'),
	(28,NULL,1,'footer_job','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"28\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:10:\"footer_job\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:157:\"This is the best platform where you can find your job very easily without any difficulity. It’s very simple and easy way where you can find your dream Job.\";s:14:\"description_ar\";s:262:\"هذا هو أفضل منصة حيث يمكنك العثور على وظيفتك بسهولة بالغة دون أي صعوبة. إنها طريقة بسيطة وسهلة للغاية حيث يمكنك العثور على الوظيفة التي تحلم بها.\";s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"234\";}','2022-11-10 09:09:28','2022-11-10 09:25:38'),
	(29,NULL,3,'footer_job','TenantNavigationMenuWidget','a:7:{s:11:\"widget_name\";s:26:\"TenantNavigationMenuWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:10:\"footer_job\";s:12:\"widget_order\";s:1:\"2\";s:18:\"widget_title_en_US\";s:13:\"Usefull Links\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:7:\"menu_id\";s:1:\"2\";}','2022-11-10 09:31:43','2022-11-10 10:31:39'),
	(30,NULL,4,'footer_job','TenantFooterCustomLink','a:8:{s:2:\"id\";s:2:\"30\";s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:10:\"footer_job\";s:12:\"widget_order\";s:1:\"3\";s:11:\"title_en_US\";s:15:\"Other Resources\";s:8:\"title_ar\";N;s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:5:{i:0;s:8:\"Wishlist\";i:1;s:9:\"Shop Cart\";i:2;s:8:\"Checkout\";i:3;s:7:\"Plocies\";i:4;s:7:\"Plocies\";}s:18:\"repeater_url_en_US\";a:5:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";}s:17:\"repeater_title_ar\";a:5:{i:0;s:25:\"قائمة الرغبات\";i:1;s:25:\"قائمة الرغبات\";i:2;s:25:\"قائمة الرغبات\";i:3;s:25:\"قائمة الرغبات\";i:4;s:25:\"قائمة الرغبات\";}s:15:\"repeater_url_ar\";a:5:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";}}}','2022-11-10 09:32:47','2022-11-10 10:31:39'),
	(31,NULL,5,'footer_job','TenantContactInfoWidget','a:13:{s:2:\"id\";s:2:\"31\";s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:10:\"footer_job\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2022-11-10 09:33:37','2022-11-10 10:31:39'),
	(32,NULL,1,'footer_knowledgebase','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"32\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:20:\"footer_knowledgebase\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:69:\"I had I was very sad this day. There were friendly people at the bar.\";s:14:\"description_ar\";s:210:\"لقد كنت حزينا جدا هذا اليوم. كان هناك أناس ودودون في البار.لقد كنت حزينا جدا هذا اليوم. كان هناك أناس ودودون في البار.\";s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"235\";}','2022-11-10 10:31:49','2022-11-10 10:41:32'),
	(33,NULL,2,'footer_knowledgebase','TenantNavigationMenuWidget','a:7:{s:11:\"widget_name\";s:26:\"TenantNavigationMenuWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:20:\"footer_knowledgebase\";s:12:\"widget_order\";s:1:\"2\";s:18:\"widget_title_en_US\";s:13:\"Usefull Links\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:7:\"menu_id\";s:1:\"2\";}','2022-11-10 10:55:04','2022-11-10 10:55:04'),
	(34,NULL,5,'footer_knowledgebase','TenantContactInfoWidget','a:13:{s:2:\"id\";s:2:\"34\";s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:20:\"footer_knowledgebase\";s:12:\"widget_order\";s:1:\"3\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2022-11-10 10:55:59','2022-11-10 12:16:45'),
	(35,NULL,7,'footer_knowledgebase','TenantNewsletterSubmitWidget','a:9:{s:2:\"id\";s:2:\"35\";s:11:\"widget_name\";s:28:\"TenantNewsletterSubmitWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:20:\"footer_knowledgebase\";s:12:\"widget_order\";s:1:\"4\";s:18:\"heading_text_en_US\";s:7:\"Contact\";s:17:\"description_en_US\";s:36:\"You will get all the update from us.\";s:15:\"heading_text_ar\";s:10:\"اتصال\";s:14:\"description_ar\";s:54:\"سوف تحصل على كل التحديثات منا.\";}','2022-11-10 11:18:45','2022-11-10 12:16:45'),
	(36,NULL,1,'footer_ticket','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"36\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:13:\"footer_ticket\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:103:\"Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\";s:14:\"description_ar\";s:54:\"سوف تحصل على كل التحديثات منا.\";s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"236\";}','2022-11-10 12:16:52','2022-11-10 12:18:13'),
	(37,NULL,2,'footer_ticket','TenantNavigationMenuWidget','a:7:{s:11:\"widget_name\";s:26:\"TenantNavigationMenuWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:13:\"footer_ticket\";s:12:\"widget_order\";s:1:\"2\";s:18:\"widget_title_en_US\";s:13:\"Usefull Links\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:7:\"menu_id\";s:1:\"2\";}','2022-11-10 12:20:52','2022-11-10 12:20:52'),
	(38,NULL,4,'footer_ticket','TenantFooterCustomLink','a:7:{s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:13:\"footer_ticket\";s:12:\"widget_order\";s:1:\"3\";s:11:\"title_en_US\";s:8:\"About us\";s:8:\"title_ar\";s:18:\"محتوياتنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:5:{i:0;s:11:\"Who we care\";i:1;s:11:\"Our misions\";i:2;s:13:\"Super visions\";i:3;s:12:\"Recent sales\";i:4;s:15:\"Recent Projects\";}s:18:\"repeater_url_en_US\";a:5:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";}s:17:\"repeater_title_ar\";a:5:{i:0;s:20:\"من نحن نهتم\";i:1;s:20:\"من نحن نهتم\";i:2;s:20:\"من نحن نهتم\";i:3;s:20:\"من نحن نهتم\";i:4;s:20:\"من نحن نهتم\";}s:15:\"repeater_url_ar\";a:5:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";}}}','2022-11-10 12:22:08','2022-12-27 05:45:54'),
	(39,NULL,5,'footer_ticket','TenantContactInfoWidget','a:13:{s:2:\"id\";s:2:\"39\";s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:13:\"footer_ticket\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2022-11-10 12:22:36','2022-12-27 05:45:54'),
	(40,NULL,1,'footer_eCommerce','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"40\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:16:\"footer_eCommerce\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:95:\"This is our shop for best ecommerce marketting are very much greatful to you for your shopping.\";s:14:\"description_ar\";s:84:\"هذا هو متجرنا لأفضل تسويق للتجارة الإلكترونية\";s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"238\";}','2022-12-27 05:46:06','2022-12-27 05:53:12'),
	(41,NULL,2,'footer_eCommerce','TenantFooterCustomLink','a:8:{s:2:\"id\";s:2:\"41\";s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:16:\"footer_eCommerce\";s:12:\"widget_order\";s:1:\"2\";s:11:\"title_en_US\";s:13:\"Helpful links\";s:8:\"title_ar\";s:21:\"روابط مفيدة\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:4:{i:0;s:7:\"Product\";i:1;s:8:\"Category\";i:2;s:14:\"Privacy Policy\";i:3;s:10:\"Conditions\";}s:18:\"repeater_url_en_US\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}s:17:\"repeater_title_ar\";a:4:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2022-12-27 05:48:16','2022-12-27 05:48:48'),
	(42,NULL,3,'footer_eCommerce','TenantFooterCustomLink','a:8:{s:2:\"id\";s:2:\"42\";s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:16:\"footer_eCommerce\";s:12:\"widget_order\";s:1:\"3\";s:11:\"title_en_US\";s:7:\"Account\";s:8:\"title_ar\";s:12:\"رؤيتنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:4:{i:0;s:8:\"Wishlist\";i:1;s:7:\"My Cart\";i:2;s:7:\"Compare\";i:3;s:4:\"Shop\";}s:18:\"repeater_url_en_US\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}s:17:\"repeater_title_ar\";a:4:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2022-12-27 05:49:31','2022-12-27 05:49:50'),
	(43,NULL,4,'footer_eCommerce','TenantContactInfoWidget','a:12:{s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:16:\"footer_eCommerce\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2022-12-27 05:50:36','2022-12-27 05:50:36'),
	(44,NULL,1,'footer_agency','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"44\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:13:\"footer_agency\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:137:\"I had I was very sad this day. There were friendly people at the bar that engaged with me. Interactions with people was very well needed.\";s:14:\"description_ar\";s:199:\"لقد كنت حزينا جدا هذا اليوم. كان هناك أشخاص ودودون في الحانة تعاملوا معي. كانت هناك حاجة ماسة للتفاعل مع الناس.\";s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"311\";}','2023-01-14 12:25:14','2023-01-14 12:48:36'),
	(45,NULL,2,'footer_agency','TenantFooterCustomLink','a:7:{s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:13:\"footer_agency\";s:12:\"widget_order\";s:1:\"2\";s:11:\"title_en_US\";s:8:\"Navigate\";s:8:\"title_ar\";s:18:\"محتوياتنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:4:{i:0;s:12:\"How it works\";i:1;s:7:\"Service\";i:2;s:13:\"Our Portfolio\";i:3;s:8:\"Our Blog\";}s:18:\"repeater_url_en_US\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}s:17:\"repeater_title_ar\";a:4:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2023-01-14 12:26:31','2023-01-14 12:26:31'),
	(46,NULL,3,'footer_agency','TenantFooterCustomLink','a:8:{s:2:\"id\";s:2:\"46\";s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:13:\"footer_agency\";s:12:\"widget_order\";s:1:\"3\";s:11:\"title_en_US\";s:5:\"About\";s:8:\"title_ar\";N;s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:4:{i:0;s:10:\"Who we are\";i:1;s:10:\"Contact Us\";i:2;s:14:\"Our activities\";i:3;s:14:\"Privacy Policy\";}s:18:\"repeater_url_en_US\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}s:17:\"repeater_title_ar\";a:4:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2023-01-14 12:26:58','2023-01-14 12:27:52'),
	(47,NULL,4,'footer_agency','TenantContactInfoWidget','a:12:{s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:13:\"footer_agency\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:12:\"فئةفئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2023-01-14 12:28:08','2023-01-14 12:28:08'),
	(50,NULL,1,'newspaper_sidebar','TenantSocialMediaOne','a:6:{s:2:\"id\";s:2:\"50\";s:11:\"widget_name\";s:20:\"TenantSocialMediaOne\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:17:\"newspaper_sidebar\";s:12:\"widget_order\";s:1:\"1\";s:29:\"newspaper_social_one_repeater\";a:6:{s:20:\"repeater_title_en_US\";a:10:{i:0;s:9:\"Followers\";i:1;s:9:\"Followers\";i:2;s:9:\"Followers\";i:3;s:9:\"Followers\";i:4;s:9:\"Followers\";i:5;s:9:\"Followers\";i:6;s:9:\"Followers\";i:7;s:9:\"Followers\";i:8;s:9:\"Followers\";i:9;s:9:\"Followers\";}s:18:\"repeater_url_en_US\";a:10:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";i:5;s:1:\"#\";i:6;s:1:\"#\";i:7;s:1:\"#\";i:8;s:1:\"#\";i:9;s:1:\"#\";}s:21:\"repeater_number_en_US\";a:10:{i:0;s:4:\"1500\";i:1;s:4:\"1500\";i:2;s:4:\"1500\";i:3;s:4:\"1500\";i:4;s:4:\"1500\";i:5;s:4:\"1500\";i:6;s:4:\"1500\";i:7;s:4:\"1500\";i:8;s:4:\"1500\";i:9;s:4:\"1500\";}s:17:\"repeater_title_ar\";a:10:{i:0;s:14:\"متابعون\";i:1;s:14:\"متابعون\";i:2;s:14:\"متابعون\";i:3;s:14:\"متابعون\";i:4;s:14:\"متابعون\";i:5;s:14:\"متابعون\";i:6;s:14:\"متابعون\";i:7;s:14:\"متابعون\";i:8;s:14:\"متابعون\";i:9;s:14:\"متابعون\";}s:15:\"repeater_url_ar\";a:10:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";i:5;s:1:\"#\";i:6;s:1:\"#\";i:7;s:1:\"#\";i:8;s:1:\"#\";i:9;s:1:\"#\";}s:18:\"repeater_number_ar\";a:10:{i:0;s:4:\"1500\";i:1;s:4:\"1500\";i:2;s:4:\"1500\";i:3;s:4:\"1500\";i:4;s:4:\"1500\";i:5;s:4:\"1500\";i:6;s:4:\"1500\";i:7;s:4:\"1500\";i:8;s:4:\"1500\";i:9;s:4:\"1500\";}}}','2023-01-16 11:00:24','2023-01-16 11:08:23'),
	(51,NULL,2,'newspaper_sidebar','Advertise','a:6:{s:2:\"id\";s:2:\"51\";s:11:\"widget_name\";s:9:\"Advertise\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:17:\"newspaper_sidebar\";s:12:\"widget_order\";s:1:\"2\";s:13:\"advertisement\";s:2:\"13\";}','2023-01-16 11:06:55','2023-01-16 11:06:57'),
	(52,NULL,1,'newspaper_sidebar_two','TenantNewsNewsletterWidget','a:9:{s:2:\"id\";s:2:\"52\";s:11:\"widget_name\";s:26:\"TenantNewsNewsletterWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:21:\"newspaper_sidebar_two\";s:12:\"widget_order\";s:1:\"1\";s:18:\"heading_text_en_US\";s:14:\"Latest Updates\";s:17:\"button_text_en_US\";s:9:\"Subscribe\";s:15:\"heading_text_ar\";s:25:\"آخر التحديثات\";s:14:\"button_text_ar\";s:16:\"الإشتراك\";}','2023-01-16 11:44:59','2023-01-16 11:45:36'),
	(53,NULL,2,'newspaper_sidebar_two','TenantNewsCategoryWidget','a:8:{s:2:\"id\";s:2:\"53\";s:11:\"widget_name\";s:24:\"TenantNewsCategoryWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:21:\"newspaper_sidebar_two\";s:12:\"widget_order\";s:1:\"2\";s:18:\"widget_title_en_US\";s:10:\"Categories\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:14:\"category_items\";s:1:\"8\";}','2023-01-16 11:46:33','2023-01-16 11:49:37'),
	(54,NULL,1,'newspaper_footer','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"54\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:16:\"newspaper_footer\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:137:\"I had I was very sad this day. There were friendly people at the bar that engaged with me. Interactions with people was very well needed.\";s:14:\"description_ar\";s:199:\"لقد كنت حزينا جدا هذا اليوم. كان هناك أشخاص ودودون في الحانة تعاملوا معي. كانت هناك حاجة ماسة للتفاعل مع الناس.\";s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"337\";}','2023-01-16 11:59:19','2023-01-16 12:00:08'),
	(56,NULL,2,'newspaper_footer','TenantPopularNewsWidget','a:7:{s:11:\"widget_name\";s:23:\"TenantPopularNewsWidget\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:16:\"newspaper_footer\";s:12:\"widget_order\";s:1:\"2\";s:18:\"heading_text_en_US\";s:7:\"Popular\";s:15:\"heading_text_ar\";s:6:\"جمع\";s:10:\"blog_items\";s:1:\"2\";}','2023-01-16 12:07:12','2023-01-16 12:07:12'),
	(57,NULL,3,'newspaper_footer','TenantFooterCustomLink','a:8:{s:2:\"id\";s:2:\"57\";s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:16:\"newspaper_footer\";s:12:\"widget_order\";s:1:\"3\";s:11:\"title_en_US\";s:5:\"About\";s:8:\"title_ar\";s:18:\"محتوياتنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:5:{i:0;s:10:\"Who we are\";i:1;s:14:\"Our activities\";i:2;s:10:\"Contact us\";i:3;s:14:\"Privacy policy\";i:4;s:18:\"Terms & Conditions\";}s:18:\"repeater_url_en_US\";a:5:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";}s:17:\"repeater_title_ar\";a:5:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";i:4;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:5:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;N;}}}','2023-01-16 12:08:47','2023-01-16 12:09:50'),
	(58,NULL,4,'newspaper_footer','TenantContactInfoWidget','a:13:{s:2:\"id\";s:2:\"58\";s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:16:\"newspaper_footer\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2023-01-16 12:12:48','2023-01-16 12:13:05'),
	(59,NULL,1,'construction_footer','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"59\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:19:\"construction_footer\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:137:\"I had I was very sad this day. There were friendly people at the bar that engaged with me. Interactions with people was very well needed.\";s:14:\"description_ar\";N;s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"356\";}','2023-01-24 12:58:16','2023-01-24 13:09:40'),
	(60,NULL,2,'construction_footer','TenantFooterCustomLink','a:8:{s:2:\"id\";s:2:\"60\";s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:19:\"construction_footer\";s:12:\"widget_order\";s:1:\"2\";s:11:\"title_en_US\";s:5:\"About\";s:8:\"title_ar\";s:18:\"محتوياتنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:4:{i:0;s:7:\"Company\";i:1;s:6:\"Career\";i:2;s:4:\"Team\";i:3;s:4:\"Blog\";}s:18:\"repeater_url_en_US\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}s:17:\"repeater_title_ar\";a:4:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2023-01-24 12:59:28','2023-01-24 13:00:24'),
	(61,NULL,3,'construction_footer','TenantFooterCustomLink','a:8:{s:2:\"id\";s:2:\"61\";s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:19:\"construction_footer\";s:12:\"widget_order\";s:1:\"3\";s:11:\"title_en_US\";s:7:\"Support\";s:8:\"title_ar\";s:18:\"محتوياتنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:4:{i:0;s:11:\"Help Center\";i:1;s:8:\"Faq Data\";i:2;s:14:\"Privacy Policy\";i:3;s:17:\"Terms & Condition\";}s:18:\"repeater_url_en_US\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}s:17:\"repeater_title_ar\";a:4:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2023-01-24 13:01:01','2023-01-24 13:02:11'),
	(62,NULL,4,'construction_footer','TenantContactInfoWidget','a:13:{s:2:\"id\";s:2:\"62\";s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:19:\"construction_footer\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:6:\"فئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2023-01-24 13:02:40','2023-01-24 13:02:44'),
	(63,NULL,4,'consultancy_footer','TenantContactInfoWidget','a:13:{s:2:\"id\";s:2:\"63\";s:11:\"widget_name\";s:23:\"TenantContactInfoWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:18:\"consultancy_footer\";s:12:\"widget_order\";s:1:\"4\";s:18:\"widget_title_en_US\";s:10:\"Contact Us\";s:14:\"location_en_US\";s:19:\"Rampura, Dhaka-1208\";s:11:\"phone_en_US\";s:12:\"+11469162796\";s:11:\"email_en_US\";s:23:\"hejynoha@mailinator.com\";s:15:\"widget_title_ar\";s:13:\"فئ ةفئة\";s:11:\"location_ar\";s:19:\"Rampura, Dhaka-1208\";s:8:\"phone_ar\";s:12:\"+11469162796\";s:8:\"email_ar\";s:23:\"hejynoha@mailinator.com\";}','2023-01-28 08:14:48','2023-01-28 08:14:58'),
	(64,NULL,1,'consultancy_footer','TenantFooterAboutUsWidget','a:12:{s:2:\"id\";s:2:\"64\";s:11:\"widget_name\";s:25:\"TenantFooterAboutUsWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:18:\"consultancy_footer\";s:12:\"widget_order\";s:1:\"1\";s:17:\"description_en_US\";s:137:\"I had I was very sad this day. There were friendly people at the bar that engaged with me. Interactions with people was very well needed.\";s:14:\"description_ar\";N;s:12:\"facebook_url\";s:1:\"#\";s:13:\"instagram_url\";s:1:\"#\";s:12:\"linkedin_url\";s:1:\"#\";s:11:\"twitter_url\";s:1:\"#\";s:11:\"footer_logo\";s:3:\"386\";}','2023-01-28 08:15:45','2023-01-28 08:20:58'),
	(65,NULL,2,'consultancy_footer','TenantFooterCustomLink','a:7:{s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:18:\"consultancy_footer\";s:12:\"widget_order\";s:1:\"2\";s:11:\"title_en_US\";s:5:\"About\";s:8:\"title_ar\";s:12:\"رؤيتنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:4:{i:0;s:7:\"Company\";i:1;s:6:\"Career\";i:2;s:4:\"Team\";i:3;s:4:\"Blog\";}s:18:\"repeater_url_en_US\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}s:17:\"repeater_title_ar\";a:4:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2023-01-28 08:16:37','2023-01-28 08:16:37'),
	(66,NULL,3,'consultancy_footer','TenantFooterCustomLink','a:7:{s:11:\"widget_name\";s:22:\"TenantFooterCustomLink\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:18:\"consultancy_footer\";s:12:\"widget_order\";s:1:\"3\";s:11:\"title_en_US\";s:7:\"Support\";s:8:\"title_ar\";s:18:\"محتوياتنا\";s:27:\"custom_link_widget_repeater\";a:4:{s:20:\"repeater_title_en_US\";a:4:{i:0;s:11:\"Help Center\";i:1;s:3:\"Faq\";i:2;s:14:\"Privacy Policy\";i:3;s:15:\"Terms & Support\";}s:18:\"repeater_url_en_US\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}s:17:\"repeater_title_ar\";a:4:{i:0;s:21:\"روابط مفيدة\";i:1;s:21:\"روابط مفيدة\";i:2;s:21:\"روابط مفيدة\";i:3;s:21:\"روابط مفيدة\";}s:15:\"repeater_url_ar\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2023-01-28 08:17:48','2023-01-28 08:17:48')");
    }

}