-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        10.4.8-MariaDB - mariadb.org binary distribution
-- 伺服器操作系統:                      Win64
-- HeidiSQL 版本:                  10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 傾印 project0118 的資料庫結構
CREATE DATABASE IF NOT EXISTS `project0118` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `project0118`;

-- 傾印  表格 project0118.contact 結構
CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.contact 的資料：~4 rows (約數)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `name`, `mobile_phone`, `email`, `question`, `created_at`, `updated_at`) VALUES
	(1, '廖偉強1624', '0979292692', 'aresign2002@gmail.com', '謝謝', '2020-01-21 16:33:43', '2020-01-21 16:33:43'),
	(2, '廖偉強1624', '0979292692', 'aresign2002@gmail.com', 'yooo', '2020-01-21 16:40:52', '2020-01-21 16:40:52'),
	(3, 'test', 'test', 'test@gmail.com', 'test', '2020-01-21 21:07:41', '2020-01-21 21:07:41'),
	(4, 'test2', 'test2', 'test@gmail.com', 'test2', '2020-01-21 21:10:09', '2020-01-21 21:10:09');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- 傾印  表格 project0118.failed_jobs 結構
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.failed_jobs 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- 傾印  表格 project0118.migrations 結構
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.migrations 的資料：~11 rows (約數)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_04_020812_create_news_table', 1),
	(5, '2019_12_17_051215_create_products_table', 1),
	(6, '2019_12_26_061145_create_orders_table', 1),
	(7, '2019_12_26_065111_create_order_items_table', 1),
	(8, '2020_01_18_143726_create_towns_table', 1),
	(9, '2020_01_18_143848_create_town_scenic_spots_table', 1),
	(10, '2020_01_18_144054_create_contact_table', 1),
	(11, '2020_01_18_154412_create_yunlin_wander_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- 傾印  表格 project0118.news 結構
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_organiser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.news 的資料：~5 rows (約數)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `content`, `img`, `date_start`, `date_end`, `location`, `address`, `host`, `co_organiser`, `tel`, `coordinate`, `sort`, `created_at`, `updated_at`) VALUES
	(2, '2020北港燈會-「光耀北港 吉慶團圓」', '<div>展期:109年2月7日至2月16日</div><div>範圍:北港朝天宮前巷弄(安和路、共和街)、水道頭燈區、巷弄燈區、北港顏思齊圓環、朝天宮宗聖臺、北港觀光大橋上方等</div><div><br></div><div>啟燈晚會</div><div>晚會時間：2 / 7(五)晚上7點 / 晚會地點：北港朝天宮廟口</div>', 'mfXyeEeltAeqkWSjWeB8Hb0QoabDpVCKC38nANPC.jpeg', '2020-02-07', '2020-02-16', '北港朝天宮廟口', '北港朝天宮廟口', '雲林縣政府文化觀光處', '北港朝天宮', '05-5523188', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0109167770875!2d120.30253291542942!3d23.568051401633596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ea285b604f125%3A0x7a7c8b94e816afce!2z5ZyL5a6a5Y-k6LmfLeWMl-a4r-acneWkqeWurg!5e0!3m2!1szh-TW!2stw!4v1579590350339!5m2!1szh-TW!2stw', 1, '2020-01-21 16:11:12', '2020-01-21 20:42:31'),
	(3, '2020雲林幸福連連-新春至元宵‧幸福強強滾！', '<div>雲林縣政府推出五大主題遊程，「朝聖祈福行」、「經典小鎮遊」、「濃情浪漫遊」、「限定古早味」及「背包微旅行」，並搭配「雲林縣地方文化館節」與「元宵節燈會」，要讓返鄉過節的鄉親和外地遊客，感受幸福連連的雲林！</div><div>▲新春送幸福：</div><div>福袋自除夕(1/24)發放到初三(1/27)，將幸福送至縣內20個鄉鎮，如北港朝天宮、四湖參天宮、西螺福興宮、褒忠馬鳴山鎮安宮等等，詳細的地點與時間，歡迎搜尋「雲林縣政府官網新春資訊專區」。</div><div>▲地方文化館節：</div><div>以「人．情．事．故－館來說故事」為主題，整合串聯包括雲林布袋戲館、雲林故事館、雲林記憶COOL、二手玩具屋、雲林官邸兒童館、詔安客家文化館、西螺延平老街文化館、二崙故事屋、北港文化中心、北港工藝坊、北港遊客中心、黃金蝙蝠生態館、菅蓁寮街角文化館、台西海口故事屋以及他里霧文化園區等18館，從小年夜到初五（1/23-1/29）陪你溫馨過鼠年，不但有「地方學特展」，還有「新春刮刮樂」、「集章抽福袋」送禮好康哦！(數量有限，送完為止) ，歡迎鄉親作伙來地方文化館走春！</div><div>▲街頭藝人表演：</div><div>初一到初三14:00-16:00街頭藝人演出地點:</div><div>農博生態園區、虎尾同心公園、鄧麗君幼年故居、西螺大橋、斗南火車站、斗六雲中街、古坑綠色隧道、土庫順天宮前、台西海口故事屋、北港工藝坊前廣場。</div><div>▲元宵節燈會：</div><div>☆2020北港燈會：燈會展期自2/7~2/16，串聯北港水道頭文化園區、圓環顏思齊紀念碑、北港朝天宮及觀光大橋上，以「光耀北港‧吉慶團圓」為主題；另結合老街巷弄以「童年往事」為題材，融合北港文化、宗教、歷史的各式環境藝術作品，並採傳統鼓仔燈營造老街燈海璀燦氛圍！</div><div>☆斗六圓環燈會：燈會展期1/8至2/9。</div><div>☆虎尾燈會：燈會展期1/18至2/9，於虎尾多功能活動中心。</div><div>新春遊雲林，讓您玩透透！</div><div><br></div>', 'jashhqwYtrfxpUgxatO1Ks0DGxqpJ1bGFOT4jH1m.jpeg', '2020-01-17', '2020-02-16', '雲林縣政府文化處', '雲林縣政府文化處', '雲林縣政府文化處', '雲林縣政府文化處', '05-5523188', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.4848573307245!2d120.45838851543212!3d23.801351792743905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eb43e466d3893%3A0x63e5827c6551858a!2z6LKh5ZyY5rOV5Lq66Zuy5p6X57ij6KW_6J6656aP6IiI5a6uIOilv-ieuuWqveelluWkquW5s-WqvQ!5e0!3m2!1szh-TW!2stw!4v1579594413679!5m2!1szh-TW!2stw', 1, '2020-01-21 16:14:07', '2020-01-21 20:44:30'),
	(4, '雲林縣18個特色地方文化館~陪你溫馨過鼠年~', '<div>擔心過年不知道去哪玩嗎？從小年夜到初五（1/23-1/29），雲林縣18個特色 #地方文化館 陪你溫馨過鼠年！</div><div>不但有「地方學特展」，還有新春刮刮樂、集章抽福袋的送禮好康哦！</div><div>新春刮刮樂：春節期間走訪各館舍，每日限量發送刮刮卡，刮中即可獲得地方文化館文創小禮品，歡迎大家一起來走春！數量有限，送完為止！</div><div>集章抽福袋：春節期間（1/23-1/29）到雲林縣地方文化館(註1) 參加集章活動，只要集滿5個館舍戳章，就能參加抽獎，有機會獲得雲林文創福袋！</div><div>歡迎各位鄉親作伙來地方文化館走春，一同欣賞展覽、看表演、玩遊戲，還有物超所值的DIY體驗，讓我們用新鮮的、好玩的方式認識雲林。細讀地方學，就從「遊雲林」開始！精彩豐富的活動等你來參與！</div><div><br></div><div>註1：有刮刮樂、集章抽福袋的地方文化館舍共14處，分別為：雲林布袋戲館、雲林故事館、雲林記憶COOL、二手玩具屋、雲林官邸兒童館、詔安客家文化館、西螺延平老街文化館、二崙故事屋、北港文化中心、北港工藝坊、北港遊客中心、黃金蝙蝠生態館、台西海口故事屋、他里霧文化園區。</div><div>地方文化館節詳細資訊都在這裡https://www.facebook.com/ylccb/</div><div><br></div>', 'xs788gPrADcLcV1xQpVobHfcQXwS9AYGB7n77j6M.jpeg', '2020-01-23', '2020-01-29', '雲林縣地方文化館', '雲林縣地方文化館', '雲林縣政府文化觀光處', '雲林縣政府文化處', '05-5523188', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.0741516122675!2d120.4307743154311!3d23.709045896270784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eb0ab8006c959%3A0x11fe0d4dde76d2b!2z6Zuy5p6X5pWF5LqL6aSo!5e0!3m2!1szh-TW!2stw!4v1579594558913!5m2!1szh-TW!2stw', 1, '2020-01-21 16:16:50', '2020-01-21 20:43:11'),
	(5, '雲林縣現場揮毫送春聯活動訊息', '<table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">遠遠就看到喜氣洋洋的一片大紅色~~~~~今日的展覽館人潮湧動~大家都在排隊等待什麼呢?</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">哇~原來是在領現場揮毫的春聯啊~風格各異的每張春聯都是大師的傑作喔~今日沒有領到的民眾也別失望，現在要來跟大家分享我們雲林縣各處的現場揮毫送春聯的活動訊息喔~大家快把時間記起來~~</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">1.1/15(三)14:00~17:00(高鐵雲林站大廳)</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">2.1/17(五)08:50~12:35(雲林縣政府親民大廳)</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">3.1/19(日)09:00~12:00和14:00~17:00(斗六火車站)</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;"></table><div>除了這些，還有好多好多場次喔~詳情請參考以下資訊!!</div>', 'Ms1lOQggROi6qct50E6Aq6nNZfqWx8WuaP83D3GH.jpeg', '2020-01-17', '2020-01-21', '雲林高鐵站大廳', '雲林高鐵站', '雲林縣政府文化觀光處', '雲林縣政府文化處', '05-5523178', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.9980035304097!2d120.53859446540608!3d23.711765334608437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ec83a999d15b1%3A0xccb8faecc02b4083!2z5paX5YWt54Gr6LuK56uZ!5e0!3m2!1szh-TW!2stw!4v1579591967273!5m2!1szh-TW!2stw', 1, '2020-01-21 16:18:16', '2020-01-21 20:44:39'),
	(6, '【雲林散策．達人帶路】追古蹟、喫小吃、訪風情的小旅行', '<table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">雲林北港，為台灣燈會原鄉，同時也孕育出宗教文化與豐富多樣的建築之美。</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">無論是清康熙33年建立的北港朝天宮、源自日治時期的水道頭園區，或是落成於日治昭和2年的大復戲院等，都再再記錄了這些人、那些事的歷史變遷。在雲林縣政府與民間團體的投入下，雲林北港即將玩出全新風貌。一起來吧！走讀雲林北港著名文化資產，一窺在地的往日故事，重新認識雲林北港的文化觀光之美！</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">1.11/30(六)打卡在雲林．探索小鎮故事（台中出發）</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">報名網址:https://reurl.cc/pD5G7Q</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">說到雲林，或許你只去過北港朝天宮，這次，要深入更陌生的鄉鎮－口湖、水林，這兩個以農漁業為主的鄉鎮，隨著時代的變遷，工廠開始轉型成觀光工廠、村落開始融入藝術養分，吸引旅客前往拍照打卡，但除了拍拍照，背後更有許多故事值得去聆聽，就讓我們跟著達人的腳步，一起體驗這塊土地的生活。</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">2.12/8(日) 來一碗，雲林！跟著內行人吃美食（台中出發）</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">報名網址:https://reurl.cc/K63GVM</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">從達人的角度出發，體驗雲林的多樣與驚艷。</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">北港，除了盛名的「朝天宮」，這次更要深入「北港老街」品嘗多樣在地美食，再前往「好蝦冏男社」，從玩蝦、聽蝦、吃蝦，深度體驗養蝦人家的生活，最後抵達「海中寶烏魚子」，認識烏魚子的產地，深入認識台灣的代表性特產，從歷代傳承到青年獨立創業，從食材原型到上桌的小吃料理，讓我們透過美食了解雲林的變化萬千，一同用休憩散步的緩慢腳步，重新認識這個充滿文化底蘊的城市。</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">3.12/15(日)-16(一) 走讀雲林．漫旅北港老屋及文資活化</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;">報名網址:https://reurl.cc/ObjyNv</table><table border="0" cellpadding="0" cellspacing="0" width="253" style="width: 190pt;"></table><div>本次「雲林散策．達人帶路」的兩日行程，達人將帶領您走讀著名文化資產，一窺在地的往日故事。也分享，在公部門與民間團體的投入下，老建築如何玩出新風貌，一起重新認識雲林的文化之美。</div>', 'FQXd2tfGsUozvJnkIE1k9zpzMVz1ExLmodRS4iB1.jpeg', '2019-11-21', '2025-12-15', '雲林縣北港鎮', '雲林縣北港鎮', '雲林縣政府文化處', '傑森全球整合行銷股份有限公司', '05-5523184', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58502.78450208897!2d120.26439060585726!3d23.589120975183615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ea2f64300e9cb%3A0xb5624eb970e7db84!2zNjUx6Zuy5p6X57ij5YyX5riv6Y6u!5e0!3m2!1szh-TW!2stw!4v1579592552498!5m2!1szh-TW!2stw', 1, '2020-01-21 16:20:35', '2020-01-21 20:44:47');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- 傾印  表格 project0118.orders 結構
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new_order',
  `remark` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.orders 的資料：~2 rows (約數)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `order_no`, `receive_name`, `receive_phone`, `receive_mobile`, `receive_address`, `receive_email`, `receipt_option`, `time_option`, `status`, `remark`, `total_price`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'RS2020012211281', '廖偉強', '0979292692', '0979292692', '建功一路97號9F-1', 'aresign2002@gmail.com', '三聯式發票', '中午前', 'payment_done', 'remark', 1800, NULL, '2020-01-22 11:28:01', '2020-01-22 11:29:31'),
	(2, 'RS2020012211432', '廖偉強', '0979292692', '0979292692', '光復路2段101號國立清華大學&nbsp;&nbsp;二區宿舍管理服務中心 信齋B405室', 'aresign2002@gmail.com', '三聯式發票', '中午前', 'payment_done', 'remark', 500, NULL, '2020-01-22 11:43:47', '2020-01-22 11:44:44');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- 傾印  表格 project0118.order_items 結構
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.order_items 的資料：~2 rows (約數)
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 3, 600, NULL, '2020-01-22 11:28:01', '2020-01-22 11:28:01'),
	(2, 2, 4, 1, 500, NULL, '2020-01-22 11:43:47', '2020-01-22 11:43:47');
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

-- 傾印  表格 project0118.password_resets 結構
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.password_resets 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- 傾印  表格 project0118.products 結構
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stack` int(11) NOT NULL,
  `sales` int(11) NOT NULL,
  `expected_date` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.products 的資料：~2 rows (約數)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `note`, `content`, `price`, `stack`, `sales`, `expected_date`, `days`, `created_at`, `updated_at`) VALUES
	(2, '雲林pass 72hrs', '注意事項', '內文', 600, 1, 1, '2020-01-21', 72, '2020-01-20 13:20:19', '2020-01-20 13:20:19'),
	(4, '雲林pass 48hrs', '注意事項1', '內文1', 500, 1, 1, '2020-01-22', 48, '2020-01-20 13:23:22', '2020-01-20 13:27:00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- 傾印  表格 project0118.towns 結構
CREATE TABLE IF NOT EXISTS `towns` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.towns 的資料：~20 rows (約數)
/*!40000 ALTER TABLE `towns` DISABLE KEYS */;
INSERT INTO `towns` (`id`, `name`, `post_code`, `img`, `content`, `created_at`, `updated_at`) VALUES
	(1, '斗南鎮-雲林首墾', '630', 'KE7mjsB1JzKTdKqPrE29Sufnsnch1lf2iNBzPiWM.jpeg', '<p>斗南鎮<br></p>', '2020-01-20 14:24:41', '2020-01-20 14:24:41'),
	(2, '大埤鄉-酸菜的故鄉', '631', 'xQr7r768InLARtqEgPPGm4GKmQcZrbjC42Q1Mvfm.jpeg', '<p>大埤鄉<br></p>', '2020-01-20 14:25:06', '2020-01-20 14:25:06'),
	(3, '虎尾鎮-布袋戲的故鄉', '632', 'z6H2ix0mfpc2QQJSxNnysVN5knw4ibHQq7lexWaZ.jpeg', '<p>虎尾鎮<br></p>', '2020-01-20 14:25:23', '2020-01-20 14:25:23'),
	(4, '土庫鎮-麻油的故鄉', '633', 'umtG3b9EeqvhQGyKtuuSWYxzwXzZcWrYxoBTkgWS.jpeg', '<p>土庫鎮<br></p>', '2020-01-20 14:25:37', '2020-01-20 14:25:37'),
	(5, '褒忠鄉-鄧麗君的故鄉', '634', 'FuQc5h0YHL6CiDvmBdhhiMY00QsCczvxqb9AWD7b.jpeg', '<p>褒忠鄉<br></p>', '2020-01-20 14:25:54', '2020-01-20 14:25:54'),
	(6, '東勢鄉-鵝鄉', '635', 'q9ayyL27GIDdfiazwRkOV4hpnZbhopqRmFPGgw9M.jpeg', '<p>東勢鄉<br></p>', '2020-01-20 14:26:47', '2020-01-20 14:26:47'),
	(7, '台西鄉-文蛤的故鄉', '636', '1od0ZJzFWkwLnI36BQLQviMDZyLbwUBOSKfdmcs3.jpeg', '<p>台西鄉<br></p>', '2020-01-20 14:27:00', '2020-01-20 14:27:00'),
	(8, '崙背鄉-酪農的故鄉', '637', 'FhQEP7jc1g2MT6i4kKTCV42QriRLnrFSliSPiWfy.jpeg', '<p>崙背鄉<br></p>', '2020-01-20 14:27:16', '2020-01-20 14:27:16'),
	(9, '麥寮鄉-榨菜的故鄉', '638', 'jz1Ia7vc2G1wmON6Yw4xCuwNPHX74MAYcXX9CAEO.jpeg', '<p>麥寮鄉<br></p>', '2020-01-20 14:27:29', '2020-01-20 14:27:29'),
	(10, '斗六市-文旦的故鄉', '640', 'OQs2Eoeby0sjHG2w11yxBstkz9Y4dpVLQiZ0TUbA.jpeg', '<p>斗六市<br></p>', '2020-01-20 14:27:42', '2020-01-20 14:27:42'),
	(11, '林內鄉-紫斑蝶勝景', '643', 'KlBtRwmcWLRxK9U55I0XcdrVOqhNScNEVTkdZg4v.jpeg', '<p>林內鄉<br></p>', '2020-01-20 14:27:54', '2020-01-20 14:27:54'),
	(12, '古坑鄉-台灣咖啡山', '646', 'G8k9ATNDcU8U1rMBwEx7nGN279pEmzspuTTep2sH.jpeg', '<p>古坑鄉<br></p>', '2020-01-20 14:28:11', '2020-01-20 14:28:11'),
	(13, '莿桐鄉-蒜頭的故鄉', '647', '3YKCmtzIes9WBAu6cdpo95HPDOAy81xDT1cN4voU.jpeg', '<p>莿桐鄉<br></p>', '2020-01-20 14:28:24', '2020-01-20 14:28:24'),
	(14, '西螺鎮-醬油的故鄉', '648', 'yc39IaU8otmNf8fzUJlsNbbjCIXNPGPXKHbj1frS.jpeg', '<p>西螺鎮<br></p>', '2020-01-20 14:28:40', '2020-01-20 14:28:40'),
	(15, '二崙鄉-美濃瓜的故鄉', '649', 'O16MWUue2vT9ed8xudakajWcXGnpTR8NYvvpL6sj.jpeg', '<p>二崙鄉<br></p>', '2020-01-20 14:28:56', '2020-01-20 14:28:56'),
	(16, '北港鎮-花生的故鄉', '651', 'z8wWuykrPYkjSHA8PP4BWLCGDFXccmZQihVmh2OQ.jpeg', '<p>北港鎮<br></p>', '2020-01-20 14:29:19', '2020-01-20 14:29:19'),
	(17, '水林鄉-番薯的故鄉', '652', '05RTh7JwdWlC64i1mMf8w87vPHmp0lHDi81qarZH.jpeg', '<p>水林鄉<br></p>', '2020-01-20 14:29:33', '2020-01-20 14:29:33'),
	(18, '口湖鄉-烏魚子的故鄉', '653', 'wckBCXLVZkIBw4y6d44nwXJ8qthhrgfNl59tJMM6.jpeg', '<p>口湖鄉<br></p>', '2020-01-20 14:29:53', '2020-01-20 14:29:53'),
	(19, '四湖鄉-蒜頭的故鄉', '654', '8WWOIg3FYQVtj96GZiVqlYqJTs4GzCuQopChT8B9.jpeg', '<p>四湖鄉<br></p>', '2020-01-20 14:30:04', '2020-01-20 14:30:04'),
	(20, '元長鄉-純樸的地方', '655', 'eEc7cZrCSHvmPwpLvp3wCFjv3HMcBFOK1JioOgNE.jpeg', '<p>元長鄉<br></p>', '2020-01-20 14:30:16', '2020-01-20 14:30:16');
/*!40000 ALTER TABLE `towns` ENABLE KEYS */;

-- 傾印  表格 project0118.town_scenic_spots 結構
CREATE TABLE IF NOT EXISTS `town_scenic_spots` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `town_id` bigint(20) unsigned NOT NULL,
  `spot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spot_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spot_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `town_scenic_spots_town_id_foreign` (`town_id`),
  CONSTRAINT `town_scenic_spots_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.town_scenic_spots 的資料：~60 rows (約數)
/*!40000 ALTER TABLE `town_scenic_spots` DISABLE KEYS */;
INSERT INTO `town_scenic_spots` (`id`, `town_id`, `spot_name`, `spot_img`, `spot_url`, `created_at`, `updated_at`) VALUES
	(1, 1, '行霧吊橋', 'KzWHVhfrCg6H1QwFUI76AFd8BJXWrLC4X3J5eKqx.jpeg', NULL, '2020-01-20 15:39:15', '2020-01-20 15:39:15'),
	(2, 1, '他里霧文化園區', 'j3XMzJmvlg6QHKrPd44cWALpg5xv1NRbR7gPBZk0.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=426', '2020-01-20 15:42:55', '2020-01-20 15:42:55'),
	(3, 1, '偶的家', '5wVtqJBOGAvwckAJRYuGo2MfXBlkwSkte0FCKQM7.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=60', '2020-01-20 15:43:22', '2020-01-20 15:43:22'),
	(4, 2, '三山國王廟', 'eTnhov5oS8IYHE13vsIYjOB5dQ9RsqPBPRpqPwHI.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=275', '2020-01-20 15:46:51', '2020-01-20 15:46:51'),
	(5, 2, '三秀園', 'cILunQtlKEpK4eHDCRBBUzmNz0nJiVdQSeCugWfg.jpeg', NULL, '2020-01-20 15:47:09', '2020-01-20 15:47:09'),
	(6, 2, '育成水耕教育農場', 'ORb6AFDtarf9EuWjgNzAagdnJxp8VrKfHjeLfs1z.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=523', '2020-01-20 15:47:37', '2020-01-20 15:47:37'),
	(7, 3, '虎尾布袋戲館', 'OPg3QuUg7AMtbxCJkEk4NgdxONnzV4xnYTSK0VvD.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=51', '2020-01-20 15:49:13', '2020-01-20 15:49:13'),
	(8, 3, '農博生態園區', '6hiieyjsVGN7QN1w5WCVBJc4ZkSYZCkIujB0eSJw.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=82&sub_id=101&id=492', '2020-01-20 15:50:35', '2020-01-20 15:50:35'),
	(9, 3, '屋頂上的貓', 'tOP9QzxgRExGBeyYyLrdmOFcgp6UzLfal4anvn9q.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=82&sub_id=101&id=492', '2020-01-20 15:51:44', '2020-01-20 15:51:44'),
	(10, 4, '土庫故事屋', 'VNcpK8Oeovq9CB5FxwnIrD8BEzRNzg7fCeT5QgsD.jpeg', NULL, '2020-01-20 15:53:33', '2020-01-20 15:53:33'),
	(11, 4, '源順芝麻觀光油廠', '7wplybmuIJkqqASSGtG7itzbTQvXHqcuQx1kmxKX.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=76', '2020-01-20 15:54:26', '2020-01-20 15:54:26'),
	(12, 4, '土庫庄役場', 'xf0ErlHtdwK1KNx63MeTzxK4kOfeMrJlwRH6Mjly.jpeg', NULL, '2020-01-20 16:36:28', '2020-01-20 16:36:28'),
	(13, 5, '鄧麗君出生地文化園區', 'oQ2qtaCa99VdU73YSJhIB0BKmEOolT1iWYufSDUz.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=477', '2020-01-20 15:56:13', '2020-01-20 15:56:13'),
	(14, 5, '馬鳴山五年千歲公園', '4X2S6hyr9jmrOhCeafvsKGiVwBZskEcUqJDldyR5.jpeg', 'http://www.royal-lords.org.tw/about/about.php', '2020-01-20 15:57:09', '2020-01-20 15:57:09'),
	(15, 5, '馬鳴山鎮安宮', 'PWyFNvtXrdIzVdUmACMlExIQBQcXJ79HlmmI4o9u.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=59', '2020-01-20 16:00:54', '2020-01-20 16:00:54'),
	(16, 6, '甭錢教育農場', 'tpnjqBMs5gzjTdWvD6lcVypzNdqHZFIua0M3MU8Y.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=154', '2020-01-20 16:02:24', '2020-01-20 16:02:24'),
	(17, 6, '賜安宮', 't3LYjpHj64JJtpdRgSzrIQXboiDBABx9fETV95Gu.jpeg', NULL, '2020-01-20 16:02:48', '2020-01-20 16:02:48'),
	(18, 6, '18將軍祠', 'nyamxcMlF8laSYWtEJHeil3THYVkuXFUSPCnlTFV.jpeg', NULL, '2020-01-20 16:03:04', '2020-01-20 16:03:04'),
	(19, 7, '台西沿海溼地', 'Te7Z61V6eFj50atKcv2vpT8ZZg3Z8BWGGBd9VxW2.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=256', '2020-01-20 16:04:27', '2020-01-20 16:04:27'),
	(20, 7, '台西海園', 's6n13w6V9NRPHaI3JFeVmYzcBBYHd7LtkSglZrug.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=255', '2020-01-20 16:04:59', '2020-01-20 16:04:59'),
	(21, 7, '海口生活館', 'wjkwTpPYxo9Kzc2DqyEdefDQ1JVJLGjGmgNkJzGw.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=164', '2020-01-20 16:06:26', '2020-01-20 16:06:26'),
	(22, 8, '千巧谷樂園', 'vvWUHIO55wDBusHmkuWjx6sSxstwBz9R2Ek8etEX.jpeg', 'https://www.valley-bakery.com.tw/pasture1-1', '2020-01-20 16:07:35', '2020-01-20 16:07:35'),
	(23, 8, '悠紙生活館', 'PJdUSg3hPxxBa6TCPYyrIo0fUi2NNiyY8Ysx603W.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=109', '2020-01-20 16:08:04', '2020-01-20 16:08:04'),
	(24, 8, '詔安客家文化館', 'JJirid4HDGqG1sjdhSEeuPzLy8smmOxWPqoDTbRR.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=476', '2020-01-20 16:08:27', '2020-01-20 16:08:27'),
	(25, 9, '麥寮六輕', 'F56e7aHM9ctVxNJWph317nRmIDehMs6nkngu0kKT.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=240', '2020-01-20 16:09:13', '2020-01-20 16:16:17'),
	(26, 9, '麥寮拱範宮', 'CJdAM1bPsMpYljDs7eL2lIq70m4bV7QtXwh1ICKx.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=90', '2020-01-20 16:37:35', '2020-01-20 16:37:35'),
	(27, 9, '六輕阿媽公園', 'iP4zzjd4R5RoKOmBBVvFGKdoZBhSVBqzVCDbrXzq.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=75', '2020-01-20 16:38:32', '2020-01-20 16:38:32'),
	(28, 10, '大同醬油黑金釀造館', 'HI3Qnf2ScUrNgTvwTY2TYa9akFU4R3AUcLoylhsl.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=139', '2020-01-20 16:40:11', '2020-01-20 16:40:11'),
	(29, 10, '雅聞峇里海岸', 'SCSqGA2egpxXeOBMl4mn2ZeV8pOnzqzu6xqtvW5S.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=113', '2020-01-20 16:40:36', '2020-01-20 16:40:36'),
	(30, 10, '雲科生態農場', 'qA4PWNmjP9P8XeSuKgqQdDVSfv6EG25VtjrJoSvO.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=166', '2020-01-20 16:42:11', '2020-01-20 16:42:11'),
	(31, 11, '林內紫斑蝶季', '7SavBY5crXmLeEiNlSZa3fqNR7QhCfqVl8gIl1nH.jpeg', 'https://zh-tw.facebook.com/linneibutterfly/', '2020-01-20 16:45:02', '2020-01-20 16:45:02'),
	(32, 11, '農田水利文物陳列館', 'eACcMwPb35WYUV8NZMG2ZYlhqR1y0wXmzv0d2XQk.jpeg', NULL, '2020-01-20 16:46:48', '2020-01-20 16:46:48'),
	(33, 11, '林內新公園(寶隆紙廠舊址)', 'B5udCW80gK6CL3aYPjUOlQEKzt68GzIHZoduDkIt.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=546', '2020-01-20 16:47:07', '2020-01-20 16:47:07'),
	(34, 12, '綠色隧道', 'UYjq73t64LiYWbITQtmZQEchl6rFcYHtEv3NmJyX.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=79', '2020-01-20 16:49:25', '2020-01-20 16:49:25'),
	(36, 12, '劍湖山世界', '9uF8T55aLQcYweqloEvmVpXstJrQAsnRZms7g7kK.jpeg', 'http://fancyworld.janfusun.com.tw/', '2020-01-21 10:53:05', '2020-01-21 10:53:05'),
	(37, 12, '草嶺幽情谷', 'XLEsgnkP5dWuAqTZimgPDsy54Gh4xycGe0MQDPVe.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=125', '2020-01-21 10:58:00', '2020-01-21 10:58:00'),
	(38, 13, '孩沙里花海', 'D3mnZU0dgtZHuxN11Pp43jfBak21sK2hzCKLrYMg.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=144', '2020-01-21 11:00:36', '2020-01-21 11:00:36'),
	(39, 13, '樹仔腳天主堂', 'T0gzw0crr9vwCa1yPxbfww2CalcF0RoHZ9uTHels.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=239', '2020-01-21 11:00:57', '2020-01-21 11:00:57'),
	(40, 13, '太子雞生態農場', 'T4owkXoGvxBziLoMdgyBNroi3xSw80ktgauYhVoX.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=895', '2020-01-21 11:02:13', '2020-01-21 11:02:13'),
	(41, 14, '西螺大橋', 'VELfAoZGKxtItQlMyKWhvPWY3zf9EO81D2kxR796.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=66', '2020-01-21 11:02:56', '2020-01-21 11:02:56'),
	(42, 14, '福興宮燈籠燈廊', 'kBN5d10RrdL9VTSWx2FZsn90AFcTtOtNsGNnTwJn.jpeg', NULL, '2020-01-21 11:03:40', '2020-01-21 11:03:40'),
	(43, 14, '丸莊醬油觀光工廠', '1tvJLvphMjWGogTWF7IbdoIPcqdfOVesh5h41SEG.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=83', '2020-01-21 11:04:33', '2020-01-21 11:04:33'),
	(44, 15, '二崙故事屋', 'jN0T657XtmmrrTV3nLAhaLv3E2wF5XAMgWZixwMt.jpeg', NULL, '2020-01-21 11:05:17', '2020-01-21 11:05:17'),
	(46, 15, '二崙運動公園', 'OvgPeRSfeOsJuxtZVT3liHMTh1gX2RR5NWyve8ZX.jpeg', NULL, '2020-01-21 11:17:45', '2020-01-21 11:17:45'),
	(47, 15, '湳仔社區彩繪', 'JyVz6wVdDVBV9JVWMuHwZfnwt1O0C3c35285gcfv.jpeg', NULL, '2020-01-21 11:19:28', '2020-01-21 11:19:28'),
	(48, 16, '北港朝天宮', 'sCRKH1ubcPBBp6bYwmDIz8kYaMa9HgjRVT9jmTiR.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=57', '2020-01-21 11:22:50', '2020-01-21 11:22:50'),
	(49, 16, '北港觀光大橋', 'Gvnwxn4qXbWvWaMlI7ZpvBHjGho0C7o5hTcmRumM.jpeg', NULL, '2020-01-21 11:24:30', '2020-01-21 11:24:30'),
	(50, 16, '北港工藝坊', 'RXlYWZRTwIpsYsuG1PuHPbLAsHDyTCfKIAuRivly.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=122', '2020-01-21 11:24:53', '2020-01-21 11:24:53'),
	(51, 17, '日據產業遺趾磚仔窯', 'Aa8OvE3UYE1UMsnZQMTkOqRMQZSofs0fhcPcCpAW.jpeg', NULL, '2020-01-21 11:25:48', '2020-01-21 11:25:48'),
	(52, 17, '憨吉密塘', 'YI1RTcMNdzUDuNehBkFrOwJICwAUEMI2fubVxVkI.jpeg', 'https://car0126.pixnet.net/blog/post/44024007', '2020-01-21 11:26:05', '2020-01-21 11:28:45'),
	(53, 17, '塭底國際賞鳥溼地', '3386n1qsdnwgUqigUZIy0YQ6SfzrenW8GuuVOobI.jpeg', NULL, '2020-01-21 11:28:25', '2020-01-21 11:28:25'),
	(54, 18, '台灣鯛生態創意園區', 'fnAfbGUnez6bzTIcOecAwUV9aXMyJnJT1zOo0f1T.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=116', '2020-01-21 11:30:48', '2020-01-21 11:30:48'),
	(55, 18, '椬梧滯洪池', 'AfOBVQ9gGxWEj3kjAdU8SDKN4njyQ61SZGipMjgB.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=424', '2020-01-21 11:31:48', '2020-01-21 11:31:48'),
	(56, 18, '好蝦冏男社', 'xNhEw5ctWkPkftjDM9iAQaTOf0d8gGDDaCOBguP7.jpeg', 'https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=100&id=319', '2020-01-21 11:33:58', '2020-01-21 11:33:58'),
	(57, 19, '三條崙海水浴場親水公園', 'erz2DdqCqoT13N3A1aNQSfuWmrwlR6tnXZUIa1Eb.jpeg', NULL, '2020-01-21 11:36:54', '2020-01-21 11:36:54'),
	(58, 19, '萡子寮彩繪村', 'SvGquFbBfXu2CgxHOHombI4A6ep84uTIQcKpr3k3.jpeg', 'https://yoke918.com/5098/', '2020-01-21 11:39:34', '2020-01-21 11:39:34'),
	(59, 19, '四湖中湖百合花園', '9vUW6RDw0DxzOh70XULdI9GNCjbAih1iPgBP36rw.jpeg', 'https://fbuon.com/blog/post/lily', '2020-01-21 11:42:07', '2020-01-21 11:42:07'),
	(60, 20, '元長榕樹牆', 'AF2opGu0VxvyT1XP6BVhGiaFq8kWSw5UgIv8UbyC.jpeg', NULL, '2020-01-21 11:44:30', '2020-01-21 11:44:30'),
	(61, 20, '元長資源共享碑', 'DwDN1IcPWx36PA0PD9XLddGbCgihOsiO5PGZhBaz.jpeg', NULL, '2020-01-21 11:46:30', '2020-01-21 11:49:57'),
	(62, 20, '鹿北社區', 'OZIjJQxO20HwP1MndSUTF7w1sMDQAeuRuoDYNfrH.jpeg', NULL, '2020-01-21 11:48:40', '2020-01-21 11:48:40');
/*!40000 ALTER TABLE `town_scenic_spots` ENABLE KEYS */;

-- 傾印  表格 project0118.users 結構
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'guest',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.users 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, 'admin', '$2y$10$BJGg/lQKRQuB3BMm/UeCzuiSRDzAcIgZFENUdJ/KuWMcGxoN8gVPO', 'wU8sjbRIfzLpDKeNYKx58LGtA7oKZ9q2VdOtRAYzf5prSIam4TCsXd7yiA4K', '2020-01-20 09:56:45', '2020-01-20 09:56:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- 傾印  表格 project0118.yunlin_wander 結構
CREATE TABLE IF NOT EXISTS `yunlin_wander` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project0118.yunlin_wander 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `yunlin_wander` DISABLE KEYS */;
/*!40000 ALTER TABLE `yunlin_wander` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
