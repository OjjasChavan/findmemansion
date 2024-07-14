-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 03:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `video` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `sub_title` varchar(500) NOT NULL,
  `l1_title` varchar(500) NOT NULL,
  `l2_title` varchar(1000) NOT NULL,
  `l3_title` varchar(2000) NOT NULL,
  `discription` varchar(2000) NOT NULL,
  `card1_title` varchar(1000) NOT NULL,
  `card1_sub_title` varchar(1000) NOT NULL,
  `card2_title` varchar(1000) NOT NULL,
  `card2_sub_title` varchar(1000) NOT NULL,
  `card3_title` varchar(1000) NOT NULL,
  `card3_sub_title` varchar(1000) NOT NULL,
  `card4_title` varchar(1000) NOT NULL,
  `card4_sub_title` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `year`, `page_title`, `video`, `img`, `title`, `sub_title`, `l1_title`, `l2_title`, `l3_title`, `discription`, `card1_title`, `card1_sub_title`, `card2_title`, `card2_sub_title`, `card3_title`, `card3_sub_title`, `card4_title`, `card4_sub_title`) VALUES
(1, 'EST 1988', 'Consequatur eius et magnam', 'assets/video/movie.mp4', 'assets/img/about.jpg', 'Our Story', 'Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor.', 'Ullamco laboris nisi ut aliquip ex ea commo', 'Duis aute irure dolor in reprehenderit in', ' Ullamco laboris nisi ut aliquip ex ea', 'Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.', '232', 'Happy Clients', '521', 'Projects ', '1463', 'Hours Of Support', '15', 'Hard Workers');

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `alt_services_section`
--

CREATE TABLE `alt_services_section` (
  `id` int(10) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `img` varchar(200) NOT NULL,
  `card1_title` varchar(100) NOT NULL,
  `card1_sub_title` varchar(200) NOT NULL,
  `card2_title` varchar(200) NOT NULL,
  `card2_sub_title` varchar(200) NOT NULL,
  `card3_title` varchar(200) NOT NULL,
  `card3_sub_title` varchar(200) NOT NULL,
  `card4_title` varchar(200) NOT NULL,
  `card4_sub_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alt_services_section`
--

INSERT INTO `alt_services_section` (`id`, `page_title`, `discription`, `img`, `card1_title`, `card1_sub_title`, `card2_title`, `card2_sub_title`, `card3_title`, `card3_sub_title`, `card4_title`, `card4_sub_title`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '[value-9]', '[value-10]', '[value-11]', '[value-12]');

-- --------------------------------------------------------

--
-- Table structure for table `blog_info`
--

CREATE TABLE `blog_info` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `writer_name` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(4000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_info`
--

INSERT INTO `blog_info` (`id`, `img`, `blog_title`, `writer_name`, `date`, `description`) VALUES
(4, 'assets/img/blog/blog-3.jpg', 'Blog One', 'Jane Smith', '2023-11-25', '<h3><em><strong>Et quae iure vel ut odit alias.</strong></em></h3>\r\n<p><span style=\"text-decoration: underline;\"><strong>Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui. Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea. Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.</strong></span></p>'),
(3, 'assets/img/blog/blog-2.jpg', 'Blog Two', 'John Doe', '2023-11-23', '<h3><em><span style=\"text-decoration: underline;\">Ut repellat blanditiis est dolore sunt dolorum quae.</span></em></h3>\r\n<p><em><span style=\"text-decoration: underline;\">Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae. Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat. Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.</span></em></p>');

-- --------------------------------------------------------

--
-- Table structure for table `client_section`
--

CREATE TABLE `client_section` (
  `id` int(11) NOT NULL,
  `client_title` varchar(200) NOT NULL,
  `client_subtitle` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_section`
--

INSERT INTO `client_section` (`id`, `client_title`, `client_subtitle`) VALUES
(1, 'Clients', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.');

-- --------------------------------------------------------

--
-- Table structure for table `client_setting`
--

CREATE TABLE `client_setting` (
  `id` int(11) NOT NULL,
  `client_logo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_setting`
--

INSERT INTO `client_setting` (`id`, `client_logo`) VALUES
(1, 'assets/img/clients/client-1.png'),
(2, 'assets/img/clients/client-2.png'),
(3, 'assets/img/clients/client-3.png'),
(4, 'assets/img/clients/client-4.png'),
(5, 'assets/img/clients/client-5.png'),
(6, 'assets/img/clients/client-6.png'),
(7, 'assets/img/clients/client-7.png'),
(8, 'assets/img/clients/client-8.png'),
(11, 'assets/img/clients/pricing-business.png');

-- --------------------------------------------------------

--
-- Table structure for table `constructions_header`
--

CREATE TABLE `constructions_header` (
  `id` int(11) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `page_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `constructions_header`
--

INSERT INTO `constructions_header` (`id`, `page_title`, `page_description`) VALUES
(1, 'Constructions', 'Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum');

-- --------------------------------------------------------

--
-- Table structure for table `constructions_setting`
--

CREATE TABLE `constructions_setting` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `constructions_setting`
--

INSERT INTO `constructions_setting` (`id`, `img`, `name`, `description`) VALUES
(1, 'assets/img/constructions/constructions-1.jpg', 'Eligendi omnis sunt veritatis.', 'Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.'),
(4, 'assets/img/constructions/constructions-2.jpg', 'Possimus ut sed velit assumenda', 'Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.'),
(5, 'assets/img/constructions/constructions-3.jpg', 'Error beatae dolor inventore aut', 'Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.'),
(6, 'assets/img/constructions/constructions-4.jpg', 'Expedita voluptas ut ut nesciunt', 'Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_setting`
--

CREATE TABLE `contact_setting` (
  `id` int(11) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `map` varchar(5000) NOT NULL,
  `contact_title` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_setting`
--

INSERT INTO `contact_setting` (`id`, `contact_no`, `email`, `address`, `map`, `contact_title`) VALUES
(1, '9021306538', 'Construction_Project@gmail.com', 'Nashik', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.0662047217897!2d73.78793879999999!3d20.005735899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb4926ef9aad%3A0x70378515c26ceac8!2sInnovationsHub%20Services%20Private%20Limited!5e0!3m2!1sen!2sin!4v1698918872031!5m2!1sen!2sin', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_setting`
--

CREATE TABLE `gallery_setting` (
  `id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `img_title` varchar(100) NOT NULL,
  `img_discription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_setting`
--

INSERT INTO `gallery_setting` (`id`, `category`, `img`, `img_title`, `img_discription`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]');

-- --------------------------------------------------------

--
-- Table structure for table `header_section`
--

CREATE TABLE `header_section` (
  `id` int(10) NOT NULL,
  `header_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_section`
--

INSERT INTO `header_section` (`id`, `header_img`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `home_carousel`
--

CREATE TABLE `home_carousel` (
  `id` int(11) NOT NULL,
  `carousel_title` varchar(2000) NOT NULL,
  `carousel_discription` varchar(2000) NOT NULL,
  `carousel_img` varchar(200) NOT NULL,
  `carousel_img1` varchar(200) NOT NULL,
  `carousel_img2` varchar(200) NOT NULL,
  `carousel_img3` varchar(2000) NOT NULL,
  `carousel_img4` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_carousel`
--

INSERT INTO `home_carousel` (`id`, `carousel_title`, `carousel_discription`, `carousel_img`, `carousel_img1`, `carousel_img2`, `carousel_img3`, `carousel_img4`) VALUES
(1, 'Welcome to Construction_Project', 'Construction_Project\r\n', 'assets/img/carousel_img/construction-1.jpg', 'assets/img/carousel_img/construction-2.jpg', 'assets/img/carousel_img/construction-2.jpg', 'assets/img/carousel_img/construction-2.jpg', 'assets/img/carousel_img/construction-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` int(10) NOT NULL,
  `card_title` varchar(100) NOT NULL,
  `card_subtitle` varchar(500) NOT NULL,
  `card_title1` varchar(200) NOT NULL,
  `card_subtitle1` varchar(200) NOT NULL,
  `card_title2` varchar(200) NOT NULL,
  `card_subtitle2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `card_title`, `card_subtitle`, `card_title1`, `card_subtitle1`, `card_title2`, `card_subtitle2`) VALUES
(1, 'Nesciunt Mete', 'Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.', 'Eosle Commodi', 'Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.', 'Ledo Markt', 'Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_info`
--

CREATE TABLE `inquiry_info` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry_info`
--

INSERT INTO `inquiry_info` (`id`, `name`, `email`, `subject`, `message`) VALUES
(3, 'manas ', 'manas@gmail.com', 'Web development	', 'Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.'),
(1, 'manas ', 'anant2@gmail.com', 'Web development	', 'Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus dicta.');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `site_title` varchar(200) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `footer_text` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `site_title`, `site_name`, `footer_text`) VALUES
(1, 'Construction_Project', 'Construction_Project', ' CopyrightConstruction_Project. All Rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `social_setting`
--

CREATE TABLE `social_setting` (
  `id` int(11) NOT NULL,
  `twitter_url` varchar(100) NOT NULL,
  `instagram_url` varchar(100) NOT NULL,
  `facebook_url` varchar(100) NOT NULL,
  `linkdin_url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_setting`
--

INSERT INTO `social_setting` (`id`, `twitter_url`, `instagram_url`, `facebook_url`, `linkdin_url`) VALUES
(1, 'https://twitter.com/InnovationsHubP', 'https://www.instagram.com/innovationshub_services/', 'https://www.facebook.com/InnovationsHubServices', 'https://www.linkedin.com/company/innovationshub/');

-- --------------------------------------------------------

--
-- Table structure for table `team_header`
--

CREATE TABLE `team_header` (
  `id` int(11) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `page_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_header`
--

INSERT INTO `team_header` (`id`, `page_title`, `page_description`) VALUES
(1, 'Our Team', 'Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop');

-- --------------------------------------------------------

--
-- Table structure for table `team_setting`
--

CREATE TABLE `team_setting` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `twitter_url` varchar(500) NOT NULL,
  `facebook_url` varchar(500) NOT NULL,
  `instagram_url` varchar(500) NOT NULL,
  `linkedin_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_setting`
--

INSERT INTO `team_setting` (`id`, `img`, `name`, `post`, `description`, `twitter_url`, `facebook_url`, `instagram_url`, `linkedin_url`) VALUES
(2, 'assets/img/team/team-1.jpg', 'Walter White', 'Chief Executive Officer', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', 'https://twitter.com/InnovationsHubP', 'https://www.facebook.com/InnovationsHubServices', 'https://www.instagram.com/innovationshub_services/', 'https://www.linkedin.com/company/innovationshub/'),
(3, 'assets/img/team/team-2.jpg', 'Sarah Jhinson', 'Product Manager', 'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus', 'https://twitter.com/InnovationsHubP', 'https://www.facebook.com/InnovationsHubServices', 'https://www.instagram.com/innovationshub_services/', 'https://www.linkedin.com/company/innovationshub/'),
(4, 'assets/img/team/team-3.jpg', 'William Anderson', 'CTO', 'Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara', 'https://twitter.com/InnovationsHubP', 'https://www.facebook.com/InnovationsHubServices', 'https://www.instagram.com/innovationshub_services/', 'https://www.linkedin.com/company/innovationshub/'),
(5, 'assets/img/team/team-4.jpg', 'Amanda Jepson', 'Accountant', 'Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur', 'https://twitter.com/InnovationsHubP', 'https://www.facebook.com/InnovationsHubServices', 'https://www.instagram.com/InnovationsHub_Services/', 'https://www.linkedin.com/company/innovationshub/'),
(6, 'assets/img/team/team-5.jpg', 'Brian Doe', 'Marketing', 'Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit', 'https://twitter.com/InnovationsHubP', 'https://www.facebook.com/InnovationsHubServices', 'https://www.instagram.com/InnovationsHub_Services/', 'https://www.linkedin.com/company/innovationshub/'),
(7, 'assets/img/team/team-6.jpg', 'Josepha Palas', 'Operation', 'Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel', 'https://twitter.com/InnovationsHubP', 'https://www.facebook.com/InnovationsHubServices', 'https://www.instagram.com/InnovationsHub_Services/', 'https://www.linkedin.com/company/innovationshub/');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_info`
--

CREATE TABLE `testimonial_info` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL,
  `img` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial_info`
--

INSERT INTO `testimonial_info` (`id`, `name`, `post`, `img`, `description`) VALUES
(1, 'Saul Goodman', 'Ceo & Founder ', 'assets/img/testimonials/testimonials-1.jpg', ' Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. '),
(2, 'Sara Wilsson', 'Designer', 'assets/img/testimonials/testimonials-2.jpg', 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa. '),
(4, 'Jena Karlis', 'Store Owner', 'assets/img/testimonials/testimonials-3.jpg', ' Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim. '),
(5, 'Matt Brandon', 'Freelancer', 'assets/img/testimonials/testimonials-4.jpg', ' Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam. '),
(6, 'John Larson', 'Entrepreneur', 'assets/img/testimonials/testimonials-5.jpg', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_section`
--

CREATE TABLE `testimonial_section` (
  `id` int(11) NOT NULL,
  `testimonial_title` varchar(1000) NOT NULL,
  `testimonial_description` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial_section`
--

INSERT INTO `testimonial_section` (`id`, `testimonial_title`, `testimonial_description`) VALUES
(1, 'Testimonials', 'Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alt_services_section`
--
ALTER TABLE `alt_services_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_info`
--
ALTER TABLE `blog_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_section`
--
ALTER TABLE `client_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_setting`
--
ALTER TABLE `client_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constructions_header`
--
ALTER TABLE `constructions_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constructions_setting`
--
ALTER TABLE `constructions_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_setting`
--
ALTER TABLE `contact_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_setting`
--
ALTER TABLE `gallery_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_section`
--
ALTER TABLE `header_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_carousel`
--
ALTER TABLE `home_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry_info`
--
ALTER TABLE `inquiry_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_setting`
--
ALTER TABLE `social_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_header`
--
ALTER TABLE `team_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_setting`
--
ALTER TABLE `team_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_info`
--
ALTER TABLE `testimonial_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_section`
--
ALTER TABLE `testimonial_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alt_services_section`
--
ALTER TABLE `alt_services_section`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_info`
--
ALTER TABLE `blog_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_section`
--
ALTER TABLE `client_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_setting`
--
ALTER TABLE `client_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `constructions_header`
--
ALTER TABLE `constructions_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `constructions_setting`
--
ALTER TABLE `constructions_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_setting`
--
ALTER TABLE `contact_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_setting`
--
ALTER TABLE `gallery_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `header_section`
--
ALTER TABLE `header_section`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_carousel`
--
ALTER TABLE `home_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiry_info`
--
ALTER TABLE `inquiry_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_setting`
--
ALTER TABLE `social_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_header`
--
ALTER TABLE `team_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_setting`
--
ALTER TABLE `team_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonial_info`
--
ALTER TABLE `testimonial_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial_section`
--
ALTER TABLE `testimonial_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
